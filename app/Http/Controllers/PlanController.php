<?php

namespace App\Http\Controllers;

use App\Models\Plan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::when("search", function ($query) {
            $keyword = trim(request('search'));
            return $query->where("name", "LIKE", "%$keyword%");
        })->paginate(10);
        return view('admin.plans.index', compact("plans"));
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255|unique:plans,name',

        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules);

        // If validation fails, return validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // If validation passes, save the book data
        $plan = new Plan();
        $plan->name = $request->input('name');
        $plan->price = $request->input('price');
        $plan->duration = $request->input('duration');
        $plan->daily_rebate = $request->input('daily_rebate');
        $plan->recoverable_funds = $request->input('recoverable_funds');
        $plan->principal_refund = $request->input('principal_refund');
        $plan->interest_settlement_time = $request->input('interest_settlement_time');
        $plan->status = $request->input('status');

        $slug = str_replace(" ", "-", trim(strtolower($request->name)));
        $plan->body = $request->input('body');
        if ($request->hasFile("image")) {
            $file = $request->file('image');
            $image = $slug . "." . $file->getClientOriginalExtension();
            $file->move("uploads/plans", $image);
            $plan->image = $image;
        }
        $plan->status = $request->input('status');

        // Add more fields as needed
        $plan->save();


        return response()->json(['message' => 'Plan saved successfully', 'status' => 200], 200);
    }
    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',

        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules);

        // If validation fails, return validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // If validation passes, save the book data
        $book =  Plan::find($id);

        $book->name = $request->input('name');
        $slug = str_replace(" ", "-", trim(strtolower($request->name)));
        $book->subtitle = $request->input('subtitle');
        $book->body = $request->input('body');
        if ($request->hasFile("image")) {
            $file = $request->file('image');
            $image = $slug . "." . $file->getClientOriginalExtension();
            $file->move("uploads/plans", $image);
            $book->image = $image;
        }
        $book->status = $request->input('status');
        // Add more fields as needed
        // $book->slug = $slug . "-" . $book->id;
        $book->save();

        return response()->json(['message' => 'Plan saved successfully', 'status' => 200], 200);
    }

    public function destroy($id)
    {
        $data = Plan::find($id);
        $data->delete();
        return back()->with("success", "Deleted !");
    }
}
