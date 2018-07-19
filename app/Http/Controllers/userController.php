<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;

class userController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('pages.user.ads');
    }
    public function get_user(){

        $user = User::with('ad')->find(auth()->user()->id);
        return view('pages.user.profile', compact('user'));
    }
    public function insert_ads(){

        $categories = Category::all();
        return view('pages.user.make_ads', compact('categories'));
    }
}
