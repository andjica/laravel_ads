<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Ad;
use App\User;

class userController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index(){

        $ad = Ad::with('user','pictures','videos')->where('user_id','=',auth()->user()->id)->first();
        return view('pages.user.ads', compact('ad'));
    }
    public function get_user(){

        $user = User::with('ad')->find(auth()->user()->id);
        return view('pages.user.profile', compact('user'));
    }
    public function insert_ads(){

        $categories = Category::all();
        return view('pages.user.make_ads', compact('categories'));
    }

    public function destroy()
    {
        if (auth()->check())
        {
            Ad::destroy(auth()->user()->ad->id);
            return redirect('/user_profile');
        }

        dd(request());
        return redirect()->back();
    }

    public function showAdEdit()
    {
        $ad = Ad::where('user_id',auth()->user()->id)->first();
        return view('pages.user.edit_ad', compact('ad'));
    }
}
