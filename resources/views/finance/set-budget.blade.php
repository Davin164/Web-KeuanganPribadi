@extends('layouts.app')

@section('title', 'Set Budget')

@section('content')
<h2 class="header-title">
    <i class="bi bi-wallet2"></i> Set Budget Bulanan
</h2>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-custom">
            <div class="card-header bg-warning">
                <h5 class="mb-0">
                    <i class="bi bi-piggy-bank"></i> Atur Budget per Kategori Pengeluaran
                </h5>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('finance.save-budget') }}" method="POST">
                    @csrf

                    <div class="alert alert-info">
                        <i class="bi bi-info-circle"></i>
                        <strong>Tips:</strong> Atur budget realistis untuk setiap kategori pengeluaran.
                        Anda akan mendapat peringatan jika pengeluaran melebihi budget.
                    </div>

                    <!-- Budget Makan -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="bi bi-egg-fried"></i> Budget Makan
                        </label>
                        <input type="number" name="makan" class="form-control form-control-lg"
                               value="{{ $budgets['makan'] ?? '' }}"
                               placeholder="Contoh: 1500000"
                               min="0" step="1000">
                        <small class="text-muted">Budget untuk makanan dan minuman</small>
                    </div>

                    <!-- Budget Transport -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="bi bi-bus-front"></i> Budget Transport
                        </label>
                        <input type="number" name="transport" class="form-control form-control-lg"
                               value="{{ $budgets['transport'] ?? '' }}"
                               placeholder="Contoh: 500000"
                               min="0" step="1000">
                        <small class="text-muted">Budget untuk transportasi</small>
                    </div>

                    <!-- Budget Hiburan -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="bi bi-controller"></i> Budget Hiburan
                        </label>
                        <input type="number" name="hiburan" class="form-control form-control-lg"
                               value="{{ $budgets['hiburan'] ?? '' }}"
                               placeholder="Contoh: 300000"
                               min="0" step="1000">
                        <small class="text-muted">Budget untuk hiburan dan rekreasi</small>
                    </div>

                    <!-- Budget Tagihan -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="bi bi-receipt"></i> Budget Tagihan
                        </label>
                        <input type="number" name="tagihan" class="form-control form-control-lg"
                               value="{{ $budgets['tagihan'] ?? '' }}"
                               placeholder="Contoh: 800000"
                               min="0" step="1000">
                        <small class="text-muted">Budget untuk tagihan (listrik, air, internet, dll)</small>
                    </div>

                    <!-- Budget Belanja -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="bi bi-cart"></i> Budget Belanja
                        </label>
                        <input type="number" name="belanja" class="form-control form-control-lg"
                               value="{{ $budgets['belanja'] ?? '' }}"
                               placeholder="Contoh: 1000000"
                               min="0" step="1000">
                        <small class="text-muted">Budget untuk belanja kebutuhan</small>
                    </div>

                    <!-- Buttons -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-warning btn-lg">
                            <i class="bi bi-save"></i> Simpan Budget
                        </button>
                        <a href="{{ route('finance.index') }}" class="btn btn-secondary">
                            <i class="bi bi-x-circle"></i> Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
