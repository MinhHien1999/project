<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function getDashboard(){
        return view('backend.pages.dashboard');
    }
    public function getCategory(){
        return view('backend.pages.category.home');
    }
}
