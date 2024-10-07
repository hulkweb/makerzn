<?php

namespace App\Http\Controllers;

use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Models\Blog;
use App\Models\Book;
use App\Models\Chapter;
use App\Models\Plan;
use App\Models\Quote;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserPlanDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{


    public function dashboard(Request $request)
    {

        $blogs = Blog::count();
        $users = User::where("admin", false)->count();
        $orders = UserPlanDetail::count();
        $plans = Plan::count();
        return view("pages.admin.index", compact("users", 'blogs', 'orders', 'plans'));
    }
    public function signin(Request $request)
    {
        if (Auth::user() && (Auth::user()->admin == 1)) {
            return redirect(route("admin.dashboard"));
        }
        return view("pages.admin.signin");
    }
    public function profile(Request $request)
    {
        $admin = User::find(Auth::user()->id);
        $title = 'Admin Profile';
        return view("pages.admin.profile", compact('admin', 'title'));
    }
    public function profile_post(Request $request)
    {
        $admin = User::find(Auth::user()->id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        if ($request->has('password') != "") {
            $admin->password = Hash::make($request->password);
        }
        $admin->save();
        return back()->with("success", "Profile Updated successfully");
    }


    public function signin_post(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
        ], [
            'email' => "This email is not registered with us."
        ]);

        try {

            if (Auth::attempt($request->only(['email', 'password']))) {
                $user = User::where("email", $request->email)->first();
                if ($user->admin) {

                    Auth::login($user);
                    return response()->json(['message' => 'Logged In Successfully. ', 'redirect' => true, 'route' => route("admin.dashboard"), 'status' => 200]);
                } else {
                    return response()->json(['message' => 'Unauthorized Access. ', 'status' => 201]);
                }
            } else {

                return response()->json(['message' => 'Invalid Password. ', 'status' => 201]);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage(), 'status' => 201]);
        }
    }

    public function logout()
    {
        if (Auth::user()) {
            Auth::logout();
            return redirect(route("login"));
        }
    }
    public function email()
    {
        return view("mails.quote_confirmation");
    }

    public function users()
    {

        $users = User::where("admin", false)->get();
        return view("pages.admin.users", compact('users'));
    }

    public function users_update(Request $request, $id)
    {

        $user = User::find($id);
        if ($user) {
            $user->name = $request->name;
            $user->email = $request->email;
            $user->status = $request->status;

            if ($request->filled("password")) {
                $user->password = Hash::make($request->password);
            }
            $user->save();
            return response()->json(['status' => 200, "message" => "User Updated Successfully"]);
        }
        return response()->json(['status' => 201,  "message" => "User does not exists"]);
    }
    public function users_delete(Request $request, $id) {}

    public function transactions()
    {
        $transactions = Transaction::orderBy("id", "desc")->when(request()->has('type'), function ($query) {
            return $query->where("type", request("type"));
        })->when(request()->has('status'), function ($query) {
            return $query->where("status", request("status"));
        })->when(request()->has('search'), function ($query) {
            $keyword = request("search");
            $USERS = User::where("name", "LIKE", "%$keyword%")->where("name", "LIKE", "%$keyword%")->pluck("id")->toArray();
            return $query->whereIn("user_id", $USERS);
        })->get();
        return view("pages.admin.transactions", compact('transactions'));
    }

    public function transactionsUpdate(Request $request, $id)
    {

        $transaction = Transaction::find($id);
        if ($transaction) {
            $transaction->status = $request->status;
            $transaction->save();

            if ($transaction->status == TransactionStatus::$SUCCESS) {
                if ($transaction->type == TransactionType::$DEPOSIT) {
                    $user = User::find($transaction->user_id);
                    $user->wallet_balance += $transaction->usd_value;
                    $user->save();
                } else if ($transaction->type == TransactionType::$WITHDRAW) {
                    $user = User::find($transaction->user_id);
                    $user->wallet_balance -= $transaction->usd_value;
                    $user->save();
                }
            }
        }
        return response()->json(['status' => 200, "message" => "Transaction updated successfully"]);
    }

    public function subscriptions()
    {

        $subscriptions = UserPlanDetail::when(request()->has("search"), function ($query) {
            $keyword = request("search");
            $user_ids = User::where("name", "LIKE", "%$keyword%")->where("email", "LIKE", "%$keyword%")->pluck("id")->toArray();
            return $query->whereIn("user_id", $user_ids);
        })->paginate(10);
        return view("pages.admin.subscriptions", compact('subscriptions'));
    }
}
