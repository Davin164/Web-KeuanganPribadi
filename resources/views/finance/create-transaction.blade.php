@extends('layouts.app')

@section('title', 'Catat Transaksi')

@section('content')
<h2 class="header-title">
    <i class="bi bi-plus-circle-fill"></i> Catat Transaksi Baru
</h2>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-custom">
            <div class="card-body p-4">
                <form action="{{ route('finance.store-transaction') }}" method="POST">
                    @csrf

                    <!-- Tipe Transaksi -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="bi bi-arrow-left-right"></i> Tipe Transaksi
                        </label>
                        <select name="tipe" id="tipe" class="form-select form-select-lg" required>
                            <option value="pengeluaran" {{ old('tipe') == 'pengeluaran' ? 'selected' : '' }}>
                                💸 Pengeluaran
                            </option>
                            <option value="pemasukan" {{ old('tipe') == 'pemasukan' ? 'selected' : '' }}>
                                💵 Pemasukan
                            </option>
                        </select>
                    </div>

                    <!-- Kategori -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="bi bi-tag-fill"></i> Kategori
                        </label>
                        <select name="kategori" id="kategori" class="form-select form-select-lg" required>
                            <!-- Options will be populated by JavaScript -->
                        </select>
                    </div>

                    <!-- Jumlah -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="bi bi-currency-dollar"></i> Jumlah (Rp)
                        </label>
                        <input type="number" name="jumlah" class="form-control form-control-lg"
                               value="{{ old('jumlah') }}"
                               placeholder="Masukkan jumlah..."
                               min="0" step="0.01" required>
                    </div>

                    <!-- Tanggal -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="bi bi-calendar-event"></i> Tanggal
                        </label>
                        <input type="date" name="tanggal" class="form-control form-control-lg"
                               value="{{ old('tanggal', date('Y-m-d')) }}" required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">
                            <i class="bi bi-chat-left-text"></i> Deskripsi
                        </label>
                        <textarea name="deskripsi" class="form-control" rows="3"
                                  placeholder="Catatan tambahan (opsional)...">{{ old('deskripsi') }}</textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-lg">
                            <i class="bi bi-save"></i> Simpan Transaksi
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

@section('scripts')
<script>
    const kategoriPemasukan = ['gaji', 'investasi', 'bonus', 'lainnya'];
    const kategoriPengeluaran = ['makan', 'transport', 'hiburan', 'tagihan', 'belanja'];

    const tipeSelect = document.getElementById('tipe');
    const kategoriSelect = document.getElementById('kategori');

    function updateKategori() {
        const tipe = tipeSelect.value;
        const kategoris = tipe === 'pemasukan' ? kategoriPemasukan : kategoriPengeluaran;

        kategoriSelect.innerHTML = '';
        kategoris.forEach(kat => {
            const option = document.createElement('option');
            option.value = kat;
            option.textContent = kat.charAt(0).toUpperCase() + kat.slice(1);
            kategoriSelect.appendChild(option);
        });
    }

    tipeSelect.addEventListener('change', updateKategori);

    // Initialize on page load
    updateKategori();
</script>
@endsection
