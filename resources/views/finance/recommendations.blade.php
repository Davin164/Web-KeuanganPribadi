@extends('layouts.app')

@section('title', 'Rekomendasi Penghematan')

@section('content')
<h2 class="header-title">
    <i class="bi bi-lightbulb-fill"></i> Rekomendasi Penghematan
</h2>

@if($totalPengeluaran > 0)
    @if(count($recommendations) > 0)
        <div class="alert alert-warning">
            <i class="bi bi-exclamation-triangle-fill"></i>
            <strong>Perhatian!</strong> Ditemukan beberapa kategori pengeluaran yang perlu diperhatikan.
        </div>

        <!-- Rekomendasi per Kategori -->
        @foreach($recommendations as $index => $rec)
        <div class="card card-custom mb-4 border-warning">
            <div class="card-header bg-warning">
                <h5 class="mb-0">
                    <i class="bi bi-{{ $index + 1 }}-circle-fill"></i>
                    Kategori: {{ $rec['kategori'] }}
                </h5>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <p class="mb-1 text-muted">Total Pengeluaran</p>
                        <h4 class="text-danger fw-bold">
                            Rp {{ number_format($rec['total'], 0, ',', '.') }}
                        </h4>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-1 text-muted">Persentase dari Total</p>
                        <h4 class="text-warning fw-bold">
                            {{ $rec['persentase'] }}%
                        </h4>
                    </div>
                </div>

                <div class="alert alert-info mb-3">
                    <h6 class="fw-bold mb-2">
                        <i class="bi bi-chat-left-text-fill"></i> Saran:
                    </h6>
                    <p class="mb-0">{{ $rec['saran'] }}</p>
                </div>

                <div class="alert alert-success mb-0">
                    <h6 class="fw-bold mb-2">
                        <i class="bi bi-piggy-bank-fill"></i> Potensi Penghematan:
                    </h6>
                    <h5 class="mb-0 text-success">
                        Rp {{ number_format($rec['potensiHemat'], 0, ',', '.') }}
                    </h5>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Total Potensi Hemat -->
        <div class="card card-custom bg-success text-white">
            <div class="card-body text-center py-4">
                <h5 class="mb-2">Total Potensi Penghematan</h5>
                <h2 class="fw-bold mb-0">
                    <i class="bi bi-cash-stack"></i>
                    Rp {{ number_format(array_sum(array_column($recommendations, 'potensiHemat')), 0, ',', '.') }}
                </h2>
            </div>
        </div>
    @else
        <div class="alert alert-success text-center py-5">
            <i class="bi bi-check-circle fs-1"></i>
            <h4 class="mt-3">Pengeluaran Anda Terkendali!</h4>
            <p>Tidak ada kategori yang melebihi batas rekomendasi. Pertahankan pola keuangan Anda!</p>
        </div>
    @endif

    <!-- Tips Umum -->
    <div class="card card-custom mt-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">
                <i class="bi bi-book-fill"></i> Tips Umum Mengelola Keuangan
            </h5>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                @foreach($tips as $tip)
                <li class="list-group-item">
                    <i class="bi bi-check-circle-fill text-success"></i> {{ $tip }}
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Tambahan Tips -->
    <div class="row g-4 mt-3">
        <div class="col-md-6">
            <div class="card card-custom border-info">
                <div class="card-body">
                    <h5 class="fw-bold text-info">
                        <i class="bi bi-currency-dollar"></i> Tips Menghemat Pengeluaran
                    </h5>
                    <ul class="mb-0">
                        <li>Gunakan daftar belanja sebelum berbelanja</li>
                        <li>Bandingkan harga sebelum membeli</li>
                        <li>Manfaatkan promo dan diskon</li>
                        <li>Hindari belanja saat lapar atau emosional</li>
                        <li>Gunakan transportasi umum jika memungkinkan</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card card-custom border-success">
                <div class="card-body">
                    <h5 class="fw-bold text-success">
                        <i class="bi bi-piggy-bank"></i> Tips Meningkatkan Tabungan
                    </h5>
                    <ul class="mb-0">
                        <li>Sisihkan minimal 20% dari penghasilan</li>
                        <li>Otomatis transfer ke tabungan setiap gajian</li>
                        <li>Cari sumber penghasilan tambahan</li>
                        <li>Investasikan dana yang tidak terpakai</li>
                        <li>Buat dana darurat 3-6 bulan pengeluaran</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="alert alert-warning text-center py-5">
        <i class="bi bi-info-circle fs-1"></i>
        <h4 class="mt-3">Belum Ada Data Pengeluaran</h4>
        <p>Catat transaksi pengeluaran Anda terlebih dahulu untuk mendapatkan rekomendasi</p>
        <a href="{{ route('finance.create-transaction') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Catat Transaksi
        </a>
    </div>
@endif
@endsection
