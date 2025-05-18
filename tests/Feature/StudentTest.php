<?php

use App\Models\Student;
use Illuminate\Foundation\Testing\DatabaseTransactions;

//Create Student Test
test('create student via routes', function () {
    $student = Student::first();

    $this->assertNotNull($student);

    $response = $this->post('/students', [
        'name' => $student->name,
        'surname' => $student->surname,
        'email' => $student->email,
    ]);

    $response->assertStatus(200);
});
