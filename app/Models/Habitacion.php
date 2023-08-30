<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $table='habitaciones';

    protected $primaryKey ='id';

    public $timestamps=false;
    
    protected $fillable = [
        'n_habitaciones',
        'camas',
        'mobiliario',
        'servicios',
        'precios_id',
        'imagen',
        'disponibilidad_id',
        'hotel_id',
        'users_id',
    
    ];

    protected $guarded = [
        
    ];
}
