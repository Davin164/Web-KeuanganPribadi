@extends('layouts.app')

@section('title', 'Prediksi Keuangan')

@section('content')
<h2 class="header-title">
    <i class="bi bi-crystal-ball"></i> Prediksi Keuangan 3 Bulan
</h2>

<div class="card card-custom mb-4">
    <div class="card-header bg-secondary text-white">
        <h5 class="mb-0"><i class="bi bi-info-circle"></i> Data Saat Ini</h5>
    </div>
    <div class="card-body">
        <div class="row text-center">
            <div class="col-md-6 mb-3">
                <h6 class="text-muted">Rata-rata Pemasukan Bulanan</h6>
                <h4 class="text-success fw-bold">
                    Rp {{ number_format($totalPemasukan, 0, ',', '.') }}
                </h4>
            </div>
            <div class="col-md-6 mb-3">
                <h6 class="text-muted">Rata-rata Pengeluaran Bulanan</h6>
                <h4 class="text-danger fw-bold">
                    Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}
                </h4>
            </div>
        </div>
    </div>
</div>

<div class="alert alert-info">
    <i class="bi bi-lightbulb-fill"></i>
    <strong>Catatan:</strong> Prediksi ini berdasarkan pola pemasukan dan pengeluaran saat ini.
    Hasil aktual dapat berbeda tergantung perubahan kebiasaan keuangan Anda.
</div>

<!-- Prediksi per Bulan -->
<div class="row g-4">
    <div class="col-md-4">
        <div class="card card-custom {{ $prediksi['bulan1'] >= 0 ? 'border-success' : 'border-danger' }}">
            <div class="card-header {{ $prediksi['bulan1'] >= 0 ? 'bg-success' : 'bg-danger' }} text-white">
                <h5 class="mb-0"><i class="bi bi-1-circle"></i> Bulan 1</h5>
            </div>
            <div class="card-body text-center">
                <h6 class="text-muted mb-2">Prediksi Cash Flow</h6>
                <h3 class="fw-bold {{ $prediksi['bulan1'] >= 0 ? 'text-success' : 'text-danger' }}">
                    Rp {{ number_format($prediksi['bulan1'], 0, ',', '.') }}
                </h3>
                <p class="mb-0 mt-2">
                    @if($prediksi['bulan1'] >= 0)
                        <span class="badge bg-success">Surplus</span>
                    @else
                        <span class="badge bg-danger">Defisit</span>
                    @endif
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-custom {{ $prediksi['bulan2'] >= 0 ? 'border-success' : 'border-danger' }}">
            <div class="card-header {{ $prediksi['bulan2'] >= 0 ? 'bg-success' : 'bg-danger' }} text-white">
                <h5 class="mb-0"><i class="bi bi-2-circle"></i> Bulan 2</h5>
            </div>
            <div class="card-body text-center">
                <h6 class="text-muted mb-2">Akumulasi Cash Flow</h6>
                <h3 class="fw-bold {{ $prediksi['bulan2'] >= 0 ? 'text-success' : 'text-danger' }}">
                    Rp {{ number_format($prediksi['bulan2'], 0, ',', '.') }}
                </h3>
                <p class="mb-0 mt-2">
                    @if($prediksi['bulan2'] >= 0)
                        <span class="badge bg-success">Surplus</span>
                    @else
                        <span class="badge bg-danger">Defisit</span>
                    @endif
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-custom {{ $prediksi['bulan3'] >= 0 ? 'border-success' : 'border-danger' }}">
            <div class="card-header {{ $prediksi['bulan3'] >= 0 ? 'bg-success' : 'bg-danger' }} text-white">
                <h5 class="mb-0"><i class="bi bi-3-circle"></i> Bulan 3</h5>
            </div>
            <div class="card-body text-center">
                <h6 class="text-muted mb-2">Akumulasi Cash Flow</h6>
                <h3 class="fw-bold {{ $prediksi['bulan3'] >= 0 ? 'text-success' : 'text-danger' }}">
                    Rp {{ number_format($prediksi['bulan3'], 0, ',', '.') }}
                </h3>
                <p class="mb-0 mt-2">
                    @if($prediksi['bulan3'] >= 0)
                        <span class="badge bg-success">Surplus</span>
                    @else
                        <span class="badge bg-danger">Defisit</span>
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Warning jika defisit -->
@if($prediksi['warning'])
<div class="alert alert-danger mt-4 text-center py-4">
    <h4 class="mb-3">
        <i class="bi bi-exclamation-triangle-fill"></i> PERINGATAN!
    </h4>
    <p class="mb-0">
        Prediksi menunjukkan akan terjadi <strong>DEFISIT</strong> dalam 3 bulan ke depan!
        <br>
        <strong>Segera lakukan penghematan!</strong>
    </p>
    <a href="{{ route('finance.recommendations') }}" class="btn btn-light mt-3">
        <i class="bi bi-lightbulb"></i> Lihat Rekomendasi Penghematan
    </a>
</div>
@else
<div class="alert alert-success mt-4 text-center py-4">
    <h4 class="mb-3">
        <i class="bi bi-check-circle-fill"></i> Keuangan Sehat!
    </h4>
    <p class="mb-0">
        Prediksi menunjukkan keuangan Anda akan tetap <strong>SURPLUS</strong> dalam 3 bulan ke depan.
        <br>
        Pertahankan pola keuangan Anda saat ini!
    </p>
</div>
@endif
@endsection
