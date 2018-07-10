<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){

        return view('pages.user.account');
    }
    public function get_user(){

        return view('pages.user.profile');
    }
}
