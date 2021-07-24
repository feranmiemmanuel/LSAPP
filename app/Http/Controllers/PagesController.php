<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title= "WELCOME TO LARAVEL";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }
    public function about(){
        $title="ABOUT US";
        //the following code is another way of executing line 13
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data= array(
            'title'=>'SERVICES', 'services'=>['web design', 'programming', 'seo']
        );
        return view('pages.services')->with($data);
    }
}
