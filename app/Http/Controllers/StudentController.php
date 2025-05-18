<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return response()->json($student);
    }

    //create student
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'contact_number' => 'required|string',
        ]);

        $student = Student::create($validate);

        return response()->json($student,201);
    }

    //return specific student
    public function show(Student $student){
        return response()->json($student);
    }

    //update student's record
    public function update(Request $request, Student $student)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'contact_number' => 'required|string',
        ]);

        $student->update($validate);

        return response()->json($student,200);
    }

    //delete student's record
    public function destroy(Student $student)
    {
        $student->delete();

        return response()->json(null,204);
    }
}