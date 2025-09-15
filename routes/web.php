<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Forms;

Route::get('form', Forms::class);

Route::get('/', function () {
    return view('welcome');
});
