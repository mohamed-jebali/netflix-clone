<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\AdminUpload;

class AdminController extends Controller
{
    public function index (){

        $contents = AdminUpload::all();

        return view ('admin.dashboard',compact('contents'));
    }
}
