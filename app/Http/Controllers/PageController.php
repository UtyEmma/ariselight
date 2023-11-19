<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PageController extends Controller {

    function home(){
        $properties = Property::isActive()->latest()->limit(6)->get();
        $testimonials = Testimonial::isActive()->get();
        return view('welcome', ['properties' => $properties, 'testimonials' => $testimonials]);
    }

    function about(){
        $testimonials = Testimonial::isActive()->get();
        return view('about', compact('testimonials'));
    }

    function contact(){
        return view('contact');
    }

}
