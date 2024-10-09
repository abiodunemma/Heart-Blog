<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function front()
    {
        return view ('/Upload/home');
    }

    public function upload()
    {
        return view ('/Upload/upload');
    }


}
