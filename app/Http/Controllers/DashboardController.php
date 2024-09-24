<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Book;
use App\Models\Chapter;
use App\Models\Quote;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{


    public function dashboard(Request $request)
    {
        $quotes = Quote::count();
        $blogs = Blog::count();
        $services = Service::count();
        return view("admin.index", compact("quotes", 'blogs', 'services'));
    }
    public function signin(Request $request)
    {
        if (auth()->user() && (auth()->user()->admin == 1)) {
            return redirect(route("admin.dashboard"));
        }
        return view("admin.signin");
    }
    public function profile(Request $request)
    {
        $admin = User::find(auth()->user()->id);
        $title = 'Admin Profile';
        return view("admin.profile", compact('admin', 'title'));
    }
    public function profile_post(Request $request)
    {
        $admin = User::find(auth()->user()->id);
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
                    return response()->json(['message' => 'Logged In Successfully. ', 'redirect' => true, 'route' => route("dashboard"), 'status' => 200]);
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
        if (auth()->user()) {
            Auth::logout();
            return redirect(route("login"));
        }
    }
    public function email()
    {
        return view("mails.quote_confirmation");
    }
}
