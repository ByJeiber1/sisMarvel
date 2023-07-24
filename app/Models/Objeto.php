<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    use HasFactory;

    protected $table = 'objeto';

    protected $fillable = [
        'objetoNombre',
        'objetoMaterialFabricacion',
        'objetoTipoFK',
        'objetoDescripcion',
    ];

    protected $primaryKey = 'objetoID';
    public $timestamps=false;

    public function personajes()
    {
        return $this->belongsToMany(Personaje::class, 'persObjeto', 'objeto_id', 'personaje_id');
    }

}
