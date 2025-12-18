<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabel Transactions
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->enum('tipe', ['pemasukan', 'pengeluaran']);
            $table->string('kategori');
            $table->decimal('jumlah', 15, 2);
            $table->date('tanggal');
            $table->text('deskripsi')->nullable();
            $table->timestamps();
        });

        // Tabel Budgets
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();
            $table->string('kategori')->unique();
            $table->decimal('jumlah', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('budgets');
    }
};

// Simpan file ini di: database/migrations/2024_01_01_000001_create_finance_tables.php
