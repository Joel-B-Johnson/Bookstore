<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_email',
        'address_1',
        'address_2',
        'zipcode',
        'city',
        'state_id',
    ];

    protected $hidden = [
        'id',
    ];

    public $timestamps = false;
}
