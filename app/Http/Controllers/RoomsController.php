<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	/*Obtenemos todas las habitaciones que estan agregadas
    	y las mandamos a la vista room para que se llene la lista 
    	desplegable*/
    	$types=Room::all();
        return view('room', compact("types"));
    }

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    	Room::create($request->all());
        
        return 'Habitacion agregada';


    }

}
