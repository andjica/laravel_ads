<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class frontController extends Controller
{
    public function index(){

        return view('pages.home');
    }




    public function get_dev(){

        
        return view('pages.development');
    }
    public function get_rec(){

        return view('pages.recruitment');
    }
    public function get_ite(){

        return view('pages.items');
    }
    public function get_acctypes(){

        return view('pages.accounttypes');
    }

    public function get_ad($ad){

        $ad = Ad::with('user','pictures','videos')->where('id',$ad)->first() ?? abort(404);
        return view('pages.ads.ads', compact('ad'));
    }
    public function get_house(){

        return view('pages.houses');
    }
    public function get_car(){

        return view('pages.cars');
    }
}   
