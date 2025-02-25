<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ReqController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
  return view('welcome');
});


Route::get('/posts', [PostsController::class, 'index']);
Route::patch('/posts/{id}', [PostsController::class, 'update']);
Route::get('/posts/path', [PostsController::class, 'get_path']);


// Route::get('', function (Request $request) {
// 
// });

Route::get('/req', [ReqController::class, 'index']);
Route::get('/req/path', [ReqController::class, 'get_path']);
Route::get('/req/host', [ReqController::class, 'host']);
Route::get('/req/method', [ReqController::class, 'method']);
Route::get('/req/ip', [ReqController::class, 'get_ip']);
Route::get('/req/ips', [ReqController::class, 'get_ips']);

Route::get('/req/all', [ReqController::class, 'get_all_input']);
