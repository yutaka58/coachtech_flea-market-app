<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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


// --- 公開ルート ---
// ログイン
Route::get('/login', [ItemController::class, 'getLogin'])->name('login'); // 追加
Route::post('/login', [ItemController::class, 'login']);

// 会員登録
Route::get('/register', [ItemController::class, 'getRegister']); // 画面表示
Route::post('/register', [ItemController::class, 'postRegister']); // 保存処理 (名前を変更)

// --- 認証ルート ---
Route::middleware('auth')->group(function () {
    Route::get('/', [ItemController::class, 'index']); // POSTからGETに修正
    Route::get('/mypage/profile', [ItemController::class, 'edit']); // 通常表示はGET
});


