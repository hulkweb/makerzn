<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'password' => 'required|min:8|max:191',
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
            $user = User::create([
                'username' => $request->username,
                'name' => $request->username,

                'email' => $request->email,
                'password' => Hash::make($request->password), // Hash the password
            ]);

            // Return success response
            return redirect(route('login'))->with("success", 'Registration successfull');
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
        return view("pages.user.dashboard");
    }
    public function deposit()
    {
        return view("pages.user.deposit");
    }
    public function withdraw()
    {
        return view("pages.user.withdraw");
    }
    public function settings()
    {
        return view("pages.user.settings");
    }
    public function profile()
    {
        return view("pages.user.profile");
    }
    public function orders()
    {
        return view("pages.user.orders");
    }
    public function bills()
    {
        return view("pages.user.bills");
    }
    public function referrals()
    {
        return view("pages.user.referrals");
    }
}
