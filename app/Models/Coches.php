<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coches extends Model
{
    use HasFactory;
    protected $fillable=[
        'marca',
        'modelo',
        'version',
        'combustible',
        'potencia',
        'precio',
        'año',
        'kilometros',
        'correo',
        'telefono',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}