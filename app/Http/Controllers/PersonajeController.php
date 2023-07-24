<?php

namespace App\Http\Controllers;

use App\Models\Personaje;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PersonajeFormRequest;
use DB;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $personajes=DB::table('personaje')->where('perNombre1','LIKE','%'.$query.'%')
            ->orderBy('personajeID','desc')
            ->paginate(7);
            return view('crud.personaje.index',["personajes"=>$personajes,"searchText"=>$query]);
        }
    }

    public function create()
    {
        return view("crud.personaje.create");
    }

    public function store(PersonajeFormRequest $request)
    {
        $personaje=new Personaje;
        $personaje->perNombre1=$request->get('perNombre1');
        $personaje->perNombre2=$request->get('perNombre2');
        $personaje->perApellido1=$request->get('perApellido1');
        $personaje->perApellido2=$request->get('perApellido2');
        $personaje->perColorPelo=$request->get('perColorPelo');
        $personaje->perColorOjos=$request->get('perColorOjos');
        $personaje->perEdoMarital=$request->get('perEdoMarital');
        $personaje->perFraseMasCelebre=$request->get('perFraseMasCelebre');
        $personaje->perPrimeraAparicionComic=$request->get('perPrimeraAparicionComic');
        $personaje->perGenero=$request->get('perGenero');
        $personaje->personajeCivil=$request->get('personajeCivil');
        $personaje->personajeHeroe=$request->get('personajeHeroe');
        $personaje->personajeVillano=$request->get('personajeVillano');

        $personaje->save();
        return redirect()->route('personaje.index');
    }

    public function show($personajeID)
    {
        return view("crud.personaje.show",["personaje"=>Personaje::findOrFail($personajeID)]);
    }

    public function edit($personajeID)
    {
        return view("crud.personaje.edit",["personaje"=>Personaje::findOrFail($personajeID)]);
    }

    public function update(PersonajeFormRequest $request, $personajeID)
    {
        $personaje=Personaje::findOrFail($personajeID);
        $personaje->perNombre1=$request->get('perNombre1');
        $personaje->perNombre2=$request->get('perNombre2');
        $personaje->perApellido1=$request->get('perApellido1');
        $personaje->perApellido2=$request->get('perApellido2');
        $personaje->perColorPelo=$request->get('perColorPelo');
        $personaje->perColorOjos=$request->get('perColorOjos');
        $personaje->perEdoMarital=$request->get('perEdoMarital');
        $personaje->perFraseMasCelebre=$request->get('perFraseMasCelebre');
        $personaje->perGenero=$request->get('perGenero');
        $personaje->perPrimeraAparicionComic=$request->get('perPrimeraAparicionComic');
        $personaje->personajeCivil=$request->get('personajeCivil');
        $personaje->personajeHeroe=$request->get('personajeHeroe');
        $personaje->personajeVillano=$request->get('personajeVillano');
        $personaje->update();
        return redirect()->route('personaje.index');
    }

    public function destroy($personajeID)
    {
        $personaje=Personaje::find($personajeID);
        $personaje->delete();
        return redirect()->route('personaje.index');
    }
}
