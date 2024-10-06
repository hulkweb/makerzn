<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Booking;
use App\Models\Location;
use App\Models\Make;
use App\Models\Modal;
use App\Models\ModificationType;
use App\Models\Plan;
use App\Models\Quote;
use App\Models\Service;
use App\Models\User;
use App\Models\UserPlanDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
    public function index()
    {

        $plans = Plan::orderBy("price", 'asc')->get();
        $blogs = Blog::orderBy("views", 'desc')->paginate(3);
        return view('pages.website.index', compact('plans', 'blogs'));
        // return view('pages.website.index',);
    }
    public function app()
    {

        // $plans = Plan::orderBy("id", 'desc')->get();
        // $blogs = Blog::orderBy("views", 'desc')->paginate(3);
        // return view('pages.website.index', compact('plans', 'blogs'));
        return view('pages.website.app',);
    }
    public function plans()
    {
        // $blogs = Blog::orderBy("views", 'desc')->paginate(20);
        // $title = "Blogs";
        // $recent_posts = Blog::orderBy("id", "desc")->take(3)->get();

        // return view("blogs", compact('title', 'blogs', 'recent_posts'));
        $plans = Plan::orderBy("price", 'asc')->get();

        return view("pages.website.plans", compact('plans'));
    }
    public function plan($plan_id)
    {

        $plan = Plan::find($plan_id);
        if (!$plan) {
            return redirect(route("home"));
        }
        return view("pages.website.plan", compact('plan',));
    }

    public function planBuy(Request $request)
    {

        if (Auth::guest()) {
            return redirect(route("signin"))->with("error", "Please signin to buy");
        }

        $user = User::find(Auth::user()->id);
        $plan = Plan::find($request->plan_id);
        if ($plan->price > $user->wallet_balance) {
            return back()->with("error", "Insufficient Funds");
        }
        $userPlanDetail = new UserPlanDetail();
        $userPlanDetail->plan_id = $plan->id;
        $userPlanDetail->user_id = $user->id;
        $userPlanDetail->status = "Active";
        $userPlanDetail->qty = $request->quantity;
        $userPlanDetail->total = $request->quantity * $plan->price;

        $userPlanDetail->start_date = now();
        $userPlanDetail->end_date = now()->addDay($plan->duration);
        $userPlanDetail->save();
        return redirect(route("orders"))->with("success", "Order completed successfully");
    }
    public function blogs()
    {
        // $blogs = Blog::orderBy("views", 'desc')->paginate(20);
        // $title = "Blogs";
        // $recent_posts = Blog::orderBy("id", "desc")->take(3)->get();
        // return view("blogs", compact('title', 'blogs', 'recent_posts'));
        return view("pages.website.blogs");
    }
    public function blog($slug)
    {
        $blog = Blog::where("slug", trim($slug))->first();
        if (!$blog) {
            return redirect()->back();
        }
        $title = $blog->title;
        $recent_posts = Blog::take(4)->orderBy("id", "desc")->get();
        return view("blog", compact('title', 'blog', 'recent_posts'));
    }

    public function policy()
    {

        $title = "Privacy Policy";
        return view('pages.website.policy', compact('title'));
    }
    public function affiliates()
    {

        $title = "Privacy Policy";
        return view('pages.website.affiliates', compact('title'));
    }
    public function about()
    {

        $title = "About Us";
        return view('pages.website.about', compact('title'));
    }
    public function contact()
    {

        $title = "Contact Us";
        return view('pages.website.contact', compact('title'));
    }
    public function terms()
    {

        $title = "Terms And Conditions";
        return view('pages.website.terms', compact('title'));
    }

    public function faq()
    {

        $title = "Terms And Conditions";
        return view('pages.website.faq', compact('title'));
    }




    public function cronJob() {}
}
