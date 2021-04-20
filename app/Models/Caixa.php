<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{
    use HasFactory;

    protected $fillable = ['CPF_na_nota', 'desconto', 'valor_total', 'valor_total_desconto', 'dt_inicio', 'dt_fim'];
}
