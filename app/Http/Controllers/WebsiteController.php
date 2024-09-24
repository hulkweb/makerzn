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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
    public function index()
    {

        // $plans = Plan::orderBy("id", 'desc')->get();
        // $blogs = Blog::orderBy("views", 'desc')->paginate(3);
        // return view('pages.website.index', compact('plans', 'blogs'));
        return view('pages.website.index',);
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
        return view("pages.website.plans",);
    }
    public function plan($plan_id)
    {

        $quote = Plan::find($plan_id);

        return view("pages.website.plan", compact('quote',));
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


    public function store_location(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pickup_location' => 'required|string|max:255',
            'pickup_lat' => 'required',
            'pickup_lng' => 'required',
            'dropoff_location' => 'required|string|max:255',
            'dropoff_lat' => 'required',
            'dropoff_lng' => 'required',
            // Validate other fields as necessary
        ]);
        if ($validator->fails()) {
            return back()->with("error", $validator->errors()->first());
        }
        $formData = $request->all();

        // Save form data in session
        session(['nemt_ride_data' => $formData]);

        // Redirect to the next page where the data will be accessed
        return redirect()->route('get_quote');
    }
}
