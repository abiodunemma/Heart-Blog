<?php

namespace App\Http\Controllers;
use App\Models\Upload;
use App\Models\User;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        return view ('/Upload/view');
    }

}
