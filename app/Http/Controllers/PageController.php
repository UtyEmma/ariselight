<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PageController extends Controller {

    function home(){
        $properties = Property::isActive()->latest()->limit(6)->get();
        return view('welcome', ['properties' => $properties]);
    }

    function about(){
        return view('about');
    }

    function contact(){
        return view('contact');
    }

}
