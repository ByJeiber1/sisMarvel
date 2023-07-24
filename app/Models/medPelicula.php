<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medPelicula extends Model
{
    use HasFactory;

    protected $table = 'medpelicula';

    public $timestamps=false;
    
    protected $primaryKey = 'medPelID';

    protected $fillable = [
        'medPelDirectorCI',
        'medPelDuracion',
        'medPelTipo',
        'medPelCostProd',
        'medPelGananc',
        'medPelDistrib',
    ];
}
