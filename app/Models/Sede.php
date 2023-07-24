<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;
    protected $table = 'sede';
    protected $primaryKey = 'sedeID';
    public $timestamps = false;

    protected $fillable = [
        'org_id',
        'sedeNombre',
        'sedeTipoEdificacion',
        'sedeUbicacion'
    ];

    // Relación con la tabla "organizacion"
    public function organizacion()
    {
        return $this->belongsTo(Organizacion::class, 'org_id');
    }
}
