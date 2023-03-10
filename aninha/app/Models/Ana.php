<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ana extends Model
{
    use HasFactory;

    protected $fillable = [

        'nome',
        'categoria',
        'ano',
        'valor',
            
    ];
}
