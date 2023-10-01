<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model implements Shouldq
{
    use HasFactory;

    protected $fillable =
        [
            'service_id',
            'firstname',
            'lastname',
            'email',
            'phone',
            'address',
            'country',
            'check_in_date',
            'check_ou_date',
            'adults',
            'children',
            'additional_information',
            'status',
            'answer',
            'city',
            ];
}
