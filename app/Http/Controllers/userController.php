<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class userController extends Controller
{
    public function index(){

        return view('pages.user.ads');
    }
    public function get_user(){

        return view('pages.user.profile');
    }
    public function insert_ads(){

        $categories = Category::all();
        return view('pages.user.make_ads', compact('categories'));
    }
}
