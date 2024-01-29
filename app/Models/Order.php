<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'refnumber',
        'firstname',
        'lastname',
        'email',
        'address',
        'number',
        'shippingfirstname',
        'shippinglastname',
        'shippingState',
        'shippingCity',
        'shippingBarangay',
        'shippingAddress',
        'shippingNumber',
        'payment_method',
        'item',
        'qty',
        'totalPrice'
    ];
}
