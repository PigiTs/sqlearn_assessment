<?php

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);
//Create Student Test
test('create student', function () {
    $student = Student::factory()->create();

    $this->assertNotNull($student);

    $response = $this->post('/api/students', [
        'name' => $student->name,
        'surname' => $student->surname,
        'email' => $student->email,
    ]);

    return response()->json($student, 200);
});

