<?php

namespace App\Http\Controllers;

use App\Models\Plataforma;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PlataformaFormRequest;
use DB;

class PlataformaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $plataformas=DB::table('plataforma')->where('platfNombre','LIKE','%'.$query.'%')
            ->orderBy('platfID','desc')
            ->paginate(7);
            return view('crud.plataforma.index',["plataformas"=>$plataformas,"searchText"=>$query]);
        }
    }

    public function create()
    {
        return view("crud.plataforma.create");
    }

    public function store(PlataformaFormRequest $request)
    {
        $plataforma=new Plataforma;
        $plataforma->platfNombre=$request->get('platfNombre');
        $plataforma->save();
        return redirect()->route('plataforma.index');
    }

    public function show($platfID)
    {
        return view("crud.plataforma.show",["plataforma"=>Plataforma::findOrFail($platfID)]);
    }

    public function edit($platfID)
    {
        return view("crud.plataforma.edit",["plataforma"=>Plataforma::findOrFail($platfID)]);
    }

    public function update(PlataformaFormRequest $request, $platfID)
    {
        $plataforma=Plataforma::findOrFail($platfID);
        $plataforma->platfNombre=$request->get('platfNombre');
        $plataforma->update();
        return redirect()->route('plataforma.index');
    }

    public function destroy($platfID)
    {
        $plataforma=Plataforma::find($platfID);
        $plataforma->delete();
        return redirect()->route('plataforma.index');
    }
}
