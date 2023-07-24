<?php

namespace App\Http\Controllers;

use App\Models\medPelicula;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\medPeliculaFormRequest;
use DB;

class medPeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $medPeliculas=DB::table('medpelicula as m')
            ->join('director as d','m.medPelDirectorCI','=','d.directorCI')
            ->select('m.medPelID','m.medPelDirectorCI','d.directorNombre',
            'medPelDuracion',
            'medPelTipo',
            'medPelCostProd',
            'medPelGananc',
            'medPelDistrib')
            ->where('d.directorNombre','LIKE','%'.$query.'%')
            ->orderBy('d.directorNombre','desc')
            ->paginate(7);
            return view('crud.medPelicula.index',["medPeliculas"=>$medPeliculas,"searchText"=>$query]);
        }
    }

    public function create()
    {
        $directores=DB::table('director')->get();
        return view("crud.medPelicula.create",["directores"=>$directores]);
    }

    public function store(medPeliculaFormRequest $request)
    {
        $medPelicula=new medPelicula;
        $medPelicula->medPelDirectorCI=$request->get('medPelDirectorCI');
        $medPelicula->medPelDuracion=$request->get('medPelDuracion');
        $medPelicula->medPelTipo=$request->get('medPelTipo');
        $medPelicula->medPelCostProd=$request->get('medPelCostProd');
        $medPelicula->medPelGananc=$request->get('medPelGananc');
        $medPelicula->medPelDistrib=$request->get('medPelDistrib');
        $medPelicula->save();
        return redirect()->route('medPelicula.index');
    }

    public function show($medPelID)
    {   $peliculas = DB::table('medpelicula')
        ->select('medPelID', 'medPelDuracion', 'medPelTipo', 'medPelCostProd', 'medPelGananc')
        ->where('medPelDuracion', '>', '02:30:00')
        ->where('medPelTipo', '=', 'Animada')
        ->where('medPelGananc', '>', function ($query) {
            $query->select(DB::raw('AVG(medPelGananc)'))
                  ->from('medPelicula')
                  ->where('medPelTipo', '=', 'Animada');
        })
        ->orderBy('medPelCostProd', 'asc')
        ->get();

        $promedio = DB::table('medPelicula')
    ->where('medPelTipo', '=', 'Animada')
    ->avg('medPelGananc');
        return view("crud.medPelicula.show",["peliculas"=>$peliculas,"promedio" => $promedio]);
    }

    public function edit($medPelID)
    {
        $directores=DB::table('director')->get();
        return view("crud.medPelicula.edit",["medPelicula"=>medPelicula::findOrFail($medPelID),"directores"=>$directores]);
    }

    public function update(medPeliculaFormRequest $request, $medPelID)
    {
        $medPelicula=medPelicula::findOrFail($medPelID);
        $medPelicula->medPelDirectorCI=$request->get('medPelDirectorCI');
        $medPelicula->medPelDuracion=$request->get('medPelDuracion');
        $medPelicula->medPelTipo=$request->get('medPelTipo');
        $medPelicula->medPelCostProd=$request->get('medPelCostProd');
        $medPelicula->medPelGananc=$request->get('medPelGananc');
        $medPelicula->medPelDistrib=$request->get('medPelDistrib');
        $medPelicula->update();
        return redirect()->route('medPelicula.index');
    }

    public function destroy($medPelID)
    {
        $medPelicula=medPelicula::find($medPelID);
        $medPelicula->delete();
        return redirect()->route('medPelicula.index');
    }
    public function reporte2()
    {   $peliculas = DB::table('medpelicula')
        ->select('medPelID', 'medPelDuracion', 'medPelTipo', 'medPelCostProd', 'medPelGananc')
        ->where('medPelDuracion', '>', '02:30:00')
        ->where('medPelTipo', '=', 'Animada')
        ->where('medPelGananc', '>', function ($query) {
            $query->select(DB::raw('AVG(medPelGananc)'))
                  ->from('medPelicula')
                  ->where('medPelTipo', '=', 'Animada');
        })
        ->orderBy('medPelCostProd', 'asc')
        ->get();

        $promedio = DB::table('medPelicula')
    ->where('medPelTipo', '=', 'Animada')
    ->avg('medPelGananc');
        return view("crud.medPelicula.show",["peliculas"=>$peliculas,"promedio" => $promedio]);
    }
}
