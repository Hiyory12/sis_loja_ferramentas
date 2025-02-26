<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ferramenta extends Model
{
    use HasFactory;

    protected $table = 'ferramentas';
    protected $fillable = [
        'nome',
        'marca',
        'tipo',
        'fornecedor',
        'preco'
    ];
    protected $casts = [
        'preco' => 'float'
    ];
}
