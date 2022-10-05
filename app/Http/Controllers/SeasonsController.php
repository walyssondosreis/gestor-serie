<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{

    public function index(Serie $series)
    {
        $seasons = $series->temporadas()
            ->with('episodes')->get();
        // print_r($seasons);
        // exit();
        // foreach($seasons as $sea){
        //     print_r($sea->numero);
        // }
        // exit();

        return view('seasons.index')
            ->with('seasons', $seasons)
            ->with('serie', $series);
    }
}
