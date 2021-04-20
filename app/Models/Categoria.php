<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kirschbaum\PowerJoins\PowerJoins;

class Categoria extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome'];
}

class Marca extends Model
{
    use PowerJoins;
    //Categoria::joinRelationship('marcas.produtos');
}
