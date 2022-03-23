<?php

use App\Http\Controllers\Customer\SaleController;
use App\Http\Controllers\Customer\SiteRegisterController;
use App\Http\Controllers\Customer\SiteListController;
use App\Http\Controllers\Customer\PurchaseFlowController;
use App\Http\Controllers\Customer\SaleFlowController;
use Illuminate\Support\Facades\Route;


    Route::get('sale-register', [SaleController::class, 'index'])->middleware(['auth'])
                ->name('sale.register');

    Route::post('sale-register', [SaleController::class, 'store'])->middleware(['auth']);

    Route::get('sale-list', [SiteListController::class, 'create'])->name('site.list');
    Route::post('sale-list', [SiteListController::class, 'filter']);
    Route::get('sale-detail/{id}', [SiteListController::class, 'detail'])->name('sale.detail');

    Route::get('purchase-flow', [PurchaseFlowController::class, 'create'])
    ->name('purchase.flow');
    Route::get('sale-flow', [SaleFlowController::class, 'create'])
    ->name('sale.flow');
    Route::post('site-list', [SiteListController::class, 'store'])->middleware(['auth']);
