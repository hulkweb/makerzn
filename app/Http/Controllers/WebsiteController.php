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

        $plans = Plan::orderBy("id", 'desc')->get();
        $blogs = Blog::orderBy("views", 'desc')->paginate(3);
        return view('pages.website.index', compact('plans', 'blogs'));
    }

    public function show_plan($plan_id)
    {

        $quote = Plan::find($plan_id);

        return view("pages.website.plan", compact('quote',));
    }

    public function blogs()
    {
        $blogs = Blog::orderBy("views", 'desc')->paginate(20);
        $title = "Blogs";
        $recent_posts = Blog::orderBy("id", "desc")->take(3)->get();
        return view("blogs", compact('title', 'blogs', 'recent_posts'));
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
    public function services()
    {
        $services = Service::orderBy("id", 'desc')->paginate(10);
        $title = "Services";
        return view("services", compact('title', 'services'));
    }
    public function service($slug)
    {
        $service = Service::where("slug", trim($slug))->first();
        if (!$service) {
            return redirect()->back();
        }
        $title = $service->title;
        $services = Service::orderBy("id", 'desc')->paginate(10);

        return view("service", compact('title', 'service', 'services'));
    }
    public function locations()
    {
        $locations = Location::orderBy("id", 'desc')->paginate(10);
        $title = "Services";
        return view("locations", compact('title', 'locations'));
    }
    public function location($slug)
    {
        $location = Location::where("slug", trim($slug))->first();
        if (!$location) {
            return redirect()->back();
        }
        $title = $location->title;

        $locations = Location::orderBy("id", 'desc')->paginate(10);

        return view("location", compact('title', 'location', 'locations'));
    }
    public function privacy()
    {

        $title = "Privacy Policy";
        return view('privacy', compact('title'));
    }
    public function about()
    {

        $title = "About Us";
        return view('about', compact('title'));
    }
    public function contact()
    {

        $title = "Contact Us";
        return view('contact', compact('title'));
    }
    public function terms()
    {

        $title = "Terms And Conditions";
        return view('terms', compact('title'));
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


    public function store_quote(Request $request)
    {
        // Retrieve the form data from the session
        $formData = session('nemt_ride_data');

        // Save the form data to the database
        $quote = new Quote();
        $quote->name = $request->name;
        $quote->email = $request->email;
        $quote->phone = $request->phone;
        $quote->drivable = $request->has('drivable') ? true : false;
        $quote->modified = $request->has('modified') ? true : false;
        $quote->make_id = $request->make_id;
        $quote->modal_id = $request->modal_id;
        $quote->year = $request->year;
        $quote->pickup_address = $formData['pickup_location'];
        $quote->dropoff_address = $formData['dropoff_location'];
        if ($request->has('modification_type_id')) {

            $quote->modification_type_id = $request->modification_type_id;
        }
        $quote->pickup_lat = $formData['pickup_lat'];
        $quote->dropoff_lat = $formData['dropoff_lat'];

        $quote->pickup_long = $formData['pickup_lng'];
        $quote->dropoff_long = $formData['dropoff_lng'];

        $quote->save();
        $ref_id = "REF" . rand(10000, 9999) . $quote->id;
        $quote->ref_id = $ref_id;
        $quote->save();
        // Clear the session data
        session()->forget('nemt_ride_data');

        return redirect()->route("show_quote", $ref_id);
    }

    public function retrive_quote()
    {
        $ref_id = request('ref_id');
        $quote = Quote::where("ref_id", $ref_id)->first();
        if ($quote) {

            return redirect(route('show_quote', $ref_id));
        } else {
            return back()->with("Error", "No records found !");
        }
    }

    public function getModels($make_id)
    {
        $models = Modal::where('make_id', $make_id)->get();
        return response()->json($models);
    }

    public function forced_quote($ref_id)
    {
        $quote = Quote::where("ref_id", $ref_id)->first();
        return view("quotes.forced", compact('quote'));
    }
    public function booking_details($ref_id)
    {
        $quote = Quote::where("ref_id", $ref_id)->first();
        return view("quotes.booking", compact('quote'));
    }
    public function save_booking_details(Request $request)
    {
        $request->validate([
            'quote_id' => 'required|integer',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            // Add other necessary validation rules
        ]);

        // Generate a unique payment ID
        $paymentId = uniqid();

        // Save the data to the database
        $booking = new Booking();
        $booking->quote_id = $request->quote_id;
        $booking->car_vin = $request->car_vin;
        $booking->car_color = $request->car_color;
        $booking->departure_date = $request->departure_date;
        $booking->customer_name = $request->customer_name;
        $booking->customer_email = $request->customer_email;
        $booking->customer_phone = $request->customer_phone;
        $booking->departure_customer_phone = $request->departure_customer_phone;
        $booking->destination_customer_name = $request->destination_customer_name;
        $booking->destination_customer_phone = $request->destination_customer_phone;
        // $booking->payment_id = $paymentId;
        // $booking->payment_status = $request->payment_status;
        $booking->save();


        $ref_id = Quote::find($request->quote_id)->ref_id;

        return redirect(route("quote.payment", $request->ref_id));
    }
    public function payment($ref_id)
    {
        $quote = Quote::where('ref_id', $ref_id)->first();
        if (!$quote) {
            return redirect(route('home'));
        }
        $booking = Booking::where("quote_id", $quote->id)->first();

        return view("quotes.payment", compact('quote', 'booking'));
    }

    public function payment_success($ref_id)
    {
        $quote = Quote::find($ref_id);
        if ($quote) {
            return view("quotes.success", compact('quote'));
        } else {
            redirect(route("home"));
        }
    }
    public function stripe_success($ref_id)
    {
        $quote = Quote::where('ref_id', $ref_id)->first();
        $booking = Booking::where("quote_id", $quote->id)->first();
        if ($quote) {
            return view("quotes.stripe_success", compact('quote', 'booking'));
        } else {
            redirect(route("home"));
        }
    }

    public function track_quote()
    {

        if (request("ref_id") != "") {
            $quote = Quote::where('ref_id', request('ref_id'))->first();
            if ($quote) {
                return redirect(route("quote.forced", $quote->ref_id));
            }
        }

        return redirect(route("home"));
    }
}
