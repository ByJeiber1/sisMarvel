<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combate extends Model
{
    use HasFactory;
    protected $table = 'combate';
    protected $primaryKey = 'combateID';
    public $timestamps = false;

    protected $fillable = [
        'objetoID_fk',
        'poderID_fk',
        'combateLugar',
        'combateFecha',
        'combateDescrp',
    ];

    public function lugar()
    {
        return $this->belongsTo(Lugar::class, 'combateLugar', 'lugarID');
    }
}
