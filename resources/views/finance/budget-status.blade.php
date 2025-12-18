@extends('layouts.app')

@section('title', 'Status Budget')

@section('content')
<h2 class="header-title">
    <i class="bi bi-bell-fill"></i> Status Budget
</h2>

@if($statusBudget->count() > 0)
    @foreach($statusBudget as $item)
    <div class="card card-custom mb-3">
        <div class="card-header {{ $item['exceeded'] ? 'bg-danger text-white' : 'bg-success text-white' }}">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">
                    <i class="bi bi-tag-fill"></i> {{ ucfirst($item['kategori']) }}
                </h5>
                @if($item['exceeded'])
                    <span class="badge bg-warning text-dark">
                        <i class="bi bi-exclamation-triangle-fill"></i> ALERT!
                    </span>
                @else
                    <span class="badge bg-light text-success">
                        <i class="bi bi-check-circle-fill"></i> Aman
                    </span>
                @endif
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-6">
                    <p class="mb-1 text-muted">Budget yang Ditetapkan</p>
                    <h5 class="fw-bold">Rp {{ number_format($item['budget'], 0, ',', '.') }}</h5>
                </div>
                <div class="col-6">
                    <p class="mb-1 text-muted">Total Pengeluaran</p>
                    <h5 class="fw-bold {{ $item['exceeded'] ? 'text-danger' : 'text-success' }}">
                        Rp {{ number_format($item['spent'], 0, ',', '.') }}
                    </h5>
                </div>
            </div>

            <div class="progress mb-3" style="height: 30px;">
                <div class="progress-bar {{ $item['exceeded'] ? 'bg-danger' : 'bg-success' }}"
                     role="progressbar"
                     style="width: {{ min($item['percentage'], 100) }}%;"
                     aria-valuenow="{{ $item['percentage'] }}"
                     aria-valuemin="0"
                     aria-valuemax="100">
                    {{ number_format($item['percentage'], 1) }}%
                </div>
            </div>

            @if($item['exceeded'])
                <div class="alert alert-danger mb-0">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    <strong>PERINGATAN!</strong> Anda telah melebihi budget sebesar
                    <strong>Rp {{ number_format($item['excessAmount'], 0, ',', '.') }}</strong>
                </div>
            @else
                <div class="alert alert-success mb-0">
                    <i class="bi bi-check-circle-fill"></i>
                    Sisa budget: <strong>Rp {{ number_format($item['remaining'], 0, ',', '.') }}</strong>
                </div>
            @endif
        </div>
    </div>
    @endforeach
@else
    <div class="alert alert-warning text-center py-5">
        <i class="bi bi-exclamation-circle fs-1"></i>
        <h4 class="mt-3">Budget Belum Diatur</h4>
        <p>Silakan atur budget terlebih dahulu untuk melihat status</p>
        <a href="{{ route('finance.set-budget') }}" class="btn btn-warning">
            <i class="bi bi-wallet2"></i> Set Budget Sekarang
        </a>
    </div>
@endif
@endsection
