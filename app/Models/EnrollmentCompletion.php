<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EnrollmentCompletion extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'course_id','enrolled_on','completed_on'];


public function student()
{
    return $this->belongsTo(Student::class);
}

public function course()
{
    return $this->belongsTo(Course::class);
}

}