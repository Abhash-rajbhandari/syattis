<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    function gettingAbout(){
        return view('pages.aboutPage')->with('Author','Abhash');
    }

    function contact(){
        return view('pages.contact');
    }

    function homePage(){
        return view('pages.home');
    }
}
