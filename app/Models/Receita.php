<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    protected $table = "receitas";
    protected $fillable = ["titulo", "ingredientes", "preparo", "tempo", "imagem", "user_id"];
}
