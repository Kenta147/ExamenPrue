<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;
    

     protected $fillable = ['nombre', 'apellido', 'email', 'telefono', 'empresa_id'];

     // Relación muchos a uno: Un empleado pertenece a una empresa
     public function empresa()
     {
         return $this->belongsTo(Empresas::class);
     }
}
