<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name', 'lastname', 'address', 'email', 'gender', 'date_of_birth', 'age', 'phone', 'religion', 'course', 'year', 'section',
    ];
}
