<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Alumno extends Model
{
    use HasFactory, Notifiable;

    protected $table='alumnos';

    protected $primaryKey ='id';

    public $timestamps=true;

    protected $fillable = [
        'nombre',
        'email',
        'matricula',
        'direccion',
        'telefono',
        'semestre',
        'fecha_nacimiento',
        'fecha_contratacion',
        'sexo',
        'edad',
        'curp',
        'fecha_ingreso',
        'estatus',
        'observaciones',
        'foto',
        'materia_id',
        'carrera_id',
    
    ];

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class);
    }

}
