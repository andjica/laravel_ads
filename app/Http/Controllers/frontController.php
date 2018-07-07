<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    

}
