<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\GestionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Config\UserController;
use App\Http\Controllers\Config\SedeController;
use App\Http\Controllers\Config\SchoolController;
use App\Http\Controllers\Config\RoomController;
use App\Http\Controllers\Config\RoleController;
use App\Http\Controllers\Config\ResourceController;
use App\Http\Controllers\Config\PermissionController;
use App\Http\Controllers\Config\GradoController;


Route::resource('roles', RoleController::class)->names('roles');
Route::resource('users', UserController::class)->names('users');
Route::resource('schools', SchoolController::class)->names('schools');
Route::resource('sedes', SedeController::class)->names('sedes');
Route::resource('rooms', RoomController::class)->names('rooms');
Route::resource('resources', ResourceController::class)->names('resources');
Route::resource('periodos', PeriodoController::class)->names('periodos');

Route::resource('courses', CourseController::class)->names('courses');


Route::resource('grados', GradoController::class)->names('grados');

Route::resource('permissions', PermissionController::class)->only('index')->names('permissions');


///Rutas Particulares School

Route::get('administrator/{school}', [SchoolController::class, 'administrator'])->name('schools.administrator');

Route::post('schools/assign', [SchoolController::class, 'assign'])->name('schools.assign');

Route::get('coordinator/{sede}', [SedeController::class, 'coordinator'])->name('sedes.coordinator');
Route::get('coordinator/resource/{sede}', [SedeController::class, 'resource'])->name('sedes.resource');

Route::post('assign', [SedeController::class, 'assign'])->name('sedes.assign');

Route::post('assign_resource', [SedeController::class, 'assign_resource'])->name('sedes.assign_resource');

Route::get('coordinator/resource_room/{room}', [RoomController::class, 'resource'])->name('rooms.resource');

Route::get('requeriment/{course}', [CourseController::class, 'requeriment'])->name('courses.requeriment');

Route::get('goal/{course}', [CourseController::class, 'goal'])->name('courses.goal');

Route::get('section/{course}', [CourseController::class, 'section'])->name('courses.section');

Route::get('lesson/{course}/{lesson}', [CourseController::class, 'lesson'])->name('courses.lesson');

Route::get('gestion', [GestionController::class, 'index'])->name('gestion.index');
Route::get('gestion/secciones/{sede}', [GestionController::class, 'secciones'])->name('gestion.secciones');

Route::get('gestion/create_lectivo/{sede}', [GestionController::class, 'create_lectivo'])->name('gestion.create_lectivo');

Route::get('gestion/lectivo_by_sede/{sede}', [GestionController::class, 'lectivo_by_sede'])->name('gestion.lectivo_by_sede');

Route::get('gestion/grados_by_sede/{sede}', [GestionController::class, 'grados_by_sede'])->name('gestion.grados_by_sede');

Route::get('gestion/add_students_to_grados_by_sede/{grado_sede}', [GestionController::class, 'add_students_to_grados_by_sede'])->name('gestion.add_students_to_grados_by_sede');
Route::get('gestion/grados_and_sections_by_sede/{sede}', [GestionController::class, 'grados_and_sections_by_sede'])->name('gestion.grados_and_sections_by_sede');



Route::get('gestion/assign_teacher_to_lectivo/{lectivo}', [GestionController::class, 'assign_teacher_to_lectivo'])->name('gestion.assign_teacher_to_lectivo');

Route::post('assign_teacher', [GestionController::class, 'assign_teacher'])->name('gestion.assign_teacher');

Route::get('gestion/grados_by_lectivo_and_sede/{sede}', [GestionController::class, 'grados_by_lectivo_and_sede'])->name('gestion.grados_by_lectivo_and_sede');


Route::get('assign_students_to_grado/{user}/{grado}', [GestionController::class, 'assign_students_to_grado'])->name('gestion.assign_students_to_grado');

Route::get('students_of_sede/{sede}', [GestionController::class, 'students_of_sede'])->name('gestion.students_of_sede');


Route::get('courses_of_sede/{sede}', [GestionController::class, 'courses_of_sede'])->name('gestion.courses_of_sede');





