<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    //
    function getIndex(){
        return view('home.index');
       
    }
    function getService(){
        return view('home.service');
       
    }
     function getAbout(){
        return view('home.about');
       
    }
    function getVolunteer(){
        return view('home.volunteer');
       
    }
}
