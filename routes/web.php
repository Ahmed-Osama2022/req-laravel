<?php

use App\Http\Controllers\InputForm;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ReqController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

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
Route::get('/req/collect', [ReqController::class, 'collect']);
Route::get('/req/count', [ReqController::class, 'count']);
Route::get('/req/tojson', [ReqController::class, 'to_json']);
Route::get('/req/each', [ReqController::class, 'extract_data']);
/**
 * =====================================================
 * | =============== USING INPUT METHODS ===============
 * | ========== NOTE: USUALLY USED WITH FORMS ==========
 * =====================================================
 */
Route::get('/req/input', [ReqController::class, 'get_inputs']);
Route::get('/req/form_data', [InputForm::class, 'index']);
Route::post('/req/colors_data', [InputForm::class, 'colors_values']);



Route::get('/date', [InputForm::class, 'date_form']);
Route::post('/date', [InputForm::class, 'date']);


// NOTE: FOR FASTER WORK; LET'S DO IT WITHOUT CONTROLLERS
Route::get('/custom', function () {
  return view('bootstrapForm');
});


// | ========= ONLY | EXCEPT methods =========== //
Route::post('/custom', function (Request $request) {
  $inputs = $request->only('username', 'password');
  // $inputs = $request->except('username');

  // dd($inputs);
  return $inputs;


  // Here is "Laravel magic" => Booooooooooooom
  // return $request->username;
});
