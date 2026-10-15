#!/bin/bash
# Urutan instalasi Laravel Telescope sesuai materi Pertemuan 7.
# Jalankan dari dalam direktori proyek Laravel.
#
# Catatan: pada mesin Linux/Composer versi baru, laravel/framework 11.31+
# diblokir karena advisory keamanan. Tambahkan --no-security-blocking
# agar instalasi lewat (versi uji: framework 11.57.0 + telescope 5.26.0).

set -e

# 1. Pasang Telescope sebagai dependensi pengembangan (--dev)
composer require laravel/telescope --dev --no-security-blocking

# 2. Jalankan instalasi Telescope
php artisan telescope:install

# 3. Jalankan migrasi (membuat tabel telescope_*)
php artisan migrate

# 4. Jalankan server pengembangan
php artisan serve

# 5. Buka dashboard: http://127.0.0.1:8000/telescope
