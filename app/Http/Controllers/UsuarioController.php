<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Room;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            /*Utilizando el constructor de COnsultas*/      
         // $usuarios = \DB::table('usuarios')->select('id','name')->get();
    
        /*Mediante el Modelo->Usuario
        *Se obtiene todo el contenido de la tabla Usuario y 
        * en la vista reserva nosotros especificamos que valores
        *vamos a utilizar.
        */
        //$usuarios=Usuario::all();
        //$usuarios=Usuario::findOrFail('2');
        
        /*Aqui obtenemos el ultimo id del usuario registrado*/
        $usuario=Usuario::all()->last()->id;
        
        /*Mediante ese ID hacemos la busqueda especifica y pasamos los 
         datos a la vista en cuestion */
        $id=$usuario;
        $usuarios=Usuario::where('id', '=', $id)->orderBy('id', 'desc')->get();
        //$usuarios=DB::table('usuarios')->get()->last();
        //$usuarios = \DB::table('usuarios')->where('id', 2)->first();


    return view('usuario', compact('usuarios'));
    //return view('reserva')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserva');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*Obtenemos todas las habitaciones que estan agregadas
        y las mandamos a la vista room para que se llene la lista 
        desplegable*/
        $types=Room::all();
        Usuario::create($request->all());

        /*Aqui obtenemos el ultimo id del usuario registrado*/
        $usuario=Usuario::all()->last()->id;
        
        /*Mediante ese ID hacemos la busqueda especifica y pasamos los 
         datos a la vista en cuestion */
        $id=$usuario;
        $usuarios=Usuario::where('id', '=', $id)->orderBy('id', 'desc')->get();
        

    return view('reserva2', compact('usuarios','types'));


        //return 'funciona store';
        //return redirect('/reserva2');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


/*FUNCIONES PARA LA API*/
    public function usuarios(Request $request)
    {
        $usuario = Usuario::all();
        return $usuario;
        //Esta función nos devolvera todos los usuarios de la DB
    }

     public function guardar(Request $request)
    {
        $usuario = new Usuario();
        $usuario->name = $request->name;
        $usuario->lastname = $request->lastname;
        $usuario->phone = $request->phone;
        $usuario->email = $request->email;
        $usuario->country = $request->country;

        $usuario->save();
        //Esta función guardará los datos de usuario enviados
    }

    public function mostrar(Request $request)
    {
        $usuario = Usuario::findOrFail($request->id);
        return $usuario;
        //Esta función devolverá los datos de una persona en especifico que hayamos seleccionado para cargar el formulario con sus datos
    }

    public function eliminar(Request $request)
    {
        $usuario = Usuario::destroy($request->id);
        return $usuario;
        //Esta función obtendra el id de la tarea que hayamos seleccionado y la borrará de nuestra BD
    }
}
