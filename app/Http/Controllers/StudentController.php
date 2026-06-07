<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function create(Group $group)
    {
         return view('students.create', compact('group'));
    }

    public function store(Request $request, Group $group)
    {
         $validated = $request->validate([
            'surname' => 'required|string|max:255',
            'name' => 'required|string|max:255',
        ]);

        // Создаем студента через отношение группы
        $group->students()->create($validated);

        return redirect()->route('groups.show', $group);
    }
    public function show(Group $group, Student $student)
    {
       return view('students.show', compact('group', 'student'));
    }

}
