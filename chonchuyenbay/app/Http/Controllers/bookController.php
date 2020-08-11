<?php


namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class bookController
{
public function  searchFlights(Request $request){
    return timve::where('flightFrom', 'like', '%' . $request->flightFrom . '%')
        ->where('flightTo', 'like', '%' . $request->flightTo . '%')
        ->where('flightDepart', 'like', '%' . $request->flightDepart . '%')
        ->where('flightReturn', 'like', '%' . $request->flightReturn . '%')
        ->get();
}
}