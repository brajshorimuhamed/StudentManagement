<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'student_name', 'student_nrphone', 'student_address'
    ];
}
