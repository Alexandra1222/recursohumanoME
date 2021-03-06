<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\NomencladorCargosController;
use App\Http\Controllers\Admin\PofController;



route::get('',[HomeController::class,'index'])->name('admin.home');

route::resource('cargos',NomencladorCargosController::class)->names('admin.cargos');

route::resource('pofs',PofController::class)->names('admin.pofs');
