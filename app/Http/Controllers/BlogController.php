<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::when("search", function ($query) {
            $keyword = trim(request('search'));
            return $query->where("title", "LIKE", "%$keyword%");
        })->paginate(10);
        return view('pages.admin.blogs.index', compact("blogs"));
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'title' => 'required|string|max:255|unique:blogs,title',

        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules);

        // If validation fails, return validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // If validation passes, save the book data
        $book = new Blog();
        $book->title = $request->input('title');
        $book->subtitle = $request->input('subtitle');
        $slug = str_replace(" ", "-", trim(strtolower($request->title)));
        $book->body = $request->input('body');
        if ($request->hasFile("image")) {
            $file = $request->file('image');
            $image = $slug . "." . $file->getClientOriginalExtension();
            $file->move("public/uploads/blogs", $image);
            $book->image = $image;
        }
        $book->status = $request->input('status');

        // Add more fields as needed
        $book->save();

        // $book->slug = $slug . "-" . $book->id;
        $book->save();

        return response()->json(['message' => 'Blog saved successfully', 'status' => 200], 200);
    }
    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'title' => 'required|string|max:255',

        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules);

        // If validation fails, return validation errors
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        // If validation passes, save the book data
        $book =  Blog::find($id);

        $book->title = $request->input('title');
        $slug = str_replace(" ", "-", trim(strtolower($request->title)));
        $book->subtitle = $request->input('subtitle');
        $book->body = $request->input('body');
        if ($request->hasFile("image")) {
            $file = $request->file('image');
            $image = $slug . "." . $file->getClientOriginalExtension();
            $file->move("public/uploads/blogs", $image);
            $book->image = $image;
        }
        $book->status = $request->input('status');
        // Add more fields as needed
        // $book->slug = $slug . "-" . $book->id;
        $book->save();

        return response()->json(['message' => 'Blog saved successfully', 'status' => 200], 200);
    }

    public function destroy($id)
    {
        $data = Blog::find($id);
        $data->delete();
        return back()->with("success", "Deleted !");
    }
}