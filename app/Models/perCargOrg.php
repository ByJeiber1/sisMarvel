<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perCargOrg extends Model
{
    use HasFactory;
    protected $table = 'perCargOrg';
    protected $primaryKey = null;

    protected $fillable = ['personaje_id', 'cargo_id', 'org_id'];

    public function personaje()
    {
        return $this->belongsTo(Personaje::class, 'personaje_id', 'personajeID');
    }

    // Relación con la tabla Cargo
    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'cargo_id', 'cargoID');
    }

    
}
