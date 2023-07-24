<?php

namespace App\Http\Controllers;

use App\Models\Compannia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CompanniaFormRequest;
use DB;

class CompanniaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $compannias=DB::table('compannia')->where('companniaNombre','LIKE','%'.$query.'%')
            ->orderBy('companniaID','desc')
            ->paginate(7);
            return view('crud.compannia.index',["compannias"=>$compannias,"searchText"=>$query]);
        }
    }

    public function create()
    {
        return view("crud.compannia.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanniaFormRequest $request)
    {
        $compannia=new Compannia;
        $compannia->companniaNombre=$request->get('companniaNombre');
        $compannia->companniaDescrp=$request->get('companniaDescrp');
        $compannia->save();
        return redirect()->route('compannia.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($companniaID)
    {
        return view("crud.compannia.show",["compannia"=>Compannia::findOrFail($companniaID)]);
    }

    public function edit($companniaID)
    {
        return view("crud.compannia.edit",["compannia"=>Compannia::findOrFail($companniaID)]);
    }

    public function update(CompanniaFormRequest $request, $companniaID)
    {
        $compannia=Compannia::findOrFail($companniaID);
        $compannia->companniaNombre=$request->get('companniarNombre');
        $compannia->companniaDescrp=$request->get('companniaDescrp');
        $compannia->update();
        return redirect()->route('compannia.index');
    }

    public function destroy($companniaID)
    {
        $compannia=Compannia::find($companniaID);
        $compannia->delete();
        return redirect()->route('compannia.index');
    }
}
