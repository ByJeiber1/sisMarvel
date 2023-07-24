<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;

    protected $table='personaje';

    protected $primaryKey='personajeID';
    
    public $timestamps=false;

    protected $fillable = [
        'perNombre1',
        'perNombre2',
        'perApellido1',
        'perApellido2',
        'perColorPelo',
        'perColorOjos',
        'perEdoMarital',
        'perFraseMasCelebre',
        'perGenero',
        'perPrimeraAparicionComic',
        'personajeCivil',
        'personajeHeroe',
        'personajeVillano'
    ];

    protected $guarded =[
        
    ];

    public function objetos()
    {
        return $this->belongsToMany(Objeto::class, 'persObjeto', 'personaje_id', 'objeto_id');
    }

    // Relación con la tabla PersPoder
    public function persPoderes()
    {
        return $this->hasMany(PersPoder::class, 'personajeID', 'personajeID');
    }

    // Relación con la tabla PerCargOrg
    public function perCargosOrganizaciones()
    {
        return $this->hasMany(PerCargOrg::class, 'personaje_id', 'personajeID');
    }

}
