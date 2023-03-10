<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function () {
    return view('contacts.index');
});
Route::get('/contacts/create', function () {
    return view('contacts.create');
})->name('create');

Route::post('/contacts/create', function () {
  
    Employee::create([
        'full_name'=>request('full_name'),
        'company'=>request('company'),
        'phone_number'=>request('phone_number'),
        'addres'=>request('addres'),
        'job_title'=>request('job_title'),
        'salary'=>request('salary'),
        'join_date'=>request('join_date')
    ]);
     return redirect('home');

});
    
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contacts/update/{id}', [App\Http\Controllers\HomeController::class, 'update']);
Route::post('/contacts/update', [App\Http\Controllers\HomeController::class, 'showupdate']);
