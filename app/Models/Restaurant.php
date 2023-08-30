<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $table='restaurante';

    protected $primaryKey ='id';

    public $timestamps=false;
    


    protected $fillable = [
        'producto',
        'codigo',
        'precio',
        'vendido',
    
    ];

    protected $guarded = [

    ];
}
