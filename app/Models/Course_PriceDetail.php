<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_PriceDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'price_detail_id'
    ];
}
