<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Datacontroller;
use App\Http\Controllers\MaidsController;
use App\Http\Controllers\bookingcontroller;
use App\Http\Controllers\statusController;



Route::get('/',[Usercontroller::class,'main'])->name('main');
Route::post('/Login-user',[Usercontroller::class,'login'])->name('Login-user');
Route::get('/Home',[Usercontroller::class,'display'])->name('display');





Route::get('/delete/{id}',[MaidsController::class,'deleteuser'])->name('delete.user');
Route::get('/maids', [MaidsController::class, 'show'])->name('show');
Route::get('/maids_form', [MaidsController::class, 'maidsform'])->name('Maidsform');
Route::post('/data',[MaidsController::class,'store'])->name('data_display');
Route::get('/update/{id}',[MaidsController::class,'showupdate'])->name('showupdate');
Route::put('/updatedata/{id}',[MaidsController::class,'update'])->name('update');




Route::get('/booking_data',[bookingcontroller::class,'index'])->name("booking.index");
Route::get('/deleteuser/{id}',[bookingcontroller::class,'deletebooking'])->name("booking.delete");
Route::get('/booking',[bookingcontroller::class,'bookingform'])->name('booking_form');
Route::post('/maid_booking',[bookingcontroller::class,'book'])->name('booking.store');
Route::get('/updateBooking/{id}', [BookingController::class, 'showbookingupdate'])->name('showbookingupdate');
Route::put('/booking/{id}', [BookingController::class, 'update'])->name('booking_update');





