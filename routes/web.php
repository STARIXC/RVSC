<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminRoomsController;

use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ServicesController;

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

Route::get('/home', [MainController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', function () {
    return view('contact.index');
});
Route::get('/updates', [EventsController::class, 'index']);
Route::get('/careers', function () {
    return view('careers.index');
});
Route::get('/sports', function () {
    return view('sports.index');
});
Route::get('/membership', function () {
    return view('membership.index');
});
Route::get('/career', function () {
    return view('news_events.jobs');
});
Route::get('/accommodation', [RoomsController::class, 'index']);
Route::get('/room-details/{id}', [RoomsController::class, 'show']);

Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/management', [ManagementController::class, 'index']);
// Booking Routes
Route::group(['prefix' => 'booking'], function () {
    Route::post('/booking/available_rooms', [BookingController::class, 'roomAvailability'])->name('availability.booking');
    // Route::get('/booking/displayrooms',[BookingController::class, 'postdisplayRooms']);
    Route::post('/booking/displayrooms', [BookingController::class, 'postdisplayRooms'])->name('post.selected_room');

    Route::get('/guest/personal_info', [BookingController::class, 'loadForm']);
    Route::post('/guest/guest_form', [BookingController::class, 'postGuestForm'])->name('post.guest_form');

    Route::get('/booking/summary', [BookingController::class, 'showSummary']);
    Route::post('/booking/submit', [BookingController::class, 'store'])->name('post.booking');

    Route::get('/booking/complete', [BookingController::class, 'showSuccess']);
    Route::get('/restart/booking', [BookingController::class, 'index']);
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    // category routes
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/category/add', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/category/update/{id}', [CategoryController::class, 'update']);
    Route::get('/softdelete/category/{id}', [CategoryController::class, 'softDelete']);
    Route::get('/category/restore/{id}', [CategoryController::class, 'restore']);
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);

    // category routes
    Route::get('/room', [AdminRoomsController::class, 'index'])->name('room');
    Route::get('/room/add', [AdminRoomsController::class, 'create']);
    Route::post('/room/save', [AdminRoomsController::class, 'store'])->name('store.room');
    Route::get('/room/edit/{id}', [AdminRoomsController::class, 'edit'])->name('edit.room');
    Route::get('/room/edit_room_images/{id}', [AdminRoomsController::class, 'editRoomImages'])->name('edit.room.images');
    Route::post('/room/update/{id}', [AdminRoomsController::class, 'update']);
    Route::get('/room/multiimg/delete/{id}', [AdminRoomsController::class, 'MultiImageDelete'])->name('room.multiimg.delete');
    Route::post('/room/image/update', [AdminRoomsController::class, 'MultiImageUpdate'])->name('update-room-image');
    Route::post('/room/image/add/', [AdminRoomsController::class, 'MultiImageAdd'])->name('add-room-image');

    // Services routes
    Route::get('/services', [ServicesController::class, 'index'])->name('services.all');
    Route::post('/services/add', [ServicesController::class, 'store'])->name('store.services');
    Route::get('/services/edit/{id}', [ServicesController::class, 'edit'])->name('edit.services');
    Route::post('/service/update/{id}', [ServicesController::class, 'update']);
    Route::get('/softdelete/service/{id}', [ServicesController::class, 'softDelete']);
    Route::get('/service/restore/{id}', [ServicesController::class, 'restore']);
    Route::get('/service/delete/{id}', [ServicesController::class, 'delete']);

    Route::get('/profile', function () {
        return view('admin.profile');
    })->name('profile');
    // Media routes
    Route::get('/media', [MediaController::class, 'index'])->name('media.all');
    Route::post('/media/add', [MediaController::class, 'store'])->name('store.media');
    Route::post('/media/add_multiple_images', [MediaController::class, 'storeMultiple'])->name('store.multiplemedia');
    Route::get('/site_image/edit/{id}', [MediaController::class, 'edit'])->name('edit.media');
    Route::post('/site_image/update/{id}', [MediaController::class, 'update']);
    Route::get('/softdelete/site_image/{id}', [MediaController::class, 'softDelete']);
    Route::get('/media/restore/{id}', [MediaController::class, 'restore']);
    Route::get('/media/delete/{id}', [MediaController::class, 'delete']);

    // Media routes
    Route::get('/admin/events', [EventsController::class, 'adminEvents'])->name('events.all');
    Route::post('/admin/events/add', [EventsController::class, 'store'])->name('store.event');
    Route::get('/events/edit/{id}', [EventsController::class, 'edit'])->name('edit.event');
    Route::post('/events/update/{id}', [EventsController::class, 'update']);
    Route::get('/softdelete/events/{id}', [EventsController::class, 'softDelete']);
    Route::get('/events/restore/{id}', [EventsController::class, 'restore']);
    Route::get('/events/delete/{id}', [EventsController::class, 'destroy']);

    // Management routes

    Route::get('/admin/management', [ManagementController::class, 'allDirectors'])->name('management.all');
    Route::post('/admin/management/add', [ManagementController::class, 'store'])->name('store.director');
    Route::get('/admin/management/edit/{id}', [ManagementController::class, 'edit'])->name('edit.director');
    Route::post('/admin/management/update/{id}', [ManagementController::class, 'update']);
    Route::get('/admin/softdelete/Management/{id}', [ManagementController::class, 'softDelete']);
    Route::get('/admin/management/restore/{id}', [ManagementController::class, 'restore']);
    Route::get('/admin/management/delete/{id}', [ManagementController::class, 'destroy']);
});
