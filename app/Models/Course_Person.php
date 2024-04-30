<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'person_id'
    ];
}
