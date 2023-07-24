<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table='cargo';

    protected $primaryKey='cargoID';
    
    public $timestamps=false;

    protected $fillable = [
        'cargoNombre'

    ];
    
    public function perCargosOrganizaciones()
    {
        return $this->hasMany(PerCargOrg::class, 'cargo_id', 'cargoID');
    }
}


