<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\tstController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    $data = [
        'name' => 'Zack',
        'last_name' => 'John',
    ];
    return view('welcome') ->with($data);
});
Route::get('/reports/', [TestController::class,'report'])->name('report');
Route::get('/additem/new/', [TestController::class,'create'])->name('create');
Route::get('/contact',function(){return view('Contact',['name'=>'ProgramingHub']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/tst',[tstController::class,'index'])->name('tst/list');