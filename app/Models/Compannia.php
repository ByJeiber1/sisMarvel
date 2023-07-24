<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compannia extends Model
{
    use HasFactory;

    protected $table='compannia';

    protected $primaryKey='companniaID';
    
    public $timestamps=false;

    protected $fillable = [
        'companniaNombre',
        'companniaDescrp'
    ];

    protected $guarded =[
        
    ];
}
