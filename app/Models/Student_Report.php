<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student_Report extends Model
{
    use HasFactory;
    protected $table = 'student_report';
    protected $guarded = ['id'];
}
