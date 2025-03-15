<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'question',
        'is_two_multiple_choice',
        'two_multiple_answer',
        'user_id',
        'course_id',
        'unit_id',
    ];
}
