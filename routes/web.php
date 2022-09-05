<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ScheduleController;

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
// Route::get('/', function () {
//     return view('welcome');
// });



require __DIR__.'/auth.php';


Route::group(['middleware' => ['auth']], function(){
// イベント登録処理
Route::post('/schedule-add', [ScheduleController::class, 'scheduleAdd'])->name('schedule-add');
// イベント取得処理
Route::post('/schedule-get', [ScheduleController::class, 'scheduleGet'])->name('schedule-get');
// イベント削除処理
Route::post('/schedule-delete/{schedule}', [ScheduleController::class, 'scheduleDelete'])->name('schedule-delete');

Route::get('/calendar', function () {
    return view('calendar');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

});

Route::controller(PostController::class)->group(function () {
    Route::get('/', 'top');
    Route::get('/my_page', 'my_page')->middleware('auth');
});




