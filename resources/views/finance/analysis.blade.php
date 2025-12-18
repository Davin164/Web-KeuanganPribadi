@extends('layouts.app')

@section('title', 'Analisis Keuangan')

@section('content')
<h2 class="header-title">
    <i class="bi bi-graph-up-arrow"></i> Analisis Keuangan Bulanan
</h2>

<!-- Summary Cards -->
<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card card-custom border-success">
            <div class="card-body text-center">
                <h6 class="text-muted mb-2">Total Pemasukan</h6>
                <h3 class="text-success fw-bold mb-0">
                    <i class="bi bi-arrow-down-circle"></i>
                    Rp {{ number_format($totalPemasukan, 0, ',', '.') }}
                </h3>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-custom border-danger">
            <div class="card-body text-center">
                <h6 class="text-muted mb-2">Total Pengeluaran</h6>
                <h3 class="text-danger fw-bold mb-0">
                    <i class="bi bi-arrow-up-circle"></i>
                    Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}
                </h3>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-custom border-{{ $statusClass }}">
            <div class="card-body text-center">
                <h6 class="text-muted mb-2">Cash Flow</h6>
                <h3 class="text-{{ $statusClass }} fw-bold mb-0">
                    <i class="bi bi-cash-stack"></i>
                    Rp {{ number_format($cashFlow, 0, ',', '.') }}
                </h3>
            </div>
        </div>
    </div>
</div>

<!-- Status -->
<div class="alert alert-{{ $statusClass }} text-center py-4">
    <h4 class="mb-0">
        <i class="bi bi-{{ $statusClass == 'success' ? 'check-circle' : ($statusClass == 'danger' ? 'x-circle' : 'dash-circle') }}"></i>
        Status: {{ $status }}
    </h4>
</div>

<!-- Pengeluaran per Kategori -->
@if($pengeluaranPerKategori->count() > 0)
<div class="card card-custom">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0"><i class="bi bi-pie-chart"></i> Pengeluaran per Kategori</h5>
    </div>
    <div class="card-body">
        @foreach($pengeluaranPerKategori as $kategori => $data)
        <div class="mb-3">
            <div class="d-flex justify-content-between mb-1">
                <span class="fw-bold">{{ ucfirst($kategori) }}</span>
                <span>
                    <span class="badge bg-info">{{ number_format($data['persentase'], 1) }}%</span>
                    <span class="text-danger fw-bold">Rp {{ number_format($data['total'], 0, ',', '.') }}</span>
                </span>
            </div>
            <div class="progress" style="height: 25px;">
                <div class="progress-bar
                    @if($data['persentase'] > 40) bg-danger
                    @elseif($data['persentase'] > 25) bg-warning
                    @else bg-success
                    @endif"
                    role="progressbar"
                    style="width: {{ $data['persentase'] }}%;"
                    aria-valuenow="{{ $data['persentase'] }}"
                    aria-valuemin="0"
                    aria-valuemax="100">
                    {{ number_format($data['persentase'], 1) }}%
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<div class="alert alert-warning text-center">
    <i class="bi bi-exclamation-triangle"></i> Belum ada data pengeluaran untuk dianalisis
</div>
@endif
@endsection
