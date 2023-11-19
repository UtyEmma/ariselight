<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller {

    function index(Request $request){
        $properties = Property::isActive()->latest()->paginate();

        return view('properties', [
            'properties' => $properties
        ]);
    }

    function show(Request $request, Property $property) {
        return view('property-details', ['property' => $property]);
    }

}
