<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Huesped extends Model
{
    use HasFactory, Notifiable;

    protected $table='huespedes';

    protected $primaryKey ='id';

    public $timestamps=true;


    protected $fillable = [
        'nombres',
        'cedula',
        'direccion',
        'celular',
        'email',
        'habitacion_id',
    
    ];

    protected $guarded = [
        
    ];
}
