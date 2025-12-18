@extends('layouts.app')

@section('title', 'Daftar Transaksi')

@section('content')
<h2 class="header-title">
    <i class="bi bi-list-ul"></i> Daftar Semua Transaksi
</h2>

@if($transactions->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Tanggal</th>
                    <th>Tipe</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transactions as $index => $trans)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $trans->tanggal->format('d/m/Y') }}</td>
                    <td>
                        @if($trans->tipe == 'pemasukan')
                            <span class="badge bg-success">
                                <i class="bi bi-arrow-down-circle"></i> Pemasukan
                            </span>
                        @else
                            <span class="badge bg-danger">
                                <i class="bi bi-arrow-up-circle"></i> Pengeluaran
                            </span>
                        @endif
                    </td>
                    <td>
                        <span class="badge bg-secondary">
                            {{ ucfirst($trans->kategori) }}
                        </span>
                    </td>
                    <td class="fw-bold {{ $trans->tipe == 'pemasukan' ? 'text-success' : 'text-danger' }}">
                        Rp {{ number_format($trans->jumlah, 0, ',', '.') }}
                    </td>
                    <td>{{ $trans->deskripsi ?? '-' }}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot class="table-light">
                <tr>
                    <td colspan="6" class="text-center fw-bold">
                        Total {{ $transactions->count() }} Transaksi
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
@else
    <div class="alert alert-info text-center py-5">
        <i class="bi bi-info-circle fs-1"></i>
        <h4 class="mt-3">Belum Ada Transaksi</h4>
        <p>Mulai catat transaksi Anda untuk melihat daftar di sini</p>
        <a href="{{ route('finance.create-transaction') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Catat Transaksi Pertama
        </a>
    </div>
@endif
@endsection
