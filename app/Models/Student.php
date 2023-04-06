<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'student_id';
    protected $guarded = [];

    public function relation_address()
    {
        return $this->hasOne(Address::class, 'student_id', 'student_id');
    }

    public function relation_course()
    {
        return $this->hasOne(Course::class, 'student_id', 'student_id');
    }

}
