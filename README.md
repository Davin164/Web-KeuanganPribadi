# 💰 Web Keuangan Pribadi

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

**Aplikasi manajemen keuangan pribadi berbasis website yang sangat bagus dan user-friendly**
</div>

---

## 📖 Tentang Proyek Ini

**Web Keuangan Pribadi** adalah aplikasi web yang dirancang untuk membantu Anda mengelola keuangan dengan lebih efektif dan efisien. Dibangun menggunakan Laravel framework, aplikasi ini menawarkan antarmuka yang modern, responsif, dan mudah digunakan untuk mencatat, menganalisis, dan mengoptimalkan pengelolaan keuangan pribadi Anda.

### 🎯 Tujuan Aplikasi

- ✅ Memudahkan pencatatan transaksi keuangan harian
- ✅ Memberikan visualisasi data keuangan yang mudah dipahami
- ✅ Membantu pengguna membuat keputusan keuangan yang lebih baik
- ✅ Menyediakan rekomendasi berdasarkan pola pengeluaran
- ✅ Meningkatkan kesadaran finansial pengguna

---

## ✨ Fitur Unggulan

### 1. 🔍 Riset & Analisis Keuangan
- **Dashboard Interaktif** - Visualisasi data keuangan real-time dengan grafik yang menarik
- **Grafik & Chart** - Menggunakan Chart.js untuk menampilkan:
  - Grafik pengeluaran vs pemasukan bulanan
  - Pie chart kategori pengeluaran
  - Trend keuangan per periode
  - Perbandingan budget vs actual
- **Filter & Pencarian** - Filter data berdasarkan tanggal, kategori, dan jenis transaksi
- **Laporan Lengkap** - Generate laporan keuangan bulanan dan tahunan

### 2. 📝 Pencatatan Transaksi
- **Form Input Mudah** - Interface yang intuitif untuk mencatat transaksi
- **Dual Type Transaction** - Catat pemasukan dan pengeluaran dengan mudah
- **Kategori Fleksibel** - Buat dan kelola kategori sesuai kebutuhan
- **Upload Bukti** - Lampirkan foto nota atau bukti transaksi
- **Quick Entry** - Fitur quick add untuk pencatatan cepat
- **Validasi Real-time** - Validasi input langsung dengan notifikasi

### 3. 🗑️ Manajemen Data (Edit & Delete)
- **Edit Transaksi** - Ubah data transaksi yang sudah tercatat
- **Hapus Aman** - Modal konfirmasi untuk menghindari penghapusan tidak sengaja
- **Soft Delete** - Data terhapus masih dapat dipulihkan
- **Bulk Actions** - Hapus atau edit multiple transaksi sekaligus
- **History Log** - Riwayat perubahan data

### 4. 💾 Sistem Penyimpanan Otomatis
- **Auto Save** - Penyimpanan otomatis setiap perubahan
- **Database Sync** - Sinkronisasi real-time ke MySQL database
- **Backup Otomatis** - Backup data secara berkala
- **Data Security** - Enkripsi data sensitif
- **Cloud Ready** - Siap diintegrasikan dengan cloud storage

### 5. 🎯 Rekomendasi Keuangan Cerdas
- **AI-Powered Suggestions** - Saran berdasarkan analisis pola pengeluaran
- **Budget Alert** - Notifikasi ketika mendekati atau melebihi budget
- **Spending Analysis** - Identifikasi kategori pengeluaran terbesar
- **Saving Tips** - Tips menabung berdasarkan income dan spending
- **Financial Goals** - Tracking progress menuju target keuangan
- **Smart Reminders** - Pengingat pembayaran rutin

### 6. 📊 Fitur Tambahan
- **Export Data** - Download laporan dalam format Excel & PDF
- **Multi-Currency** - Support berbagai mata uang (optional)
- **Responsive Design** - Optimal di desktop, tablet, dan mobile
- **User Management** - Multi-user dengan role & permission
- **Security** - Authentication & authorization lengkap

---

## 🛠️ Teknologi yang Digunakan

