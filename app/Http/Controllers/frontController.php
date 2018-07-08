<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index(){

        return view('pages.home');
    }
<<<<<<< HEAD

=======
>>>>>>> 998d4e63c9d8e97ff6cd36d64386216abbda0a3a
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
    
<<<<<<< HEAD

=======
>>>>>>> 998d4e63c9d8e97ff6cd36d64386216abbda0a3a
}
