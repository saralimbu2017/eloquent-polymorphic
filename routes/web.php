<?php

use Illuminate\Support\Facades\Route;
use App\Models\Staff;
use App\Models\Photo;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ROute for insert operation
Route::get('/insert',function(){
    $staff = Staff::find(1);
    $staff->photos()->create(['path'=>'sara.jpg']);
});
