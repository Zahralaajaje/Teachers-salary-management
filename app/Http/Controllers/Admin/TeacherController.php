<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use App\Models\Country;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\TeacherRequest;
use App\Models\Salary;

class TeacherController extends Controller
{
   
    public function index(): View
    {
        $teachers = Teacher::all();

        return view('admin.teachers.index', compact('teachers'));
    }

    public function create(): View
    {
        $countries = Country::all()->pluck('name', 'id');

        return view('admin.teachers.create', compact('countries'));
    }

    public function store(TeacherRequest $request): RedirectResponse
    {
        Teacher::create($request->validated());

        return redirect()->route('admin.teachers.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    public function show(Teacher $teacher): View
    {
        $salaries = Salary::where('teacher', $teacher->id)->get();
        
        return view('admin.teachers.show', compact('teacher', 'salaries'));
    }

    public function edit(Teacher $teacher): View
    {
        $countries = Country::all()->pluck('name', 'id');

        return view('admin.teachers.edit', compact('teacher','countries'));
    }

    public function update(TeacherRequest $request, Teacher $teacher): RedirectResponse
    {
        $teacher->update($request->validated());

        return redirect()->route('admin.teachers.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    public function destroy(Teacher $teacher): RedirectResponse
    {
        $teacher->delete();

        return back()->with([
            'message' => 'successfully deleted !',
            'alert-type' => 'danger'
        ]);
    }

    public function massDestroy()
    {
        Teacher::whereIn('id', request('ids'))->delete();

        return response()->noContent();
    }
}
