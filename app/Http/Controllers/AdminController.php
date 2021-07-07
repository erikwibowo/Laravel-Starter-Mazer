<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin', [
            'title'     => ENV('APP_NAME')." - Data Admin",
            'subtitle'  => "Data Admin",
            'data'      => Admin::latest()->get()
        ]);
    }
}
