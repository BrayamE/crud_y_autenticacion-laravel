<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'productoID';
    public $timestamps = false;
    protected $fillable = [
        'producto',
        'descripcion',
        'categoria',
        'precio',
        'fecharegistro',
        'stock',
        'foto'
    ];
    
}