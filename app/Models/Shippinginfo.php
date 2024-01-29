<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shippinginfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'firstname',
        'lastname',
        'state',
        'city',
        'barangay',
        'address',
        'email',
        'number',
    ];
}
