<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeasonsController extends Controller
{

    public function index(Serie $serie)
    {
        $seasons = $serie->temporadas()
            ->with('episodes')->get();
        // dd($seasons);
        // foreach($seasons as $sea){
        //     print_r($sea->numero);
        // }
        // exit();

        return view('seasons.index')
            ->with('seasons', $seasons)
            ->with('serie', $serie);
    }
}