### Backend
| Teknologi | Versi | Kegunaan |
|-----------|-------|----------|
| **Laravel** | 10.x | PHP Framework utama |
| **PHP** | 8.1+ | Server-side programming |
| **MySQL** | 5.7+ | Database management |
| **Eloquent ORM** | - | Database interaction |

### Frontend
| Teknologi | Versi | Kegunaan |
|-----------|-------|----------|
| **Bootstrap** | 5.3 | CSS Framework |
| **JavaScript** | ES6+ | Client-side scripting |
| **jQuery** | 3.x | DOM manipulation |
| **Chart.js** | 4.x | Data visualization |
| **FontAwesome** | 6.x | Icon library |
| **SweetAlert2** | - | Beautiful alerts |

### Tools & Libraries
- **Composer** - PHP dependency manager
- **NPM** - JavaScript package manager
- **Vite** - Frontend build tool
- **Laravel Breeze** - Authentication scaffolding
- **Laravel Excel** - Excel export/import
- **DomPDF** - PDF generation
- **DataTables** - Advanced table features

---

## 📋 Persyaratan Sistem

Sebelum instalasi, pastikan sistem Anda memenuhi requirements berikut:

### Minimum Requirements
- **PHP**: >= 8.1
- **Composer**: >= 2.0
- **Node.js**: >= 16.x
- **NPM**: >= 8.x
- **MySQL**: >= 5.7 atau MariaDB >= 10.3
- **Web Server**: Apache 2.4+ / Nginx 1.18+

### Recommended Requirements
- **PHP**: 8.2+
- **MySQL**: 8.0+
- **RAM**: Minimal 2GB
- **Storage**: Minimal 500MB free space

### Development Tools
- **XAMPP** / **WAMP** / **LARAGON** (untuk Windows)
- **MAMP** (untuk MacOS)
- **LAMP** (untuk Linux)
- **PHPMyAdmin** (database management)
- **Git** (version control)

---

## 🚀 Instalasi

Ikuti langkah-langkah berikut untuk menginstall aplikasi:

### 1️⃣ Clone Repository

```bash
# Clone repository dari GitHub
git clone https://github.com/Davin164/Web-KeuanganPribadi.git

# Masuk ke direktori project
cd Web-KeuanganPribadi
```

### 2️⃣ Install Dependencies

```bash
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
```

### 3️⃣ Konfigurasi Environment

```bash
# Copy file environment
cp .env.example .env

# Generate application key
php artisan key:generate
```

Edit file `.env` dan sesuaikan konfigurasi:

```env
APP_NAME="Web Keuangan Pribadi"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=keuangan_pribadi
DB_USERNAME=root
DB_PASSWORD=

# Optional: Mail configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
```

### 4️⃣ Setup Database

