<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups')); // compact('groups') === ['groups' => $groups]
    }

    public function create()
    {
          return view('groups.create'); // страница с формой для заполнения данных
    }

    public function store(Request $request)
    {
         $validated = $request->validate([
            'title' => 'required|string|max:255',
            'start_from' => 'required|date',
            'is_active' => 'boolean',
        ]);

         // Чекбокс не отмечен = false
        $validated['is_active'] = $request->has('is_active');

        Group::create($validated);

        return redirect()->route('groups.index');
    }

    public function show(Group $group)
    {
        // Загрузка студентов выбранной группы
        $group->load('students');  // отложенная жадная загрузка
        return view('groups.show', compact('group'));
    }

}
