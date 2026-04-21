<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Forms;
use App\Livewire\Home;

Route::get('/', Home::class)->name('home');

Route::get('form/{id?}', Forms::class)->name('form.edit');
