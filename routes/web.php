<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

// Информация при нажатии на карту
Route::post('/map/info', [Controllers\Map::class, 'info']);

// Отправка почты
Route::post('/mail', [Controllers\Mailer::class, 'send']);

// Поиск
Route::post('/search', [Controllers\Search::class, 'page']);

// Экскурсии
Route::get('/guided/{id}/', [Controllers\GuidedTours::class, 'page']);
Route::get('/guided/', [Controllers\GuidedTours::class, 'list']);

// Места
Route::get('/place/{id}/', [Controllers\Places::class, 'page']);

// Туры
Route::get('/tour/{id}/', [Controllers\Tours::class, 'page']);
Route::get('/tours/', [Controllers\Tours::class, 'list']);

// Главная
Route::get('/', [Controllers\Main::class, 'page']);

// Админ - панель
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
