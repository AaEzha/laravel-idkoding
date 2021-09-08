<?php

use Illuminate\Support\Facades\Route;

/********************* BACKEND *********************/
Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::group(['prefix' => 'member'], function () {

        # Dashboard
        Route::get('dashboard', [App\Http\Controllers\Member\DashboardController::class, 'index'])->name('dashboard');

        # Ebooks
        Route::get('my-ebooks', [App\Http\Controllers\Member\MyEbookController::class, 'index'])->name('my_ebooks.index');
        Route::get('my-ebooks/{slug}', [App\Http\Controllers\Member\MyEbookController::class, 'show'])->name('my_ebooks.show');

    });

    // Profile
    Route::view('profile', 'profile')->name('profile');

});

/********************* FRONTEND *********************/
Route::group([], function () {

    # Home
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    # Landing Page - Ebook
    Route::get('ebook/lumen', function () {
        $tags = Http::get('https://master.idkoding.com/api/tag');
        $data['datatags'] = json_decode(($tags), true);

        $category = Http::get('https://master.idkoding.com/api/category');
        $data['datacategory'] = json_decode(($category), true);

        $post = Http::get('https://master.idkoding.com/api/post');
        $data['datapost'] = json_decode(($post), true);

        $photo = Http::get('https://master.idkoding.com/api/photo');
        $data['dataphoto'] = json_decode(($photo), true);

        return view('landing-page-ebook', $data);
    });

    # Sitemap
    Route::get('sitemap.xml', [App\Http\Controllers\HomeController::class, 'sitemap'])->name('sitemap');

    # Search
    Route::get('search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');

    # Ebooks
    Route::get('ebooks', [App\Http\Controllers\EbookController::class, 'index'])->name('ebooks.index');
    Route::get('ebooks/{slug}', [App\Http\Controllers\EbookController::class, 'show'])->name('ebooks.show');

    # Tag
    Route::get('/tag', [App\Http\Controllers\TagController::class, 'index'])->name('tag.index');
    Route::get('/tag/{slug?}', [App\Http\Controllers\TagController::class, 'show'])->name('tag.show');

    # Category
    Route::get('/kategori', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
    Route::get('/kategori/{slug?}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category.show');

    # Tutorial
    Route::get('/{slug}', [App\Http\Controllers\HomeController::class, 'show'])->name('detail');
    Route::get('/tutorial/{page?}', [App\Http\Controllers\HomeController::class, 'tutorial'])->name('tutorial');

});
