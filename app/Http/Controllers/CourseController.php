<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Lesson;
use App\Models\Grado;
use App\Models\Course;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Requests\StoreCourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('config.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $grados = Grado::all();
        $course = new Course();
        $title = "course create";
        $btn = "create";
        return view('config.courses.create', compact('grados', 'course', 'title', 'btn'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $grado = Grado::find($request->input('grado_id'));
        $course = Course::create([
            'slug' => Str::slug($request->input('name')),
            'name' => mb_strtolower($request->input('name')),
            'subtitle' => mb_strtolower($request->input('subtitle')),
            'description' => mb_strtolower($request->input('description')),
            'active' => 1,
            'status' => 1,
            'grado_id' => $grado->id,
            'ordinal' => $grado->ordinal,
            'grado' => $grado->grado,
            'level' => $grado->level,
        ]);
        $message = __('course created successfully');
        return redirect()->route('courses.index')->with('success', $message);

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        if ($course->id <= 194) {
            abort(403);
            $message = __('unahutorized acction');
            return redirect()->route('courses.index')->with('success', $message);
        }
        $grados = Grado::all();
        $title = "course edit";
        $btn = "edit";
        return view('config.courses.edit', compact('grados', 'course', 'title', 'btn'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $grado = Grado::find($request->input('grado_id'));
        $course->update([
            'slug' => Str::slug($request->input('name')),
            'name' => mb_strtolower($request->input('name')),
            'subtitle' => mb_strtolower($request->input('subtitle')),
            'description' => mb_strtolower($request->input('description')),
            'active' => 1,
            'status' => 1,
            'grado_id' => $grado->id,
            'ordinal' => $grado->ordinal,
            'grado' => $grado->grado,
            'level' => $grado->level,
        ]);
        $course->save();
        $message = __('course updated successfully');
        return redirect()->route('courses.index')->with('success', $message);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        if ($course->id <= 194) {
            abort(403);
            $message = __('unahutorized acction');
            return redirect()->route('courses.index')->with('success', $message);
        }
        $course->delete();
        $message = __('course deleted successfully');
        return redirect()->route('courses.index')->with('success', $message);
    }

    public function requeriment(Course $course)
    {
        $requeriments = $course->requeriments;
        return view('config.courses.requeriment', compact('course', 'requeriments'));
    }

    public function goal(Course $course)
    {
        $goals = $course->goals;
        return view('config.courses.goal', compact('course', 'goals'));
    }

    public function section(Course $course)
    {
        $sections = $course->sections;
        return view('config.courses.section', compact('course', 'sections'));
    }

    public function lesson(Course $course, Lesson $lesson)
    {

        $section = $lesson->section;
        return view('config.courses.lesson', compact('course', 'lesson', 'section'));
    }
}
