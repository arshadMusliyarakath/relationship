<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'course_id';
    protected $guarded = [];

    public function belongs_Student()
    {
        return $this->belongsTo(Student::class, 'student_id', 'student_id');



    }
}
