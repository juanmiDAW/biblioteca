<?php

namespace App\Models;

use Database\Seeders\EjemplarSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    /** @use HasFactory<\Database\Factories\EjemplarFactory> */
    use HasFactory;

    public function libros(){
        return $this->hasMany(Ejemplar::class);
    }

    public function clientes(){
        return $this->belongsToMany(Cliente::class, 'prestamos')->withPivot('fecha_hora', 'fecha_hora_devolucion');
    }
}
