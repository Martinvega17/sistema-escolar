<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use function PHPUnit\Framework\returnSelf;

class Hotel extends Model
{
    use HasFactory;
    //use SoftDeletes;

    protected $table='hoteles';

    protected $primaryKey ='id';

    public $timestamps=false;
    


    protected $fillable = [
        'titulo',
        'rfc',
        'direccion',
        'celular',
        'descripcion',
        'imagen',
        'apertura',
        'cierre',
        'url_facebook',
        'url_whatsapp',
        'user_id',
        'categoria_id',
    
    ];

    protected $guarded = [
        
    ];
   
}
