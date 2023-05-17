<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Students::all();

        return view('students.index', ['students' => $students]);
    }

    public function show($id)
    {
        $student = Students::findOrFail($id);

        return view('students.show', ['student' => $student]);
    }
}
