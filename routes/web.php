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

//Route for insert operation
Route::get('/insert',function(){
    $staff = Staff::find(1);
    $staff->photos()->create(['path'=>'sara.jpg']);
});

//Route for read operation
Route::get('/read',function(){
    $staff = Staff::findOrFail(1);
    foreach($staff->photos as $photo){
        return $photo->path;
    }
});

//Route for update operation
Route::get('/update',function(){
    $staff = Staff::findOrFail(1);
    $photo = $staff->photos()->whereId(1)->first();
    $photo->path = "Updated Path";
    $photo->save();   
});

//Route for delete operation
Route::get('/delete',function(){
    $staff = Staff::find(1);
    $staff->photos()->delete();
});

