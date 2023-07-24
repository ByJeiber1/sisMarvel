<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoObjeto extends Model
{
    use HasFactory;

    protected $table='tipoobjeto';

    protected $primaryKey='tipoObjetoID';
    
    public $timestamps=false;

    protected $fillable = [
        'tipoObjetoNombre'
       
    ];

    protected $guarded =[
        
    ];
}
