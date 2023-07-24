<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    protected $table='director';

    protected $primaryKey='directorCI';
    
    public $timestamps=false;

    protected $fillable = [
        'directorNombre'

    ];

    protected $guarded =[
        
    ];
}
