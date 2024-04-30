<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_SpecialProperty extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'special_property_id'
    ];
}
