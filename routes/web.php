<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinanceController;

// Halaman Utama/Dashboard
Route::get('/', [FinanceController::class, 'index'])->name('finance.index');

// Catat Transaksi
Route::get('/transaksi/tambah', [FinanceController::class, 'createTransaction'])->name('finance.create-transaction');
Route::post('/transaksi/simpan', [FinanceController::class, 'storeTransaction'])->name('finance.store-transaction');

// Lihat Semua Transaksi
Route::get('/transaksi', [FinanceController::class, 'listTransactions'])->name('finance.list-transactions');

// Analisis Keuangan Bulanan
Route::get('/analisis', [FinanceController::class, 'analysis'])->name('finance.analysis');

// Set Budget
Route::get('/budget/set', [FinanceController::class, 'setBudgetForm'])->name('finance.set-budget');
Route::post('/budget/simpan', [FinanceController::class, 'saveBudget'])->name('finance.save-budget');

// Status Budget
Route::get('/budget/status', [FinanceController::class, 'budgetStatus'])->name('finance.budget-status');

// Prediksi 3 Bulan
Route::get('/prediksi', [FinanceController::class, 'prediction'])->name('finance.prediction');

// Rekomendasi Penghematan
Route::get('/rekomendasi', [FinanceController::class, 'recommendations'])->name('finance.recommendations');

// Simpan di: routes/web.php
