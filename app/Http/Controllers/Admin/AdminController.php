<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AdminUploadRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\AdminUpload;

class AdminController extends Controller
{
    public function index (){

        $contents = AdminUpload::all();

        return view ('admin.dashboard',compact('contents'));
    }

    public function create(){

        return view("admin.create");
    }

    public function store(AdminUploadRequest $request){

        $newContent = new AdminUpload();

        $data = $request->validated();

        // dd($data);

        $newContent->fill($data);

        $admin_id = Auth::user()->id;
        $newContent->admin_id = $admin_id;

        // dd($newContent->admin_id);

        $newContent->save();



        return redirect()->route("admin.dashboard")->with("created",$newContent->name_content);
    }
    
}
