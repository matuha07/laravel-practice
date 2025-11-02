<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view("students.index", [
            "title" => "Список студентов",
            "students" => $students,
        ]);
    }

    public function create()
    {
        return view("students.create", ["title" => "Добавить студента"]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "first_name" => "required|string|max:50",
            "last_name" => "required|string|max:50",
            "email" => "required|email|unique:students,email",
            "group" => "required|string|max:20",
            "birth_date" => "required|date",
        ]);

        Student::create($validated);

        return redirect()
            ->route("students.index")
            ->with("success", "Студент успешно добавлен.");
    }

    public function edit(Student $student)
    {
        return view("students.edit", [
            "title" => "Редактировать студента",
            "student" => $student,
        ]);
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            "first_name" => "required|string|max:50",
            "last_name" => "required|string|max:50",
            "email" => "required|email|unique:students,email," . $student->id,
            "group" => "required|string|max:20",
            "birth_date" => "required|date",
        ]);

        $student->update($validated);

        return redirect()
            ->route("students.index")
            ->with("success", "Данные студента обновлены.");
    }

    public function confirmDelete(Student $student)
    {
        return view("students.confirm-delete", [
            "title" => "Подтверждение удаления",
            "student" => $student,
        ]);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()
            ->route("students.index")
            ->with("success", "Студент удалён.");
    }
}
