<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'uid',
        'profile_picture',
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
