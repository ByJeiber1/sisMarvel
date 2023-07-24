<?php

namespace App\Http\Controllers;

use App\Models\tipoObjeto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\tipoObjetoFormRequest;
use DB;

class tipoObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $tipoObjetos=DB::table('tipoobjeto')->where('tipoObjetoNombre','LIKE','%'.$query.'%')
            ->orderBy('tipoObjetoID','desc')
            ->paginate(7);
            return view('crud.tipoObjeto.index',["tipoObjetos"=>$tipoObjetos,"searchText"=>$query]);
        }
    }

    public function create()
    {
        return view("crud.tipoObjeto.create");
    }

    public function store(tipoObjetoFormRequest $request)
    {
        $tipoObjeto=new tipoObjeto;
        $tipoObjeto->tipoObjetoNombre=$request->get('tipoObjetoNombre');
        $tipoObjeto->save();
        return redirect()->route('tipoObjeto.index');
    }

    public function show($tipoObjetoID)
    {
        return view("crud.tipoObjeto.show",["tipoObjeto"=>tipoObjeto::findOrFail($tipoObjetoID)]);
    }

    public function edit($tipoObjetoID)
    {
        return view("crud.tipoObjeto.edit",["tipoObjeto"=>tipoObjeto::findOrFail($tipoObjetoID)]);
    }

    public function update(tipoObjetoFormRequest $request, $tipoObjetoID)
    {
        $tipoObjeto=tipoObjeto::findOrFail($tipoObjetoID);
        $tipoObjeto->tipoObjetoNombre=$request->get('tipoObjetoNombre');
        $tipoObjeto->update();
        return redirect()->route('tipoObjeto.index');
    }

    public function destroy($tipoObjetoID)
    {
        $tipoObjeto=tipoObjeto::find($tipoObjetoID);
        $tipoObjeto->delete();
        return redirect()->route('tipoObjeto.index');
    }
}
