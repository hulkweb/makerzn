<?php

namespace App\Http\Controllers;

use App\Enums\TransactionStatus;
use App\Enums\TransactionType;
use App\Models\Blog;
use App\Models\Booking;
use App\Models\Location;
use App\Models\Make;
use App\Models\Modal;
use App\Models\ModificationType;
use App\Models\Plan;
use App\Models\Quote;
use App\Models\Service;
use App\Models\Transaction;
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
        $blogs = Blog::orderBy("id", 'desc')->paginate(3);
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
        if ($user->refer_by != "") {
            $one = User::find($user->refer_by);
            if ($one) {
                $transaction = new Transaction();
                $transaction->usd_value = $plan->first_referral;
                $transaction->user_id = $one->id;
                $transaction->referral = true;
                $transaction->status = TransactionStatus::$SUCCESS;
                $transaction->type = TransactionType::$DEPOSIT;
                $transaction->save();

                $one->wallet_balance += $plan->first_referra;;
                $one->save();
            }
        }
        return redirect(route("orders"))->with("success", "Order completed successfully");
    }
    public function blogs()
    {
        // $blogs = Blog::orderBy("views", 'desc')->paginate(20);
        // $title = "Blogs";
        $blogs = Blog::orderBy("id", "desc")->paginate(9);
        // return view("blogs", compact('title', 'blogs', 'blogs'));
        return view("pages.website.blogs", compact('blogs'));
    }
    public function blog($slug)
    {
        $blog = Blog::find($slug);
        if (!$blog) {
            return redirect()->back();
        }
        $title = $blog->title;
        $recent_posts = Blog::take(4)->orderBy("id", "desc")->get();
        return view("pages.website.blog", compact('title', 'blog', 'recent_posts'));
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




    public function cronJob()
    {

        $userPlans = UserPlanDetail::where("status", "Active")->get();
        foreach ($userPlans as  $item) {
            if (time() > strtotime($item->end_date)) {
                $item->status = "Inactive";
                $item->save();
            } else {
                $user = User::find($item->user_id);
                $transaction = new Transaction();
                $transaction->user_id = $user->id;
                $transaction->user_plan_detail_id = $item->id;
                $transaction->usd_value = $item->plan->daily_rebate;
                $transaction->type = TransactionType::$DEPOSIT;
                $transaction->status = TransactionStatus::$SUCCESS;
                $transaction->save();

                $user->wallet_balance += $item->plan->daily_rebate;
                $user->save();
            }
        }
    }
}
