<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/about/', [PortfolioController::class, 'about']);

Route::get('/work', [PortfolioController::class, 'work'])->name('work');
Route::get('/work/', [PortfolioController::class, 'work']);

Route::prefix('work')->group(function () {
    Route::get('/brand-design', [PortfolioController::class, 'brandDesign'])->name('work.brand-design');
    Route::get('/brand-design/', [PortfolioController::class, 'brandDesign']);

    Route::get('/motion-design', [PortfolioController::class, 'motionDesign'])->name('work.motion-design');
    Route::get('/motion-design/', [PortfolioController::class, 'motionDesign']);

    Route::get('/product-design', [PortfolioController::class, 'productDesign'])->name('work.product-design');
    Route::get('/product-design/', [PortfolioController::class, 'productDesign']);

    Route::get('/web-development', [PortfolioController::class, 'webDevelopment'])->name('work.web-development');
    Route::get('/web-development/', [PortfolioController::class, 'webDevelopment']);
});

Route::fallback([PortfolioController::class, 'notFound'])->name('404');
