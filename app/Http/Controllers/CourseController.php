<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all();
        return response()->json($course);
    }

    //create course
    public function store(Request $request)
    {
        $validate = $request->validate([
            'course_name' => 'required|string',
            'num_modules' => 'required|integer',
           
        ]);

        $course = Course::create($validate);

        return response()->json($course,201);
    }

    //return specific course
    public function show(Course $course){
        return response()->json($course);
    }

    //update course's record
    public function update(Request $request, Course $course)
    {
        $validate = $request->validate([
            'course_name' => 'required|string',
            'num_modules' => 'required|integer',
            
        ]);
        $course->update($validate);

        return response()->json($course,200);
    }

    //delete course's record
    public function destroy(Course $course)
    {
        $course->delete();

        return response()->json(null,204);
    }
}
