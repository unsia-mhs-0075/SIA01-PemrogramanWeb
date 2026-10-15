# Proyek CodeIgniter 3 - Pertemuan 5

Mini aplikasi CRUD dasar (tampil data) sesuai materi P5: CodeIgniter 3 + Bootstrap 4 + SQLite.

## Struktur

```
ci-app/
├── application/
│   ├── config/
│   │   ├── routes.php      ← default_controller = 'home'
│   │   ├── database.php    ← konfigurasi SQLite
│   │   └── autoload.php    ← autoload database + helper url
│   ├── controllers/
│   │   ├── Home.php        ← kirim data judul & nama ke view
│   │   └── Mahasiswa.php   ← muat model, kirim data ke view
│   ├── models/
│   │   └── Mahasiswa_model.php  ← getAllMahasiswa() via Query Builder
│   ├── views/
│   │   ├── templates/header.php ← template header + navbar Bootstrap
│   │   ├── templates/footer.php ← template footer
│   │   ├── home.php             ← halaman utama (jumbotron)
│   │   └── mahasiswa/index.php  ← tabel daftar mahasiswa
│   └── db/
│       └── db_mahasiswa.sqlite  ← database SQLite (4 data contoh)
├── db/
│   ├── buat_tabel.sql          ← versi MySQL/MariaDB (materi dosen)
│   └── buat_tabel.sqlite.sql   ← versi SQLite (dipakai proyek ini)
└── system/                     ← framework CodeIgniter 3.1.13
```

## Cara Menjalankan

```bash
cd ci-app
php -S localhost:8000
```

Buka browser:
- `http://localhost:8000/` → halaman Home
- `http://localhost:8000/index.php/mahasiswa` → daftar mahasiswa

## Catatan Penting

1. **SQLite, bukan MySQL.** Materi dosen memakai MySQL/MariaDB; proyek ini memakai SQLite
   supaya bisa jalan tanpa server database. Untuk kembali ke MySQL:
   - jalankan `db/buat_tabel.sql` di MySQL
   - ubah `dbdriver` jadi `mysqli` di `application/config/database.php`
   - sesuaikan hostname/username/password/database

2. **PHP 8.4 compatibility.** CodeIgniter 3.1.13 dirilis sebelum PHP 8.4, sehingga muncul
   deprecation warning dari core framework. Sudah diselesaikan dengan menyembunyikan
   `E_DEPRECATED`/`E_STRICT` di `index.php` (mode development).

3. **XAMPP tidak diperlukan.** PHP built-in server (`php -S`) sudah cukup untuk latihan ini.

4. **Bootstrap 4 dimuat dari CDN** (jsdelivr) — butuh koneksi internet untuk tampil.
