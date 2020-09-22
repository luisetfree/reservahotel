<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Usuario;
use App\Room;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        //$reservas=Reservation::all();

          /*Aqui obtenemos el ultimo id de la reserva en cuestion*/
        $reser=Reservation::all()->last()->id;
        
        /*Mediante ese ID hacemos la busqueda especifica y pasamos los 
         datos a la vista en cuestion */
        $id=$reser;
        $reservas=Reservation::where('id', '=', $id)->orderBy('id', 'desc')->get();


        /*Aqui obtenemos el ultimo id del usuario registrado y lo enviaremos
        a la vista Resumen, para mostrar los datos del usuario*/
        $usuario=Usuario::all()->last()->id;
        
        /*Mediante ese ID hacemos la busqueda especifica y pasamos los 
         datos a la vista en cuestion */
        $id=$usuario;
        $usuarios=Usuario::where('id', '=', $id)->orderBy('id', 'desc')->get();


        return view('resumen', compact('reservas','usuarios'));





    //return view('resumen', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reserva2');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        /*Guarda toda la informacion del formulario*/
        Reservation::create($request->all());

      
        //return view('resumen');
        //return 'Reserva creada con exito';
        return redirect('/resumen');
    }

    /**
     * Muestra un listado con todas las reservaciones al administrador
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      /*Uniendo mediante ID los datos de dos tablas*/
           $reservas = \DB::table('usuarios')
            ->join('reservations', 'usuarios.id', '=', 'reservations.usuario_id')
            ->select('reservations.*', 'usuarios.name', 'usuarios.lastname', 'usuarios.phone', 'usuarios.email'
                , 'usuarios.country')
            ->get();

        $rooms=Room::all();



      return view('admin2', compact('reservas','rooms'));

        //
    }

     /**
     * Recibe como parametro el ID de una reserva para luego mostrar datos
     *
     
     * @return \Illuminate\Http\Response
     */
    public function muestra($id)
    {
        //almacenando en dato el valor del id que viene por parametro
        $dato=$id;
        
        //mediante el id pasado por parametro se muestra la informacion de la reserva
        
        $reservas=Reservation::where('id', '=', $dato)->orderBy('id', 'desc')->get();


        
        
        
        /*Mediante ese ID hacemos la busqueda especifica y pasamos los 
         datos a la vista en cuestion */
        
        $usuarios=Usuario::where('id', '=', $dato)->orderBy('id', 'desc')->get();

        /*Se reutiliza la vista resumen para mostrar la info */
        return view('detalle', compact('reservas','usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Elimina una reservacion en especifico, solo se le pasa por parametro el iD 
     * que se necesita eliminar
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        
        $reservacion=Reservation::findOrFail($id);
        $reservacion->delete();
        
        //retorno al metodo Show para que me devuelva a la pagina de origen de los datos
        return $this->show(); 
    }
}
