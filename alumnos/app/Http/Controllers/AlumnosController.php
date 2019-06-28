<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumnos;
use DB;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registrar(Request $request)
    {  
        
        $alumnos=new Alumnos();
        $alumnos->nombre=$request->input('nombre');
        $alumnos->apellido=$request->input('apellido');
        $alumnos->IdentIfIcacIon=$request->input('Identificacion');
        $alumnos->direccion=$request->input('direccion');
        $alumnos->genero=$request->input('Genero');
        $alumnos->fechanacimiento=$request->input('fechanacimiento');

 if($alumnos->save()){
echo "operacion exitosa";

 }



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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    { 
        $alumnos = DB::table('talumnos')->get();
    
       
      return response()->json($alumnos);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
       $alumnos=Alumnos::where('idalumnos',$request->input('idalumnos'))->first();
        return view('EditAlumnos',compact('alumnos')); 
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {    $id=$request->input('idalumnos');
        $alumnos = Alumnos::find($id);
        $alumnos->nombre=$request->input('nombre');
        $alumnos->apellido=$request->input('apellido');
        $alumnos->IdentIfIcacIon=$request->input('Identificacion');
        $alumnos->direccion=$request->input('direccion');
        $alumnos->genero=$request->input('Genero');
        $alumnos->fechanacimiento=$request->input('fechanacimiento');

 if($alumnos->save()){
echo "operacion exitosa";

 }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
         $id= $request->input('idalumnos');
      $alumnos = Alumnos::findOrFail($id);
      
      if($alumnos->delete()){
      echo "operacion exitosa";

      }

    }
}
