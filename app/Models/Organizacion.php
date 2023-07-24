<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacion extends Model
{
    use HasFactory;
    protected $table = 'organizacion';
    protected $primaryKey = 'orgID';
    public $timestamps = false;

    protected $fillable = [
        'orgNombre',
        'orgEslogan',
        'orgLiderMasConocido',
        'orgTipoOrg',
        'orgObjetivoPpal',
        'orgLugarCreacion',
        'orgFundador',
        'orgPrimerAparComics'
    ];

    public function sedes()
    {
        return $this->hasMany(Sede::class, 'org_id');
    }
}
