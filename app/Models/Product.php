<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'prodName',
        'category',
        'thumbnail',
        'description',
        'varation',
        'weight',
        'length',
        'width',
        'height',
    ];
}

    