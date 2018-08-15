<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class adminController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $ads = Ad::all();

        return view('pages.admin.index', compact('ads'));
    }

    public function destroy($id)
    {
        Ad::destroy($id);

        return redirect()->back();
    }
}
