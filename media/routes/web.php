<?php

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
use App\Http\Middleware\HelloMiddleware;

Route::get('/vue', 'FormController@vue');

Route::namespace('Sample')->middleware(HelloMiddleware::class)->group(function() {
     Route::get('/sample', 'SampleController@index'); //もしnamespaceを使わないとSample/SampleController@index さらに深くなると…。
     Route::get('/sample/other', 'SampleController@other'); //機能で明確に区分できることもメリット
});

Route::middleware([HelloMiddleware::class])->group(function (){
    Route::get('/hello', 'HelloController@index')->name('hello');
    Route::get('/hello/other', 'HelloController@other')->name('other');
    Route::get('/hello/upload', 'HelloController@upload');
    Route::post('/hello/upload', 'HelloController@upload');
});

Route::get('/form', function () {return view('form');});
Route::get('/booklist', 'FormController@booklist');

Route::post('/photos', 'PhotoController@create')->name('photo.create');

// APIのURL以外のリクエストに対してはindexテンプレートを返す
// 画面遷移はフロントエンドのVueRouterが制御する
Route::get('/{any?}', function () {
    return view('index');
})->where('any', '.+');