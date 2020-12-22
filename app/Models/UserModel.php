<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = "usuario";

    protected $fillable = [
        'grupo_id',
        'nome',
        'email',
        'telefone',
        'senha'
    ];
}
