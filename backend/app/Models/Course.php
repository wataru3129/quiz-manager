<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'description',
        'user_id',
    ];
}
