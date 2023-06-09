<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'Subtitle',
        'slug',
        'image',
        'excerpt',
        'title_description_1',
        'title_description_2',
        'title_description_3',
        'description_3',
        'description_3',
        'description_3',
        'gallery',
        ];
}
