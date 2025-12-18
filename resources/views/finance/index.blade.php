@extends('layouts.app')

@section('title', 'Dashboard - Sistem Keuangan')

@section('content')
<div class="text-center py-5">
    <h2 class="mb-4"><i class="bi bi-hand-wave"></i> Selamat Datang!</h2>
    <p class="lead text-muted mb-5">Pilih menu di atas untuk mulai mengelola keuangan Anda</p>

    <div class="row g-4 mt-4">
        <div class="col-md-4">
            <div class="card card-custom border-success">
                <div class="card-body text-center p-4">
                    <div class="display-4 text-success mb-3">
                        <i class="bi bi-plus-circle-fill"></i>
                    </div>
                    <h5 class="card-title fw-bold">Catat Transaksi</h5>
                    <p class="card-text text-muted">Simpan semua pemasukan dan pengeluaran Anda dengan mudah</p>
                    <a href="{{ route('finance.create-transaction') }}" class="btn btn-success">
                        Mulai Catat <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-custom border-primary">
                <div class="card-body text-center p-4">
                    <div class="display-4 text-primary mb-3">
                        <i class="bi bi-graph-up-arrow"></i>
                    </div>
                    <h5 class="card-title fw-bold">Analisis Keuangan</h5>
                    <p class="card-text text-muted">Lihat ringkasan dan statistik keuangan bulanan Anda</p>
                    <a href="{{ route('finance.analysis') }}" class="btn btn-primary">
                        Lihat Analisis <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-custom border-warning">
                <div class="card-body text-center p-4">
                    <div class="display-4 text-warning mb-3">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <h5 class="card-title fw-bold">Budget & Prediksi</h5>
                    <p class="card-text text-muted">Atur budget dan prediksi keuangan masa depan Anda</p>
                    <a href="{{ route('finance.set-budget') }}" class="btn btn-warning">
                        Atur Budget <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-3">
        <div class="col-md-6">
            <div class="card card-custom border-info">
                <div class="card-body p-4">
                    <h5 class="card-title fw-bold">
                        <i class="bi bi-clipboard-data"></i> Fitur Lengkap
                    </h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">✅ Pencatatan transaksi pemasukan & pengeluaran</li>
                        <li class="list-group-item">✅ Analisis keuangan bulanan dengan persentase</li>
                        <li class="list-group-item">✅ Pengaturan budget per kategori</li>
                        <li class="list-group-item">✅ Alert jika melebihi budget</li>
                        <li class="list-group-item">✅ Prediksi keuangan 3 bulan ke depan</li>
                        <li class="list-group-item">✅ Rekomendasi penghematan otomatis</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-custom border-danger">
                <div class="card-body p-4">
                    <h5 class="card-title fw-bold">
                        <i class="bi bi-lightbulb-fill"></i> Tips Mengelola Keuangan
                    </h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">💡 Catat setiap transaksi secara rutin</li>
                        <li class="list-group-item">💡 Terapkan aturan 50/30/20</li>
                        <li class="list-group-item">💡 Review pengeluaran setiap minggu</li>
                        <li class="list-group-item">💡 Buat budget realistis</li>
                        <li class="list-group-item">💡 Sisihkan untuk tabungan darurat</li>
                        <li class="list-group-item">💡 Hindari utang konsumtif</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
