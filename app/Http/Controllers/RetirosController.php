<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retiros;
use App\Models\Afiliado;
use App\Models\Empleado;

class RetirosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $retiros=Retiros::all();
        return view('retiros.index')->with('retiros',$retiros);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(stirng $id,string $id2)
    {
        //
        return view('retiros.create')->with('id',$id)->with('id',$id2);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $retiro=new Retiro();
        $empleado->codempleado=$request->get('codempleado');
        $empleado->codafiliado=$request->get('codafiliado');
        $empleado->fecha=$request->get('fecha');
        $empleado->monto=$request->get('monto');
        $empleado->save();

        $retiros=Retiro::all();
        return view('retiros.index')->with('retiros',$retiros)->with("afiliado",$request->get('codafiliado'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id,string $id2)
    {
        //
        $afiliado=Afiliado::find($id);
        $empleado=Empleado::find($id2);
        $retiros=Retiro::all();
        return view('retiros.index2')->with('retiros',$retiros)
                                     ->with('afiliado',$afiliado)
                                     ->with('empleado',$empleado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
