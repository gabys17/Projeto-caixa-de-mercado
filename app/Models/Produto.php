<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'valor', 'código', 'imagem', 'estoque'];

    public function marca()
    {
        return $this->hasOne(Marca::class);
    }
}


