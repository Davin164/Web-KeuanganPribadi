<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceController extends Controller
{
    // Halaman Utama/Dashboard
    public function index()
    {
        return view('finance.index');
    }

    // Halaman Form Catat Transaksi
    public function createTransaction()
    {
        return view('finance.create-transaction');
    }

    // Simpan Transaksi
    public function storeTransaction(Request $request)
    {
        $validated = $request->validate([
            'tipe' => 'required|in:pemasukan,pengeluaran',
            'kategori' => 'required|string',
            'jumlah' => 'required|numeric|min:0',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string'
        ]);

        Transaction::create($validated);

        return redirect()->route('finance.create-transaction')
            ->with('success', 'Transaksi berhasil dicatat!');
    }

    // Halaman Lihat Semua Transaksi
    public function listTransactions()
    {
        $transactions = Transaction::orderBy('tanggal', 'desc')->get();
        return view('finance.list-transactions', compact('transactions'));
    }

    // Halaman Analisis Keuangan
    public function analysis()
    {
        $transactions = Transaction::all();

        $totalPemasukan = $transactions->where('tipe', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = $transactions->where('tipe', 'pengeluaran')->sum('jumlah');

        $pengeluaranPerKategori = $transactions
            ->where('tipe', 'pengeluaran')
            ->groupBy('kategori')
            ->map(function ($items) use ($totalPengeluaran) {
                $total = $items->sum('jumlah');
                return [
                    'total' => $total,
                    'persentase' => $totalPengeluaran > 0 ? ($total / $totalPengeluaran) * 100 : 0
                ];
            });

        $cashFlow = $totalPemasukan - $totalPengeluaran;

        if ($cashFlow > 0) {
            $status = 'SURPLUS (Keuangan Sehat)';
            $statusClass = 'success';
        } elseif ($cashFlow < 0) {
            $status = 'DEFISIT (Pengeluaran Melebihi Pemasukan!)';
            $statusClass = 'danger';
        } else {
            $status = 'BREAK EVEN (Seimbang)';
            $statusClass = 'warning';
        }

        return view('finance.analysis', compact(
            'totalPemasukan',
            'totalPengeluaran',
            'cashFlow',
            'status',
            'statusClass',
            'pengeluaranPerKategori'
        ));
    }

    // Halaman Set Budget
    public function setBudgetForm()
    {
        $budgets = Budget::pluck('jumlah', 'kategori')->toArray();
        return view('finance.set-budget', compact('budgets'));
    }

    // Simpan Budget
    public function saveBudget(Request $request)
    {
        $validated = $request->validate([
            'makan' => 'nullable|numeric|min:0',
            'transport' => 'nullable|numeric|min:0',
            'hiburan' => 'nullable|numeric|min:0',
            'tagihan' => 'nullable|numeric|min:0',
            'belanja' => 'nullable|numeric|min:0'
        ]);

        foreach ($validated as $kategori => $jumlah) {
            if ($jumlah !== null && $jumlah > 0) {
                Budget::updateOrCreate(
                    ['kategori' => $kategori],
                    ['jumlah' => $jumlah]
                );
            }
        }

        return redirect()->route('finance.set-budget')
            ->with('success', 'Budget berhasil disimpan!');
    }

    // Halaman Status Budget
    public function budgetStatus()
    {
        $budgets = Budget::all();
        $pengeluaran = Transaction::where('tipe', 'pengeluaran')
            ->select('kategori', DB::raw('SUM(jumlah) as total'))
            ->groupBy('kategori')
            ->get()
            ->keyBy('kategori');

        $statusBudget = $budgets->map(function ($budget) use ($pengeluaran) {
            $spent = isset($pengeluaran[$budget->kategori]) ? $pengeluaran[$budget->kategori]->total : 0;
            $remaining = $budget->jumlah - $spent;
            $exceeded = $spent > $budget->jumlah && $budget->jumlah > 0;

            return [
                'kategori' => $budget->kategori,
                'budget' => $budget->jumlah,
                'spent' => $spent,
                'remaining' => $remaining,
                'exceeded' => $exceeded,
                'excessAmount' => $exceeded ? ($spent - $budget->jumlah) : 0,
                'percentage' => $budget->jumlah > 0 ? ($spent / $budget->jumlah) * 100 : 0
            ];
        });

        return view('finance.budget-status', compact('statusBudget'));
    }

    // Halaman Prediksi 3 Bulan
    public function prediction()
    {
        $totalPemasukan = Transaction::where('tipe', 'pemasukan')->sum('jumlah');
        $totalPengeluaran = Transaction::where('tipe', 'pengeluaran')->sum('jumlah');

        $cashFlowBulanan = $totalPemasukan - $totalPengeluaran;

        $prediksi = [
            'bulan1' => $cashFlowBulanan,
            'bulan2' => $cashFlowBulanan * 2,
            'bulan3' => $cashFlowBulanan * 3,
            'warning' => $cashFlowBulanan * 3 < 0
        ];

        return view('finance.prediction', compact('prediksi', 'totalPemasukan', 'totalPengeluaran'));
    }

    // Halaman Rekomendasi Penghematan
    public function recommendations()
    {
        $pengeluaran = Transaction::where('tipe', 'pengeluaran')
            ->select('kategori', DB::raw('SUM(jumlah) as total'))
            ->groupBy('kategori')
            ->get();

        $totalPengeluaran = $pengeluaran->sum('total');

        $recommendations = [];

        foreach ($pengeluaran as $item) {
            $persentase = $totalPengeluaran > 0 ? ($item->total / $totalPengeluaran) * 100 : 0;

            if ($item->kategori === 'makan' && $persentase > 40) {
                $recommendations[] = [
                    'kategori' => 'Makan',
                    'persentase' => round($persentase, 2),
                    'total' => $item->total,
                    'saran' => 'Masak di rumah, kurangi makan di luar',
                    'potensiHemat' => $item->total * 0.3
                ];
            }

            if ($item->kategori === 'hiburan' && $persentase > 20) {
                $recommendations[] = [
                    'kategori' => 'Hiburan',
                    'persentase' => round($persentase, 2),
                    'total' => $item->total,
                    'saran' => 'Cari hiburan gratis/murah, batasi hiburan berbayar',
                    'potensiHemat' => $item->total * 0.5
                ];
            }

            if ($item->kategori === 'belanja' && $persentase > 25) {
                $recommendations[] = [
                    'kategori' => 'Belanja',
                    'persentase' => round($persentase, 2),
                    'total' => $item->total,
                    'saran' => 'Buat daftar kebutuhan, hindari impulse buying',
                    'potensiHemat' => $item->total * 0.4
                ];
            }
        }

        $tips = [
            'Terapkan aturan 50/30/20 (kebutuhan/keinginan/tabungan)',
            'Review pengeluaran rutin setiap minggu',
            'Gunakan metode envelope untuk budget'
        ];

        return view('finance.recommendations', compact('recommendations', 'tips', 'totalPengeluaran'));
    }
}
