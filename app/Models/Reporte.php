<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'direccion',
        'imagen',
        'descripcion',
    ];


    
// Establece la relación de pertenencia a través de la clase Reporte.
public function user()
{
    return $this->belongsTo(User::class);
}
      
}
