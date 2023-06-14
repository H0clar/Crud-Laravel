<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

// Ruta para mostrar el formulario de inicio de sesión
Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UsersController::class);
    Route::resource('tasks', TasksController::class);
    Route::resource('roles', RolesController::class);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Rutas para el controlador de usuarios (UsersController)
Route::group(['middleware' => 'auth'], function () {
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/users', [UsersController::class, 'store'])->name('users.store');
    Route::delete('/users/{user}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/{user}/edit', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UsersController::class, 'update'])->name('users.update');
});

// Rutas para el controlador de roles (RolesController)
Route::group(['middleware' => 'auth'], function () {
    Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RolesController::class, 'store'])->name('roles.store');
    Route::delete('/roles/{role}', [RolesController::class, 'destroy'])->name('roles.destroy');
    Route::get('/roles/{role}/edit', [RolesController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{role}', [RolesController::class, 'update'])->name('roles.update');
});

// Rutas para el controlador de tareas (TasksController)
Route::group(['middleware' => 'auth'], function () {
    Route::get('/tasks', [TasksController::class, 'index'])->name('tasks.index');
    Route::get('/tasks/create', [TasksController::class, 'create'])->name('tasks.create');
    Route::post('/tasks', [TasksController::class, 'store'])->name('tasks.store');
    Route::delete('/tasks/{task}', [TasksController::class, 'destroy'])->name('tasks.destroy');
    Route::get('/tasks/{task}/edit', [TasksController::class, 'edit'])->name('tasks.edit');
    Route::put('/tasks/{task}', [TasksController::class, 'update'])->name('tasks.update');
});

// Rutas para el controlador de autenticación (LoginController)
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/home', function () {
    return view('home');
})->name('home');
