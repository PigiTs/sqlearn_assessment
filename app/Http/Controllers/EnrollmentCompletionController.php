<?php

namespace App\Http\Controllers;

use App\Models\EnrollmentCompletion;
use Illuminate\Http\Request;

class EnrollmentCompletionController extends Controller
{
    public function index()
    {
        $enrollmentcompletion = EnrollmentCompletion::all();
        return response()->json($enrollmentcompletion);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'student_id' => 'required|integer',
            'course_id' => 'required|integer',
            
        ]);

        $enrollmentcompletion = EnrollmentCompletion::create([
            'student_id' => $validate['student_id'],
            'course_id' => $validate['course_id'],
            'enrolled_on' => now(),
            
        ]);

        return response()->json($enrollmentcompletion,201);
    }

    public function show(EnrollmentCompletion $enrollmentcompletion){
        return response()->json($enrollmentcompletion);
    }

    public function update(Request $request,EnrollmentCompletion $enrollmentcompletion)
    {
        $validate = $request->validate([
            'completed_on' => 'required|timestamp',
        
        ]);

        $enrollmentcompletion->update([
            'completed_on' => $validate['completed_on'],
        
        ]);

        return response()->json($enrollmentcompletion,200);
    }

    public function destroy(EnrollmentCompletion $enrollmentcompletion)
    {
        $enrollmentcompletion->delete();

        return response()->json(null,204);
    }
}
