<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GeoLocationController extends Controller
{
    public function places(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'latitude'  => 'required',
            'longitude' => 'required',
        ]);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $latlng = $request->latitude . ',' . $request->longitude;

        $places = \GoogleMaps::load('nearbysearch')
            ->setParam([
                'location'  => $latlng,
                'radius'    => isset($request->radius) ? $request->radius : '5000',
            ])
            ->get();

        return response($places, 200);
    }
}
