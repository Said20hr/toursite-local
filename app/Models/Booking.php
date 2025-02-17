<?php

namespace App\Models;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model implements ShouldQueue
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
            'check_out_date',
            'adults',
            'children',
            'additional_information',
            'status',
            'answer',
            'city',
            ];
}
