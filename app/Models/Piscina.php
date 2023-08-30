<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piscina extends Model
{
    use HasFactory;

    protected $table='piscina';

    protected $primaryKey ='id';

    public $timestamps=false;
    


    protected $fillable = [
        'opcion',
        'precio',
    
    ];

    protected $guarded = [

    ];
}
