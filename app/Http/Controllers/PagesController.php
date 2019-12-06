<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title ="Hi Welcome!!!";
        return view('pages.index', compact('title'));
    }
    public function about(){
        $title ="about";
    
        return view('pages.about');
    }
    public function services(){
        $data= ['title'=>'services',
        'services'=>[
            'SEO','Web DEV','Phy','Bubby'
        ]
    ];
        return view('pages.services')->with($data);
    }
}
