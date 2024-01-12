<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class UserRegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('/lab_test/register_form');
    }

    public function store()
    {
        $newStudent = Students::create([
            'name' => request()->get('name'),
            'matricNo' => request()->get('matricNo'),
            'phoneNo' => request()->get('phoneNo'),
            'address' => request()->get('address')
        ]);
        $newStudent->save();

        echo "Student registered successfully!";
        echo "<a href='/student'>Student List</a>";
    }

    public function showStudent()
    {
        $students = Students::all();
        return view('/lab_test/student_list', compact('students'));
    }
}
