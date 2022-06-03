<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function home(){
        return view('pages.home'); 
    }
    function team(){
        return view('pages.team');
    }
    function about(){
        return view('pages.about');
    }
    function contact(){
        return view('pages.contact');
    }

    function product(){
        $pro = array
        (
            "name"=>"T-Shirt",
            "id"=>123,
            "quality"=>"cotton"
        );
        $pro =(object) $pro;
        //return var_dump($pro);
        return view('pages.product')->with('pro',$pro);
    }
}
