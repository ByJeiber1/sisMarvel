<?php

namespace App\Http\Controllers;

use App\Models\Poder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PoderFormRequest;
use DB;

class PoderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $poderes=DB::table('poder')->where('poderNombre','LIKE','%'.$query.'%')
            ->orderBy('poderID','desc')
            ->paginate(7);
            return view('crud.poder.index',["poderes"=>$poderes,"searchText"=>$query]);
        }
    }

    public function create()
    {
        return view("crud.poder.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PoderFormRequest $request)
    {
        $poder=new Poder;
        $poder->poderNombre=$request->get('poderNombre');
        $poder->poderDescripcion=$request->get('poderDescripcion');
        $poder->save();
        return redirect()->route('poder.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($poderID)
    {
        return view("crud.poder.show",["poder"=>Poder::findOrFail($poderID)]);
    }

    public function edit($poderID)
    {
        return view("crud.poder.edit",["poder"=>Poder::findOrFail($poderID)]);
    }

    public function update(PoderFormRequest $request, $poderID)
    {
        $poder=Poder::findOrFail($poderID);
        $poder->poderNombre=$request->get('poderNombre');
        $poder->poderDescripcion=$request->get('poderDescripcion');
        $poder->update();
        return redirect()->route('poder.index');
    }

    public function destroy($poderID)
    {
        $poder=Poder::find($poderID);
        $poder->delete();
        return redirect()->route('poder.index');
    }
}
