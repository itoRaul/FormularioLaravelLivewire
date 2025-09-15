<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Forms;


Route::get('form/{id?}', Forms::class)->name('form.edit');

Route::get('/', function () {
    return view('welcome');
});
