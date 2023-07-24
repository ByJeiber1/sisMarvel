<?php

namespace App\Http\Controllers;

use App\Models\Objeto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ObjetoFormRequest;
use DB;

class ObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $objetos=DB::table('objeto')->where('objetoNombre','LIKE','%'.$query.'%')
            ->orderBy('objetoID','desc')
            ->paginate(7);
            return view('crud.objeto.index',["objetos"=>$objetos,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipoObjetos=DB::table('tipoobjeto')->get();
        return view("crud.objeto.create",["tipoObjetos"=>$tipoObjetos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObjetoFormRequest $request)
    {
        $objeto=new Objeto;
        $objeto->objetoTipoFK=$request->get('objetoTipoFK');
        $objeto->objetoNombre=$request->get('objetoNombre');
        $objeto->objetoMaterialFabricacion=$request->get('objetoMaterialFabricacion');
        $objeto->objetoDescripcion=$request->get('objetoDescripcion');
        $objeto->save();
        return redirect()->route('objeto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($objetoID)
    {
        return view("crud.objeto.show",["objeto"=>Objeto::findOrFail($objetoID)]);
    }

    public function edit($objetoID)
    {
        $tipoObjetos=DB::table('tipoobjeto')->get();
        return view("crud.objeto.edit",["objeto"=>Objeto::findOrFail($objetoID),"tipoObjetos"=>$tipoObjetos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ObjetoFormRequest $request, $objetoID)
    {
        $objeto=Objeto::findOrFail($objetoID);
        $objeto->objetoTipoFK=$request->get('objetoTipoFK');
        $objeto->objetoNombre=$request->get('objetoNombre');
        $objeto->objetoMaterialFabricacion=$request->get('objetoMaterialFabricacion');
        $objeto->objetoDescripcion=$request->get('objetoDescripcion');
        $objeto->update();
        return redirect()->route('objeto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($objetoID)
    {
        $objeto=Objeto::find($objetoID);
        $objeto->delete();
        return redirect()->route('objeto.index');
    }
}
