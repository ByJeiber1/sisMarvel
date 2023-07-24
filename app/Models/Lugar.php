<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    use HasFactory;
    protected $table = 'lugar';
    protected $primaryKey = 'lugarID';
    public $timestamps=false;
    protected $fillable = [
        'lugarNombre',
        'lugarFicticio',
        'lugarTipo',
        'lugar_id'
    ];

    public function sublugares()
    {
        return $this->hasMany(Lugar::class, 'lugar_id');
    }

    public function combates()
    {
        return $this->hasMany(Combate::class, 'combateLugar', 'lugarID');
    }
}
