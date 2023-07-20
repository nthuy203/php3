<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
//Loại phòng
Route::match(['get','post'],'/room_types',[\App\Http\Controllers\TypeRoomController::class, 'index'])->name('typeRooms');
Route::match(['get','post'],'/room_types/add',[\App\Http\Controllers\TypeRoomController::class, 'add'])->name('add_typeRooms');
Route::match(['get','post'],'/room_types/update/{id}',[\App\Http\Controllers\TypeRoomController::class, 'edit'])->name('edit_typeRooms');
Route::match(['get','post','put'],'/room_types/edit/{id}',[\App\Http\Controllers\TypeRoomController::class, 'update'])->name('update_typeRooms');
Route::match(['get','post'],'/room_types/delete/{id}',[\App\Http\Controllers\TypeRoomController::class, 'delete'])->name('delete_typeRooms');
//Phòng
// Route::match(['get','post'],'/rooms',[\App\Http\Controllers\RoomController::class, 'index'])->name('Room');
// Route::match(['get','post'],'/rooms/add',[\App\Http\Controllers\TypeRoomController::class, 'add'])->name('add_Room');


//Dịch vụ
Route::match(['get','post'],'/services',[\App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::match(['get','post'],'/services/add',[\App\Http\Controllers\ServicesController::class, 'add'])->name('add_services');
Route::match(['get','post'],'/services/update/{id}',[\App\Http\Controllers\ServicesController::class, 'edit'])->name('edit_services');
Route::match(['get','post','put'],'/services/edit/{id}',[\App\Http\Controllers\ServicesController::class, 'update'])->name('update_services');
Route::match(['get','post'],'/services/delete/{id}',[\App\Http\Controllers\ServicesController::class, 'delete'])->name('delete_services');

//Khách hàng
Route::match(['get','post'],'/customers',[\App\Http\Controllers\CustomersController::class, 'index'])->name('customers');
Route::match(['get','post'],'/customers/add',[\App\Http\Controllers\CustomersController::class, 'add'])->name('add_customers');
Route::match(['get','post'],'/customers/update/{id}',[\App\Http\Controllers\CustomersController::class, 'edit'])->name('edit_customers');
Route::match(['get','post'],'/customers/delete/{id}',[\App\Http\Controllers\CustomersController::class, 'delete'])->name('delete_customers');
