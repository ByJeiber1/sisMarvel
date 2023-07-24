<?php

namespace App\Http\Controllers;

use App\Models\persPoder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\persPoderFormRequest;
use DB;

class persPoderController extends Controller
{
    public function index(Request $request)
{
    if ($request)
    {
        $query = trim($request->get('searchText'));

        $persPoders = DB::table('perspoder')
            ->join('personaje', 'perspoder.personajeID', '=', 'personaje.personajeID')
            ->join('poder', 'perspoder.poderID', '=', 'poder.poderID')
            ->select('perspoder.*', 'personaje.perNombre1', 'personaje.perApellido1', 'poder.poderNombre')
            ->where('perspoder.obtencionPoder', 'LIKE', '%' . $query . '%')
            ->orderBy('perspoder.personajeID', 'desc')
            ->paginate(7);

        return view('crud.persPoder.index', ["persPoders" => $persPoders, "searchText" => $query]);
    }
}

    public function create()
    {
        $personajes=DB::table('personaje')->get();
        $poderes=DB::table('poder')->get();
        return view("crud.persPoder.create",["personajes"=>$personajes,"poderes"=>$poderes]);
    }

    public function store(persPoderFormRequest $request)
    {
        $personajeID = $request->input('personajeID');
        $poderID = $request->input('poderID');
    
        // Check if the pers_poderes table already has a record for this combination of personajeID and poderID
        $persPoder = PersPoder::where('personajeID', $personajeID)->where('poderID', $poderID)->first();
    
        if ($persPoder === null) {
            // The pers_poderes table does not have a record for this combination of personajeID and poderID, so create a new record
            $persPoder = new PersPoder([
                'personajeID' => new \App\Models\Personaje($personajeID),
                'poderID' => $poderID,
            ]);
            $persPoder->save();
        } else {
            // The pers_poderes table already has a record for this combination of personajeID and poderID, so update the existing record
            $persPoder->update();
        }
    
        return redirect()->route('persPoder.index');
    }

    public function show($personajeID)
    {
        return view("crud.persPoder.show",["perspoder"=>persPoder::findOrFail($personajeID)]);
    }

    public function edit($personajeID)
    {
        $persPoder = persPoder::findOrFail($personajeID);
        $personajes = DB::table('personaje')->get();
        $poderes = DB::table('poder')->get();

        return view("crud.persPoder.edit", [
            "persPoder" => $persPoder,
            "personajes" => $personajes,
            "poderes" => $poderes
        ]);
        
    }

    public function update(persPoderFormRequest $request, $personajeID)
{
    $persPoder = persPoder::findOrFail($personajeID);

    $persPoder->personajeID = $request->input('personajeID');
    $persPoder->poderID = intval($request->input('poderID'));
    $persPoder->personajeHerencia = $request->input('personajeHerencia');
    $persPoder->obtencionPoder = $request->input('obtencionPoder');
    $persPoder->update();

    return redirect()->route('persPoder.index');
}

    public function destroy($id)
    {
        $persPoder = persPoder::findOrFail($id);
        $persPoder->delete();

        return redirect('crud/persPoder');
    }
}
