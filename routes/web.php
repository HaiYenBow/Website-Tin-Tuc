<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TinTucController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BaiVietController;

Route::get('/bai-viet/{id}', [BaiVietController::class, 'chiTiet'])->name('bai-viet.chi-tiet');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Đây là nơi khai báo các tuyến đường (routes) web cho ứng dụng của em.
| Các route này được tải bởi RouteServiceProvider trong nhóm "web".
|
*/

// Trang chủ đơn giản (có thể điều hướng về trang tin tức)
Route::get('/', function () {
    return redirect('/tin-tuc');
});

// Các route CRUD cho tin tức (tự động tạo index, create, store, show, edit, update, destroy)
Route::resource('tin-tuc', TinTucController::class);


Route::get('/tin-tuc', function () {
    return view('tin_tuc.index');
});
// Đăng nhập - Đăng xuất
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Tìm kiếm
Route::get('/tim-kiem', [TinTucController::class, 'timKiem'])->name('tim-kiem');
Route::get('/tin-tuc/{id}', [TinTucController::class, 'chiTiet'])->name('tin-chi-tiet');

Route::get('/dang-nhap', function () {
    return view('auth.login'); // nếu em dùng auth, hoặc tạo sẵn view login.blade.php
})->name('dang-nhap');
// Hiển thị form đăng nhập
Route::get('/dang-nhap', function () {
    return view('auth.login');
})->name('dang-nhap');

// Xử lý đăng nhập
Route::post('/dang-nhap', function (Illuminate\Http\Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');

    // Xử lý tạm thời để kiểm tra
    if ($email === 'admin@example.com' && $password === '123456') {
        return redirect('/')->with('success', 'Đăng nhập thành công!');
    } else {
        return back()->with('error', 'Sai thông tin đăng nhập');
    }
})->name('xu-ly-dang-nhap');
Route::get('/tim-kiem', [App\Http\Controllers\TinTucController::class, 'timKiem'])->name('tim-kiem');
Route::get('/bai-viet/{id}', [BaiVietController::class, 'chiTiet'])->name('bai-viet.chi-tiet');
