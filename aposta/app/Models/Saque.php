<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saque extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_saque',
        'valor',
        'user_id',
        'banco',
        'nomeTitular',
        'nConta',
        'nAgencia',
        'tipoConta'
    ];
}
