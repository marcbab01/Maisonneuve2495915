<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\City;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:students,email|max:255',
            'birth' => 'required|date',
            'city_id' => 'required|exists:cities,id',
        ]);

        $student = Student::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'birth' => $request->birth,
            'city_id' => $request->city_id,
        ]);

        return redirect()->route('student.show', $student->id)->with('success', 'Nouvel étudiant ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('student.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('student.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:students,email|max:255',
            'birth' => 'required|date',
            'city_id' => 'required|exists:cities,id',
        ]);

        $student->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'birth' => $request->birth,
            'city_id' => $request->city_id,
        ]);

        return redirect()->route('student.show', $student->id)->with('success', 'Étudiant mis-à-jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('student.index')->with('success', 'Étudiant supprimé avec succès!');
    }
}
