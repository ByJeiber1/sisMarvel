<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persPoder extends Model
{
    use HasFactory;

    protected $table='perspoder';

    protected $primaryKey=['personajeID','poderID'];
    
    public $timestamps=false;

    protected $fillable = [
        'personajeID',
        'poderID',
        'personajeHerencia',
        'obtencionPoder',
    ];

    protected $guarded =[
        'id',
    ];

    public function personaje()
    {
        return $this->belongsTo(Personaje::class, 'personajeID', 'personajeID');
    }

    public function poder()
    {
        return $this->belongsTo(Poder::class, 'poderID', 'poderID');
    }
}
