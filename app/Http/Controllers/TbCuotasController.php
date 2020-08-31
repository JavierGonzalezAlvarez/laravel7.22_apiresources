<?php

namespace App\Http\Controllers;

use App\tb_cuotas;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

//añadimos resources para la api
//use App\Http\Resources\UserCollection;

use App\Http\Resources\ReciboResource as RecibosResource;
use App\Http\Resources\Recibos as Recibos;

class TbCuotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuotas = DB::table('tb_cuotas')->get();
        return $cuotas;                   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Me permite devolver una vista en forma de formulario para crear un registro
        //en la API no lo uso        
        return view('post_form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //recibe un request, recibe una solicitud, en esa
        //solicitud vienen todos los datos necesarios para sacar la informacion

        //con esta linea ingreso la API en la BD, con el ORM
        $cuota = tb_cuotas::create($request->all());
        //esto devuelve el codigo
        return $cuota;    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tb_cuotas  $tb_cuotas
     * @return \Illuminate\Http\Response
     */
    public function show(tb_cuotas $tb_cuotas)    
    {
        //Para 1 elemento del json
        $cuotas = tb_cuotas::find(2);
        return new RecibosResource($cuotas);        
    }

    public function show_colletion(tb_cuotas $tb_cuotas)
    {               
        //para una colecion de elementos del json
        $cuotas = tb_cuotas::get();                
        //$cuotas = tb_cuotas::all();         //hace lo mismo    
        //$cuotas = tb_cuotas::paginate(2);  //Pagina solo 2
        return new Recibos($cuotas);        
    }

    /*
    public function show_colletion_1(tb_cuotas $tb_cuotas)
    {                       
        $cuotas = tb_cuotas::get();                        
        return new Recibos($cuotas);        
    }
    */
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tb_cuotas  $tb_cuotas
     * @return \Illuminate\Http\Response
     */
    public function edit(tb_cuotas $tb_cuotas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tb_cuotas  $tb_cuotas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tb_cuotas $tb_cuotas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tb_cuotas  $tb_cuotas
     * @return \Illuminate\Http\Response
     */
    public function destroy(tb_cuotas $tb_cuotas)
    {
        //
    }

}
