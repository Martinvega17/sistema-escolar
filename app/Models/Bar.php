<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    use HasFactory;

    protected $table='bar';

    protected $primaryKey ='id';

    public $timestamps=false;
    


    protected $fillable = [
        'producto',
        'precio',
        'codigo',
        'vendido',
    
    ];

    protected $guarded = [

    ];
}
