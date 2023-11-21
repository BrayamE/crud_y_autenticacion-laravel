<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'personaID';
    public $timestamps = false;
    protected $fillable = [
        'nombres',
        'paterno',
        'materno',
        'bibliografia',
        'foto',
        'documento',
        'celular'];

}
