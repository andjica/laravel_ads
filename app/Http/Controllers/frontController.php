<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class frontController extends Controller
{
    public function index()
    {

        return view('pages.home');
    }

    public function get_dev()
    {

        $ads = Ad::with('pictures')->where('category_id', '1')->orderBy('created_at', 'desc')->paginate(4);

        return view('pages.development', compact('ads'));
    }

    public function get_rec()
    {
        $ads = Ad::with(['pictures' => function ($query) {
            $query->limit(1);
        }])->where('category_id', '2')->orderBy('created_at', 'desc')->paginate(4);

        return view('pages.recruitment', compact('ads'));
    }

    public function get_ite()
    {
        $ads = Ad::with(['pictures' => function ($query) {
            $query->limit(1);
        }])->where('category_id', '3')->orderBy('created_at', 'desc')->paginate(4);

        return view('pages.items', compact('ads'));
    }

    public function get_acctypes()
    {

        return view('pages.accounttypes');
    }

    public function get_ad($ad)
    {

        $data['ad'] = Ad::with('user','pictures','videos')->where('id',$ad)->first() ?? abort(404);

        $data['ads'] = Ad::with(['pictures' => function ($query) {
            $query->limit(1);
         }])->orderBy('created_at', 'desc')->limit(3)->get();

        return view('pages.ads.ads', $data);
    }

    public function get_house()
    {
        $ads = Ad::with(['pictures' => function ($query) {
            $query->limit(1);
        }])->where('category_id', '4')->orderBy('created_at', 'desc')->paginate(4);

        return view('pages.houses', compact('ads'));
    }

    public function get_car()
    {
        $ads = Ad::with(['pictures' => function ($query) {
            $query->limit(1);
        }])->where('category_id', '5')->orderBy('created_at', 'desc')->paginate(4);

        return view('pages.cars', compact('ads'));
    }
    public function get_com()
    {
        $ads = Ad::with(['pictures' => function ($query) {
            $query->limit(1);
        }])->where('category_id', '6')->orderBy('created_at', 'desc')->paginate(4);

        return view('pages.company', compact('ads'));
    }
}   
