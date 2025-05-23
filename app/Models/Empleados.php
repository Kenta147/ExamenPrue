<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'direccion', 'telefono'];

   
    public function empleados()
    {
        return $this->hasMany(Empleados::class);
    }
}
