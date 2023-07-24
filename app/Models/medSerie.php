<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medSerie extends Model
{
    use HasFactory;

    protected $table = 'medserie';

    public $timestamps=false;
    
    protected $primaryKey = 'medSerID';

    protected $fillable = [
        'medSerCanalTrans',
        'medSerCreador',
        'medSerTipo',
        'medSerTotEps',
    ];
}
