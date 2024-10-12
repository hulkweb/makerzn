<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::all();
        return view("pages.admin.settings", compact("settings"));
    }
    public function store(Request $request)
    {
        $new = new Setting();
        $new->name = $request->name;
        $new->type = $request->type;
        if ($request->type == "image") {
            if ($request->hasFile('value')) {
                $file = $request->file("value");
                $name = $request->name . "." . $file->getClientOriginalExtension();

                $file->move("public/uploads/settings", $name);
                $new->value = "uploads/settings/$name";
            }
        } else {
            $new->value = $request->value;
        }
        $new->save();
        return response()->json(['status' => 200, 'message' => 'Settings created successfully']);
    }
    public function update(Request $request, $id)
    {
        $new =  Setting::find($id);
        $new->name = $request->name;
        $new->type = $request->type;
        if ($request->type == "image") {
            if ($request->hasFile('value')) {
                $file = $request->file("value");
                $name = $request->name . "." . $file->getClientOriginalExtension();

                $file->move("public/uploads/settings", $name);
                $new->value = "uploads/settings/$name";
            }
        } else {
            $new->value = $request->value;
        }
        $new->save();
        return response()->json(['status' => 200, 'message' => 'Settings created successfully']);
    }
}
