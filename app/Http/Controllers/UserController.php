<?php

namespace App\Http\Controllers;

use App\Enums\TransactionStatus;
use App\Enums\StatusType;
use App\Enums\TransactionType;
use App\Models\Currency;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserPlanDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function login()
    {
        return view('pages.website.login');
    }
    public function signup()
    {
        return view('pages.website.signup');
    }

    public function signup_post(Request $request)
    { // Define validation rules
        $validator = Validator::make($request->all(), [
            'username' => 'required|max:191',
            'email' => 'required|max:191|email|unique:users,email', // Ensure the email is unique
            'password' => 'required|min:6|max:191',
            'password_repeat' => 'required|same:password|max:191',
        ], [
            'username.required' => 'The username field is required.',
            'username.max' => 'The username must not exceed 191 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'The email must not exceed 191 characters.',
            'email.unique' => 'This email is already registered. Please choose another one.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password.max' => 'The password must not exceed 191 characters.',
            'password_repeat.required' => 'Please confirm your password.',
            'password_repeat.same' => 'The password confirmation does not match.',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            // return response()->json([
            //     'success' => false,
            //     'errors' => $validator->errors()
            // ], 400); // Bad Request with validation errors
            return back()->with("error", $validator->errors()->first());
        }

        // Proceed with user registration
        try {
            // Create a new user


            $user = new User();

            $user->username =  $request->username;
            $user->name =  $request->username;
            $user->email =  $request->email;
            $user->status =  "Active";

            $user->password = Hash::make($request->password);
            if ($request->filled("refer_code")) {
                $ref_user = User::where("refer_code", $request->refer_code)->first();
                if ($ref_user) {
                    $user->refer_by = $ref_user->id;
                }
            }

            $user->save();
            if ($user) {
                $user->refer_code = generateReferralCode($user->id);
                $user->save();
            }


            // Return success response
            return redirect(route('signin'))->with("success", 'Registration successfull');
            // 201 Created
        } catch (\Exception $e) {
            // Handle registration failure (e.g., database error)
            return back()->with("error", $e->getMessage());
            // Internal Server Error
        }
    }
    public function login_post(Request $request)
    { // Define validation rules
        $validator = Validator::make($request->all(), [

            'email' => 'required|max:191|email|exists:users,email', // Ensure the email is unique
            'password' => 'required|min:6|max:191',

        ], [

            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'email.max' => 'The email must not exceed 191 characters.',
            'email.unique' => 'This email is already registered. Please choose another one.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least 8 characters long.',
            'password.max' => 'The password must not exceed 191 characters.',

        ]);

        // Check if validation fails
        if ($validator->fails()) {
            // return response()->json([
            //     'success' => false,
            //     'errors' => $validator->errors()
            // ], 400); // Bad Request with validation errors
            return back()->with("error", $validator->errors()->first());
        }

        // Proceed with user registration
        try {
            if (Auth::attempt($request->only(['email', 'password']))) {
            } else {
                return back()->with("error", 'Inavalid Password');
            }
            // Create a new user
            $user = User::where("email", $request->email)->first();
            if ($user) {
                Auth::login($user);
                return redirect(route('dashboard'));
            }
            // Return success response
            // 201 Created
        } catch (\Exception $e) {
            // Handle registration failure (e.g., database error)
            return back()->with("error", $e->getMessage());
            // Internal Server Error
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(route('home'));
    }
    public function dashboard()
    {
        $user = Auth::user();
        $deposit = Transaction::where("user_id", $user->id)->where("status", TransactionStatus::$SUCCESS)->where("type", TransactionType::$DEPOSIT)->sum("usd_value");
        $withdraw = Transaction::where("user_id", $user->id)->where("status", TransactionStatus::$SUCCESS)->where("type", TransactionType::$WITHDRAW)->sum("usd_value");
        $orders = UserPlanDetail::join("plans", "user_plan_details.plan_id", "=", "plans.id")
            ->select("user_plan_details.user_id as user_id", "user_plan_details.status as plan_status", "plans.price as price")
            ->where("user_id", $user->id)->get();

        $active_orders = $orders->where("plan_status", 'Active')->sum("price");
        $inactive_orders = $orders->where("plan_status", 'Inactive')->sum("price");
        $total_orders = $orders->sum("price");
        $today_profit = 0;
        $today_reward = 0;
        $partners = 0;

        $data = [
            'balance' => priceHTML($user->wallet_balance),
            'trial_balance' => priceHTML($user->trial_balance),
            'deposit' => priceHTML($deposit),
            'withdraw' => priceHTML($withdraw),
            'total_orders' => priceHTML($total_orders),
            'active_orders' => priceHTML($active_orders),
            'inactive_orders' => priceHTML($inactive_orders),
            'today_referal' => 0,
            'today_profit' =>  priceHTML($today_profit),
            'today_reward' =>  priceHTML($today_reward),
            'partners' => $partners,
            'user' => $user


        ];
        return view("pages.user.dashboard", $data);
    }


    public function settings()
    {
        return view("pages.user.settings");
    }
    public function profile()
    {
        return view("pages.user.profile");
    }

    public function profile_post(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->username = $request->username;
        $user->email = $request->email;
        if ($request->hasFile("image")) {
            $file = $request->file('image');
            $name = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move("public/uploads/profiles", $name);
            $user->profile = $name;
        }
        $user->save();
        return back()->with('success', 'Updated successfully');
    }

    public function orders()
    {

        $orders = UserPlanDetail::where("user_id", Auth::user()->id)->orderBy("id", "desc")->paginate(10);
        return view("pages.user.orders", compact('orders'));
    }
    public function bills()
    {
        return view("pages.user.bills");
    }
    public function referrals()
    {
        $partners = User::where("user_id", Auth::user()->id)->get();
        return view("pages.user.referrals", compact("partners"));
    }
}
