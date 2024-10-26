<?php

namespace App\Http\Controllers;
use App\Models\Upload;
use App\Models\User;

use Illuminate\Http\Request;

class UploadController extends Controller

{
    public function get(){
        return view ('Upload/view');
    }

    public function upload(Request $request){

        {
            // Validate input
            $request->validate([
                'userid' => 'required',
                'quote' => 'required|string',
                'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            ]);

            $imagePath = null;

            // Handle file upload
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('quotes', 'public'); // stores in /storage/app/public/quotes
            }

            // Store quote in the database
            Upload::create([
                'userid' => $request->userid,
                'quote' => $request->quote,
                'image_path' => $imagePath,
            ]);

            return redirect()->back()->with('success', 'Quote saved successfully!');
        }
       // return view ('/Upload/view');
    }

    public function home(){
        return view('/Upload/home');
    }

}
