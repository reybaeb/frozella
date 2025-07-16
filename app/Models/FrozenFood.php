<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrozenFood extends Model
{
    use HasFactory;
    protected $table = 'frozen_foods';

    protected $fillable = [
        'name', 'description', 'price', 'image', 'stock'
    ];
}
