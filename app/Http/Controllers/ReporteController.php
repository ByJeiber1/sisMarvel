<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Objeto;
use App\Models\Lugar;
use App\Models\Personaje;
use App\Models\Poder;
use App\Models\Usuario;
use App\Models\Organizacion;
use DB;

class ReporteController extends Controller
{
    public function objetosMasUsados()
    {
        $objetosMasUsados = Objeto::withCount('personajes')
            ->orderBy('personajes_count', 'desc')
            ->take(5)
            ->get();
        
        return view('Reportes/reporte3', compact('objetosMasUsados'));
    }

    public function locacionesMasCombates()
    {
        $locacionesMasCombates = Lugar::withCount('combates')
            ->orderBy('combates_count', 'desc')
            ->take(3)
            ->get();

        return view('Reportes/reporte4', compact('locacionesMasCombates'));
    }

    public function poderesArtificialesLideres()
    {
        $personajes = DB::select("
        SELECT DISTINCT p.perNombre1, p.perNombre2, p.perApellido1, p.perApellido2
        FROM personaje p
        INNER JOIN persPoder pp ON p.personajeID = pp.personajeID
        INNER JOIN perCargOrg pco ON p.personajeID = pco.personaje_id
        INNER JOIN cargo c ON pco.cargo_id = c.cargoID
        WHERE pp.obtencionPoder = 'Artificial'
        AND c.cargoNombre = 'Líder'
        AND (p.personajeHeroe IS NOT NULL OR p.personajeVillano IS NOT NULL)
    ");

        return view('Reportes/reporte5', compact('personajes'));
    }

    public function poderesHeredadosConSuper()
    {
        $poderes = Poder::where('poderNombre', 'like', '%Super%')
        ->whereIn('poderID', function ($query) {
            $query->select('poderID')
                ->from('persPoder')
                ->whereNotNull('personajeHerencia') // Filtro para herencia no nula
                ;
        })
        ->get();
        return view('Reportes/reporte6', compact('poderes'));
    }

    public function reporteUsuarios(Request $request)
    {
        $tipoCuentaSeleccionado = $request->get('tipo_cuenta');

        $usuarios = Usuario::where('usuTipoCuenta', $tipoCuentaSeleccionado)
            ->select('usuEmail', 'usuNombre1', 'usuNombre2', 'usuApell1', 'usuApell2', 'usuFechNac', 'usuUsername', 'usuPais', 'usuCiudad', 'usuTipoCuenta')
            ->get();

        return view('Reportes/reporte7', compact('usuarios'));
    }

    public function sedesPorOrganizacion()
    {
        $organizaciones = Organizacion::with('sedes')->get();

        return view('Reportes/reporte8', compact('organizaciones'));
    }
}

