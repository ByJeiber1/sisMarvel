<?php

namespace App\Http\Controllers;

use App\Models\medSerie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\medSerieFormRequest;
use DB;

class medSerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $medSeries=DB::table('medserie')
            ->orderBy('medSerID','desc')
            ->paginate(7);
            return view('crud.medSerie.index',["medSeries"=>$medSeries,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("crud.medSerie.create");
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(medSerieFormRequest $request)
    {
        $medSerie=new MedSerie;
        $medSerie->medSerCanalTrans=$request->get('medSerCanalTrans');
        $medSerie->medSerCreador=$request->get('medSerCreador');
        $medSerie->medSerTipo=$request->get('medSerTipo');
        $medSerie->medSerTotEps=$request->get('medSerTotEps');
        $medSerie->save();
        return redirect()->route('medSerie.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(medSerie $medSerID)
    {
         // Obtener el promedio del número total de episodios
    $promedio = MedSerie::avg('medSerTotEps');
    
    // Seleccionar las series que han tenido más episodios que el promedio
    $series = MedSerie::where('medSerTotEps', '>', $promedio)->get();

    return view("crud.medSerie.show", ["series" => $series, "promedio" => $promedio]);;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($medSerID)
    {
        return view("crud.medSerie.edit",["medSerie"=>medSerie::findOrFail($medSerID)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(medSerieFormRequest $request, $medSerID)
    {
        $medSerie=medSerie::findOrFail($medSerID);
        $medSerie->medSerCanalTrans=$request->get('medSerCanalTrans');
        $medSerie->medSerCreador=$request->get('medSerCreador');
        $medSerie->medSerTipo=$request->get('medSerTipo');
        $medSerie->medSerTotEps=$request->get('medSerTotEps');
        $medSerie->update();
        return redirect()->route('medSerie.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($medSerID)
    {
        $medSerie=medSerie::find($medSerID);
        $medSerie->delete();
        return redirect()->route('medSerie.index');
    }

    public function reporte1()
{
    // Obtener el promedio del número total de episodios
    $promedio = MedSerie::avg('medSerTotEps');
    
    // Seleccionar las series que han tenido más episodios que el promedio
    $series = MedSerie::where('medSerTotEps', '>', $promedio)->get();
    
    // Mostrar el promedio y las series en la vista reporte.blade.php
    return view('Reportes/reporte1', compact('promedio', 'series'));
}
}
