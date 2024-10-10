<?php

namespace App\Http\Controllers;
use App\Models\Upload;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function front()

    {
        $images = Upload::all();
//
        return view ('/Upload/home', compact('images'));
    }

    public function upload(Request $request)
    {
        $upload = new Upload();

        $upload->userid = request('userid');
        $upload->name = request('name');
        $upload->name = request('');

$upload->save();

        // $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048']);

        // $path = $request->file('image')->store('images', 'public');

        // Upload::create(['path' => $path]);

        return view ('Upload/upload');
      //  return redirect()->back()->with('success', 'Image uploaded successfully.');


    }


}
