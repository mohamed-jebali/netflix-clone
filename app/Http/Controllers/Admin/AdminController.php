<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin;
use App\Models\AdminUploads;

class AdminController extends Controller
{
    public function dashboard (){
        return view ('admin.dashboard');
    }
}
