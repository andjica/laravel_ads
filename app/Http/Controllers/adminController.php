<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{

    /*public function __construct()
    {
        $this->middleware('admin');
    }*/

    public function index(){

        return view('pages.admin.index');
    }
    public function get_ads(){

        return view('pages.admin.ads');
    }
    public function get_user(){

        return view('pages.admin.user');
    }
}
