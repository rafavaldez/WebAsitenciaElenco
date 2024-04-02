<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EstudianteController; // Agrega esta línea
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HojaAsistencia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [EstudianteController::class, 'index']); // 'index' debe estar en minúsculas
Route::get('/login', [LoginController::class, 'index'])->name('login'); // 'index' debe estar en minúsculas
Route::get('/login/acceso', [LoginController::class, 'loginform'])->name('login_acceso');

Route::post('/login/validacion', [LoginController::class, 'validar'])->name('loginvalidacion');

Route::post('/Asistencia/Agregar', [DashboardController::class, 'agregar'])->name('agregar_fecha');

Route::post('/Asistencia/AnadirEstudiante', [HojaAsistencia::class, 'agregar'])->name('anadir_estudiante');

Route::get('/Dashboard', [DashboardController::class, 'index'])->name('dashboard_index');
 
Route::get('/Asistencia/{id}', [DashboardController::class, 'view'])->name('asistencia_view');
Route::get('/Asistencia/Editar/{id}', [DashboardController::class, 'editar'])->name('editar_asistencia');

