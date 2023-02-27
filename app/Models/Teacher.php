<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\TeacherFactory;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teacher';
    protected $guarded = ['id'];


    public static function newFactory(): Factory
    {
        return TeacherFactory::new();
    }
}
