<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller {

    function index(Request $request){

        $properties = Property::isActive()
                            ->when($request->type, fn($query, $type) => $query->where('type', 'LIKE', "%$type%"))
                            ->when($request->location, function ($query, $location) {
                                $query->where('city', 'LIKE', "%$location%")
                                    ->orWhere('address', 'LIKE', "%$location%")
                                    ->orWhere('state', 'LIKE', "%$location%");
                            })
                            ->when($request->keyword, fn($query, $keyword) => $query->where('title', 'LIKE', "%$keyword%"))
                            ->when($request->min, fn($query, $min) => $query->where('price', '<', "%$min%"))
                            ->when($request->max, fn($query, $max) => $query->where('price', '>', "%$max%"))
                            ->latest()
                            ->paginate();


        return view('properties', [
            'properties' => $properties
        ]);
    }

    function show(Request $request, Property $property) {
        return view('property-details', ['property' => $property]);
    }

}
