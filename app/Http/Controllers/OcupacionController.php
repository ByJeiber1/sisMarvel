<?php

namespace App\Http\Controllers;

use App\Models\Ocupacion;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OcupacionFormRequest;
use DB;

class OcupacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $ocupaciones=DB::table('ocupacion')->where('ocupacionNombre','LIKE','%'.$query.'%')
            ->orderBy('ocupacionID','desc')
            ->paginate(7);
            return view('crud.ocupacion.index',["ocupaciones"=>$ocupaciones,"searchText"=>$query]);
        }
    }

    public function create()
    {
        return view("crud.ocupacion.create");
    }

    public function store(OcupacionFormRequest $request)
    {
        $ocupacion=new Ocupacion;
        $ocupacion->ocupacionNombre=$request->get('ocupacionNombre');
        $ocupacion->save();
        return redirect()->route('ocupacion.index');
    }

    public function show($ocupacionID)
    {
        return view("crud.ocupacion.show",["ocupacion"=>Ocupacion::findOrFail($ocupacionID)]);
    }

    public function edit($ocupacionID)
    {
        return view("crud.ocupacion.edit",["ocupacion"=>Ocupacion::findOrFail($ocupacionID)]);
    }

    public function update(OcupacionFormRequest $request, $ocupacionID)
    {
        $ocupacion=Ocupacion::findOrFail($ocupacionID);
        $ocupacion->ocupacionNombre=$request->get('ocupacionNombre');
        $ocupacion->update();
        return redirect()->route('ocupacion.index');
    }

    public function destroy($ocupacionID)
    {
        $ocupacion=Ocupacion::find($ocupacionID);
        $ocupacion->delete();
        return redirect()->route('ocupacion.index');
    }
}
