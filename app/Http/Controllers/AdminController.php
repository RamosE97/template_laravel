<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        return view('admin.admin_login');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function tables(){
        return view('admin.tables');
    }
}