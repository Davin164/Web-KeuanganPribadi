<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Pengelolaan Keuangan Pribadi')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px 0;
        }
        .main-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            padding: 30px;
            margin-bottom: 30px;
        }
        .navbar-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .btn-menu {
            margin: 5px;
        }
        .card-custom {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .header-title {
            color: #667eea;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="main-container">
            <h1 class="text-center mb-2">
                <i class="bi bi-cash-coin"></i>
                SISTEM PENGELOLAAN KEUANGAN PRIBADI
            </h1>
            <p class="text-center text-muted">Kelola keuangan Anda dengan mudah dan efisien</p>
        </div>

        <!-- Navigation Menu -->
        <div class="main-container navbar-custom">
            <div class="row g-2">
                <div class="col-6 col-md-3">
                    <a href="{{ route('finance.create-transaction') }}" class="btn btn-success w-100 btn-menu">
                        <i class="bi bi-plus-circle"></i> Catat Transaksi
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('finance.analysis') }}" class="btn btn-primary w-100 btn-menu">
                        <i class="bi bi-graph-up"></i> Analisis
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('finance.set-budget') }}" class="btn btn-warning w-100 btn-menu">
                        <i class="bi bi-wallet2"></i> Set Budget
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('finance.budget-status') }}" class="btn btn-info w-100 btn-menu">
                        <i class="bi bi-bell"></i> Status Budget
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('finance.prediction') }}" class="btn btn-secondary w-100 btn-menu">
                        <i class="bi bi-crystal-ball"></i> Prediksi
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('finance.recommendations') }}" class="btn btn-danger w-100 btn-menu">
                        <i class="bi bi-lightbulb"></i> Rekomendasi
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('finance.list-transactions') }}" class="btn btn-dark w-100 btn-menu">
                        <i class="bi bi-list-ul"></i> Lihat Transaksi
                    </a>
                </div>
                <div class="col-6 col-md-3">
                    <a href="{{ route('finance.index') }}" class="btn btn-outline-light w-100 btn-menu">
                        <i class="bi bi-house"></i> Home
                    </a>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="main-container">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-circle"></i> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="bi bi-exclamation-triangle"></i>
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
