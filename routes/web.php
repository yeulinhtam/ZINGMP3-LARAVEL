<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SongController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\AlbumController;
use App\Http\Controllers\Backend\PlaylistController;
use App\Http\Controllers\Backend\SingerController;

use App\Http\Controllers\Site\SiteAlbumController;
use App\Http\Controllers\Site\SiteHomeController;
use App\Http\Controllers\Site\SiteSongController;
use App\Http\Controllers\Site\SiteCategoryController;
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



Route::group(['prefix' => 'admin'], function () {

    Route::group(['prefix' => 'singers'], function(){
        Route::post('get-song-of-singer',[SingerController::class,'getSongOfSinger']);
    });

    Route::resource('singers', SingerController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('songs', SongController::class);
    Route::resource('albums', AlbumController::class);

});


Route::get("/",[SiteHomeController::class, 'index'])->name('site.home');


Route::get("song/{id}",[SiteSongController::class,'show'])->name('site.song.show');
Route::get("search",[SiteSongController::class, 'search'])->name('site.song.search');

Route::get("song/data/{id}",[SiteSongController::class,'get'])->name('site.song.get');
Route::post("song/post-view",[SiteSongController::class,'post'])->name('song.site.post-view');
Route::get('get-data-search',[SiteSongController::class,'searchByName']);


Route::get('album',[SiteCategoryController::class,'index'])->name('site.album.category.index');
Route::get('album/category/{id}',[SiteCategoryController::class,'get'])->name('site.album.category.get');

Route::get('album/{id}',[SiteAlbumController::class, 'show'])->name('site.album.show');
Route::get('album/data/{id}',[SiteAlbumController::class, 'get'])->name('site.album.get');