**Opsi A: Menggunakan PHPMyAdmin**
1. Buka PHPMyAdmin di browser (http://localhost/phpmyadmin)
2. Klik "New" untuk membuat database baru
3. Nama database: `keuangan_pribadi`
4. Collation: `utf8mb4_unicode_ci`
5. Klik "Create"

**Opsi B: Menggunakan Command Line**
```bash
mysql -u root -p
CREATE DATABASE keuangan_pribadi CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;
```

### 5️⃣ Migrasi Database & Seeding

```bash
# Jalankan migrasi untuk membuat tabel
php artisan migrate

# (Optional) Jalankan seeder untuk data dummy
php artisan db:seed
```

### 6️⃣ Compile Assets

```bash
# Development mode (with hot reload)
npm run dev

# Production mode (optimized)
npm run build
```

### 7️⃣ Storage Link

```bash
# Buat symbolic link untuk storage
php artisan storage:link
```

### 8️⃣ Jalankan Aplikasi

```bash
# Start Laravel development server
php artisan serve

# Atau jika port 8000 sudah terpakai
php artisan serve --port=8080
```

**Akses aplikasi di browser:**
- URL: `http://localhost:8000`
- Username: `admin@example.com` (jika ada seeder)
- Password: `password`

---

## 📊 Struktur Database

### Entity Relationship Diagram

```
users (1) ──── (∞) transactions
users (1) ──── (∞) categories
users (1) ──── (∞) budgets
users (1) ──── (∞) savings_goals
categories (1) ──── (∞) transactions
categories (1) ──── (∞) budgets
```

## 🎨 Cara Penggunaan

### 🔐 1. Login & Registrasi
1. Akses aplikasi di browser
2. Klik "Register" untuk membuat akun baru
3. Isi form registrasi (nama, email, password)
4. Login dengan email dan password
5. Lengkapi profil pengguna

### 📂 2. Setup Kategori
1. Masuk ke menu **"Kategori"**
2. Klik tombol **"Tambah Kategori"**
3. Pilih tipe: **Pemasukan** atau **Pengeluaran**
4. Isi nama kategori (contoh: Gaji, Makanan, Transport)
5. Pilih icon dan warna
6. Klik **"Simpan"**

**Contoh Kategori Pemasukan:**
- 💼 Gaji
- 💰 Bonus
- 📈 Investasi
- 🎁 Hadiah

**Contoh Kategori Pengeluaran:**
- 🍔 Makanan & Minuman
- 🚗 Transportasi
- 🏠 Rumah & Utilitas
- 👕 Belanja
- 🎮 Entertainment

### 💵 3. Catat Transaksi
1. Klik tombol **"+ Tambah Transaksi"**
2. Pilih **Tipe Transaksi** (Pemasukan/Pengeluaran)
3. Pilih **Kategori**
4. Masukkan **Jumlah** (contoh: 50000)
5. Pilih **Tanggal Transaksi**
6. Isi **Keterangan** (optional)
7. **Upload Bukti** (foto nota, optional)
8. Klik **"Simpan"**

### 📊 4. Monitor Dashboard
**Dashboard** akan menampilkan:
- 💰 Total pemasukan bulan ini
- 💸 Total pengeluaran bulan ini
- 💵 Saldo bersih
- 📊 Grafik pengeluaran per kategori
- 📈 Trend keuangan 6 bulan terakhir
- ⚠️ Alert budget overrun
- 🎯 Progress savings goals

### ✏️ 5. Edit & Hapus Transaksi
**Edit Transaksi:**
1. Klik icon **✏️ Edit** pada transaksi
2. Ubah data yang diperlukan
3. Klik **"Update"**

**Hapus Transaksi:**
1. Klik icon **🗑️ Delete** pada transaksi
2. Konfirmasi di modal popup
3. Data akan dihapus (soft delete)

### 🎯 6. Set Budget & Savings Goal
**Set Budget:**
1. Menu **"Budget"** → **"Tambah Budget"**
2. Pilih kategori
3. Set jumlah budget per bulan
4. Sistem akan alert jika melebihi budget

**Savings Goal:**
1. Menu **"Target Tabungan"** → **"Tambah Target"**
2. Isi judul target (contoh: "Beli Laptop")
3. Set target amount dan tanggal
4. Track progress di dashboard

### 📄 7. Generate Laporan
1. Menu **"Laporan"**
2. Pilih periode (bulan/tahun)
3. Pilih format export:
   - **📊 Excel** - untuk analisis lanjut
   - **📄 PDF** - untuk print/archive
4. Klik **"Download"**

---

## 🔒 Fitur Keamanan

Aplikasi ini dilengkapi dengan berbagai fitur keamanan:

✅ **Authentication**
- Login dengan email & password
- Remember me functionality
- Password hashing dengan bcrypt
- Session management

✅ **Authorization**
- Role-based access control
- User ownership validation
- Protected routes

✅ **Data Security**
- CSRF protection
- SQL injection prevention (Eloquent ORM)
- XSS protection
- Input validation & sanitization
- Prepared statements

✅ **File Security**
- Upload validation (type, size)
- Secure file storage
- Protected file access

---

## 🧪 Testing

```bash
# Jalankan semua tests
php artisan test

# Test dengan coverage report
php artisan test --coverage

# Test specific file
php artisan test tests/Feature/TransactionTest.php

# Test dengan detailed output
php artisan test --verbose
```

### Test Cases
- ✅ User authentication
- ✅ Transaction CRUD operations
- ✅ Category management
- ✅ Budget calculation
- ✅ Report generation

---

## 📦 Deployment

### Production Checklist

**1. Environment Setup**
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com
```

**2. Optimize Application**
```bash
# Cache configuration
php artisan config:cache

# Cache routes
php artisan route:cache

# Cache views
php artisan view:cache

# Optimize autoloader
composer install --optimize-autoloader --no-dev
```

**3. Database**
```bash
# Run migrations on production
php artisan migrate --force

# Don't run seeders on production!
```

**4. File Permissions**
```bash
chmod -R 775 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
```

**5. Setup Cron Job**
```bash
* * * * * cd /path-to-project && php artisan schedule:run >> /dev/null 2>&1
```

**6. SSL Certificate**
- Install SSL certificate (Let's Encrypt recommended)
- Force HTTPS in `.env`: `APP_FORCE_HTTPS=true`

---

## 🤝 Kontribusi

Kontribusi sangat diterima dan dihargai! Berikut cara berkontribusi:

### Cara Berkontribusi

1. **Fork** repository ini
2. **Clone** fork Anda
   ```bash
   git clone https://github.com/YOUR_USERNAME/Web-KeuanganPribadi.git
   ```
3. Buat **branch** untuk fitur baru
   ```bash
   git checkout -b feature/AmazingFeature
   ```
4. **Commit** perubahan Anda
   ```bash
   git commit -m 'Add some AmazingFeature'
   ```
5. **Push** ke branch
   ```bash
   git push origin feature/AmazingFeature
   ```
6. Buat **Pull Request**

### Coding Standards

- Follow PSR-12 coding standard
- Write meaningful commit messages
- Add comments untuk kode yang kompleks
- Write tests untuk fitur baru
- Update documentation

---

## 🐞 Known Issues

Berikut adalah beberapa issue yang sedang dalam perbaikan:

- [ ] **Mobile Responsive** - Beberapa halaman perlu improvement untuk mobile
- [ ] **Real-time Updates** - Dashboard belum real-time update
- [ ] **Export Large Data** - Timeout saat export data > 10,000 records
- [ ] **Dark Mode** - Masih dalam development
- [ ] **Multi-language** - Belum support bahasa lain

---

## ❓ FAQ

<details>
<summary><b>Q: Apakah aplikasi ini gratis?</b></summary>
<br>
A: Ya, aplikasi ini 100% gratis dan open source dengan lisensi MIT.
</details>

<details>
<summary><b>Q: Apakah data saya aman?</b></summary>
<br>
A: Ya, data Anda aman. Aplikasi menggunakan enkripsi password dan berbagai fitur keamanan Laravel.
</details>

<details>
<summary><b>Q: Bisakah digunakan untuk bisnis?</b></summary>
<br>
A: Ya, Anda bisa memodifikasi sesuai kebutuhan bisnis Anda.
</details>

<details>
<summary><b>Q: Bagaimana cara backup data?</b></summary>
<br>
A: Gunakan fitur export atau backup database MySQL secara berkala melalui PHPMyAdmin.
</details>

<details>
<summary><b>Q: Support multi-user?</b></summary>
<br>
A: Ya, setiap user memiliki data terpisah dan aman.
</details>

---

## 📄 Lisensi

Project ini dilisensikan di bawah **MIT License** - lihat file [LICENSE](LICENSE) untuk detail lengkap.

```
MIT License

Copyright (c) 2025 Davin164

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

[Full MIT License text...]
```

---

## 🙏 Acknowledgments

Terima kasih kepada:

- **Laravel Community** - Framework yang luar biasa
- **Bootstrap Team** - CSS framework yang powerful
- **Chart.js Contributors** - Library visualisasi data
- **FontAwesome** - Icon library yang lengkap
- **All Contributors** - Yang telah berkontribusi ke project ini

---

## 👨‍💻 Developer

<div align="center">

### Dikembangkan dengan ❤️ oleh **Davin164**
---

### ⭐ Jangan lupa berikan **star** jika project ini bermanfaat!

### 💖 Dukung development dengan memberikan **feedback** dan **suggestions**!
</div>

---

<div align="center">

**Made with ❤️ in Indonesia 🇮🇩**

*Copyright © 2025 Davin164. All rights reserved.*

</div>
