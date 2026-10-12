# Pertemuan 6

Pengenalan Laravel 11

## Tujuan Pembelajaran

Setelah mempelajari materi ini, diharapkan mampu:

- Memahami pengertian dan fungsi framework Laravel.
- Mengenali Laravel 11 sebagai framework berbasis PHP.
- Memahami gambaran umum struktur aplikasi Laravel.
- Mengenali routing, controller, view, dan Blade.
- Memahami peran Laravel Artisan.
- Mengenali teknologi pendukung seperti Tailwind CSS, Alpine.js, dan Laravel Breeze.
- Memahami kebutuhan perangkat lunak untuk pengembangan aplikasi Laravel.

## Pengertian Laravel

**Laravel** adalah framework PHP yang digunakan untuk membangun aplikasi web dengan struktur dan fitur yang telah disediakan.

Framework membantu pengembang mengurangi pekerjaan berulang karena banyak kebutuhan umum aplikasi sudah memiliki mekanisme tersendiri.

Contoh kebutuhan yang dapat dibantu oleh framework:

- Pengaturan URL atau routing.
- Pengelolaan permintaan dan respons.
- Pengolahan data.
- Pengelolaan tampilan.
- Integrasi database.
- Autentikasi pengguna.
- Pengelolaan konfigurasi aplikasi.

Laravel menggunakan pola arsitektur MVC (*Model-View-Controller*) sebagai salah satu dasar pengorganisasian aplikasi.

### Laravel 11

Materi video memperkenalkan Laravel 11, yang dirilis pada 12 Maret 2024.

Laravel 11 membawa struktur aplikasi yang lebih sederhana dibandingkan struktur bawaan pada sejumlah versi sebelumnya. Namun, penyederhanaan struktur tersebut tidak berarti seluruh fitur framework dihilangkan.

Catatan: materi ini berfokus pada Laravel 11. Struktur dan persyaratan versi Laravel yang lebih baru dapat berbeda.

## Mengapa Menggunakan Framework?

Dalam pengembangan web, aplikasi dapat dibuat menggunakan PHP tanpa framework atau menggunakan framework seperti Laravel.

| Aspek | PHP tanpa framework | Menggunakan Laravel |
|---|---|---|
| Struktur aplikasi | Disusun sendiri oleh pengembang | Mengikuti struktur dan konvensi framework |
| Routing | Dapat dibuat secara manual | Menggunakan sistem routing Laravel |
| Pengolahan request | Ditangani sendiri | Dibantu mekanisme framework |
| Database | Dapat menggunakan PDO atau MySQLi secara langsung | Tersedia Eloquent ORM dan Query Builder |
| Tampilan | HTML dan PHP dapat ditulis langsung | Dapat menggunakan Blade |
| Fitur pendukung | Banyak komponen perlu dirancang sendiri | Tersedia berbagai fitur bawaan dan paket tambahan |

Framework bukan berarti semua pekerjaan menjadi otomatis. Pengembang tetap harus memahami logika aplikasi, struktur data, keamanan, dan cara kerja kode.

## 4. Konsep MVC pada Laravel

MVC merupakan pola untuk memisahkan tanggung jawab aplikasi menjadi tiga bagian.

| Komponen | Fungsi | Contoh |
|---|---|---|
| Model | Mengelola data dan interaksi dengan database | Model `Mahasiswa` |
| View | Menampilkan antarmuka kepada pengguna | `mahasiswa.blade.php` |
| Controller | Mengatur alur aplikasi dan menghubungkan data dengan tampilan | `MahasiswaController` |

### Model

Model digunakan untuk merepresentasikan data dan membantu interaksi dengan database.

Contohnya, model `Mahasiswa` dapat digunakan untuk mengambil daftar mahasiswa.

### View

View berisi tampilan yang akan dilihat pengguna, misalnya halaman profil, daftar mahasiswa, dan formulir.

Laravel menggunakan **Blade** sebagai template engine untuk membuat tampilan dinamis.

### Controller

Controller menangani alur permintaan aplikasi. Controller dapat memanggil model, memproses data, lalu mengembalikan respons atau menampilkan view.

### Alur MVC

```text
Pengguna
   |
   v
Routing
   |
   v
Controller
   |
   v
Model -----> Database
   |
   v
View / Respons
   |
   v
Browser
```

Diagram tersebut merupakan gambaran umum. Tidak semua permintaan harus melewati model atau menghasilkan view; sebuah route juga dapat mengembalikan teks atau JSON secara langsung.

## Struktur Dasar Proyek Laravel 11

Contoh struktur direktori aplikasi Laravel:

```text
laravel-app/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   └── Models/
├── bootstrap/
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
├── routes/
│   ├── web.php
│   └── console.php
├── storage/
├── tests/
├── vendor/
├── artisan
├── composer.json
└── package.json
```

Fungsi beberapa direktori dan file penting:

| Direktori atau file | Fungsi |
|---|---|
| `app/` | Berisi kode utama aplikasi, termasuk controller dan model. |
| `app/Http/Controllers/` | Tempat menyimpan controller. |
| `app/Models/` | Tempat menyimpan model aplikasi. |
| `bootstrap/` | Berisi komponen untuk memulai aplikasi. |
| `config/` | Menyimpan konfigurasi aplikasi. |
| `database/` | Berisi migration, seeder, dan komponen database lainnya. |
| `public/` | Direktori publik yang menjadi titik masuk web melalui `index.php`. |
| `resources/views/` | Tempat menyimpan file tampilan Blade. |
| `routes/web.php` | Tempat mendefinisikan route web. |
| `storage/` | Menyimpan log, cache, dan file aplikasi tertentu. |
| `vendor/` | Berisi dependensi PHP yang dikelola Composer. |
| `artisan` | Antarmuka command-line untuk menjalankan perintah Laravel. |
| `composer.json` | Mendefinisikan dependensi dan konfigurasi proyek PHP. |
| `package.json` | Mendefinisikan dependensi dan skrip JavaScript proyek. |

Struktur tersebut merupakan gambaran umum. Tidak semua file dan direktori harus dibuat secara manual karena sebagian disediakan saat proyek Laravel dibuat.

## Routing pada Laravel

Routing menentukan bagaimana aplikasi merespons suatu URL atau permintaan HTTP.

Pada Laravel, route web umumnya didefinisikan dalam `routes/web.php`.

Contoh route sederhana:

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang di Laravel';
});
```

Penjelasan:

- `Route::get()` mendefinisikan route untuk permintaan HTTP GET.
- `'/'` menunjukkan alamat halaman utama.
- Fungsi anonim mengembalikan teks sebagai respons.

Ketika pengguna membuka halaman utama aplikasi, Laravel menjalankan route yang sesuai.

## Controller pada Laravel

Controller digunakan untuk memisahkan logika penanganan permintaan dari definisi route dan tampilan.

Contoh membuat controller melalui Artisan:

```bash
php artisan make:controller HomeController
```

Perintah tersebut menghasilkan file controller pada direktori controller aplikasi.

Contoh isi controller:

```php
<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return 'Halaman Home';
    }
}
```

Controller dapat dihubungkan dengan route:

```php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
```

Pada contoh ini, permintaan ke halaman utama akan ditangani oleh metode `index()` pada `HomeController`.

## Blade Template

**Blade** adalah template engine Laravel yang membantu menyusun tampilan HTML dengan dukungan variabel, kondisi, perulangan, dan pewarisan template.

File Blade umumnya menggunakan ekstensi `.blade.php`.

Contoh file `resources/views/home.blade.php`:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Home</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <p>Ini adalah halaman Laravel.</p>
</body>
</html>
```

Controller dapat menampilkan view tersebut:

```php
public function index()
{
    return view('home');
}
```

Nama view ditulis tanpa direktori `resources/views/` dan tanpa ekstensi `.blade.php`.

### Mengirim data ke Blade

Controller dapat mengirimkan data ke view:

```php
public function index()
{
    $nama = 'Andi';

    return view('home', compact('nama'));
}
```

Di dalam `home.blade.php`:

```html
<h1>Halo, {{ $nama }}</h1>
```

Sintaks `{{ }}` pada Blade digunakan untuk menampilkan nilai dengan escaping HTML secara otomatis.

## Laravel Artisan

**Artisan** adalah antarmuka command-line yang disediakan Laravel untuk menjalankan berbagai perintah pengembangan.

Artisan membantu pengembang membuat komponen, menjalankan migration, memeriksa route, dan menjalankan server pengembangan.

Contoh perintah:

```bash
php artisan list
php artisan route:list
php artisan make:controller HomeController
php artisan serve
```

Fungsi perintah:

| Perintah | Fungsi |
|---|---|
| `php artisan list` | Menampilkan daftar perintah Artisan. |
| `php artisan route:list` | Menampilkan daftar route yang terdaftar. |
| `php artisan make:controller HomeController` | Membuat controller baru. |
| `php artisan serve` | Menjalankan server pengembangan Laravel. |

Artisan merupakan salah satu alat penting karena banyak aktivitas pengembangan Laravel dapat dilakukan melalui terminal.

## Laravel Breeze

Laravel Breeze merupakan starter kit autentikasi Laravel yang menyediakan implementasi awal untuk fitur seperti:

- Registrasi pengguna.
- Login.
- Logout.
- Pengelolaan kata sandi.
- Tampilan autentikasi dasar.

Starter kit membantu pengembang memulai aplikasi yang membutuhkan autentikasi tanpa harus menyusun seluruh implementasinya dari awal.

Breeze merupakan paket tambahan yang perlu dipasang dan dikonfigurasi sesuai versi serta kebutuhan proyek. Paket ini bukan sesuatu yang otomatis wajib digunakan oleh semua aplikasi Laravel.

## Teknologi Pendukung

Video pengenalan Laravel 11 juga memperkenalkan sejumlah teknologi yang dapat digunakan bersama Laravel.

### Tailwind CSS

Tailwind CSS adalah framework CSS berbasis utility class.

Contoh:

```html
<h1 class="text-2xl font-bold text-blue-600">
    Belajar Laravel
</h1>
```

Class seperti `text-2xl`, `font-bold`, dan `text-blue-600` digunakan untuk mengatur ukuran teks, ketebalan huruf, dan warna.

Tailwind CSS membantu menyusun tampilan melalui class yang diterapkan langsung pada elemen HTML.

### Alpine.js

Alpine.js adalah framework JavaScript ringan untuk menambahkan interaksi pada halaman web.

Contoh sederhana:

```html
<div x-data="{ terbuka: false }">
    <button @click="terbuka = !terbuka">
        Tampilkan atau sembunyikan
    </button>

    <p x-show="terbuka">
        Konten yang dapat ditampilkan.
    </p>
</div>
```

Contoh ini menunjukkan penggunaan state sederhana untuk menampilkan atau menyembunyikan konten. Agar berfungsi, Alpine.js harus dimuat ke halaman.

### Blade Components

Blade Components membantu membagi tampilan menjadi bagian yang dapat digunakan kembali.

Contohnya, komponen tombol, navigasi, atau kartu informasi dapat dibuat sekali dan digunakan di beberapa halaman.

Dengan pendekatan ini, struktur tampilan menjadi lebih konsisten dan lebih mudah dipelihara.

### Hubungan teknologi

| Teknologi | Peran utama |
|---|---|
| Laravel | Framework aplikasi sisi server. |
| Blade | Template engine untuk tampilan. |
| Tailwind CSS | Mengatur tampilan melalui utility class CSS. |
| Alpine.js | Menambahkan interaksi sisi browser. |
| Laravel Breeze | Menyediakan implementasi awal autentikasi. |

Teknologi tersebut memiliki fungsi berbeda, tetapi dapat dikombinasikan untuk membangun aplikasi web.

## Persiapan Lingkungan Pengembangan

Video menyebutkan beberapa perangkat lunak dan alat yang dapat digunakan untuk mengembangkan aplikasi Laravel.

| Perangkat atau alat | Fungsi |
|---|---|
| PHP 8.2 atau lebih baru | Menjalankan aplikasi Laravel 11 sesuai persyaratan versi. |
| Composer | Mengelola dependensi PHP. |
| Node.js dan NPM | Mengelola tool frontend dan dependensi JavaScript. |
| Apache atau Nginx | Web server yang dapat digunakan untuk menyajikan aplikasi. |
| SQLite | Pilihan database yang digunakan dalam tutorial video. |
| Laragon atau Herd | Pilihan lingkungan pengembangan lokal. |
| TablePlus | Aplikasi untuk mengelola dan memeriksa database. |
| Visual Studio Code | Editor kode untuk mengembangkan aplikasi. |

Catatan:

- Video menggunakan SQLite sebagai pilihan database tutorial. Laravel juga mendukung database lain, termasuk MySQL dan PostgreSQL.
- Apache atau Nginx dapat digunakan untuk menjalankan aplikasi, sedangkan `php artisan serve` menyediakan server pengembangan untuk praktik lokal.
- Kebutuhan instalasi aktual bergantung pada sistem operasi, cara menjalankan proyek, dan dependensi yang digunakan.

## Composer dan NPM

Laravel menggunakan ekosistem PHP dan frontend. Karena itu, terdapat dua pengelola paket yang perlu dibedakan.

### Composer

Composer mengelola dependensi PHP.

File utama yang digunakan adalah:

```text
composer.json
composer.lock
```

Composer digunakan untuk memasang dan memperbarui paket PHP.

### NPM

NPM digunakan untuk mengelola paket JavaScript dan tool frontend.

File yang umum ditemukan:

```text
package.json
package-lock.json
```

NPM sering digunakan bersama tool frontend untuk memproses aset CSS dan JavaScript.

Perbedaan sederhananya:

- Composer berfokus pada dependensi PHP.
- NPM berfokus pada dependensi JavaScript dan tool frontend.

## Gambaran Umum Membuat Proyek Laravel

Setelah lingkungan pengembangan siap, proyek Laravel dapat dibuat menggunakan Composer.

Contoh perintah:

```bash
composer create-project laravel/laravel laravel-app "^11.0"
```

Perintah tersebut meminta Composer membuat proyek Laravel 11 pada direktori `laravel-app`, dengan syarat versi yang ditentukan.

Masuk ke direktori proyek:

```bash
cd laravel-app
```

Periksa daftar perintah:

```bash
php artisan list
```

Jalankan server pengembangan:

```bash
php artisan serve
```

Kemudian buka alamat lokal yang ditampilkan oleh Artisan di browser.

**Catatan:** ini merupakan contoh alur umum untuk memperjelas konsep pengembangan Laravel, bukan bukti bahwa instalasi tersebut sudah dilakukan pada komputer.

## Persyaratan Dasar Sebelum Belajar Laravel

Video menekankan pentingnya memahami beberapa materi dasar sebelum mempelajari Laravel lebih jauh.

### A. PHP dasar

Materi yang perlu dikuasai antara lain:

- Variabel dan tipe data.
- Operator.
- Percabangan dan perulangan.
- Fungsi.
- Array.

### B. Object-Oriented Programming (OOP)

Konsep OOP yang perlu dipahami:

- Class dan object.
- Constructor.
- Inheritance.
- Access modifier.

Laravel menggunakan banyak konsep OOP. Pemahaman ini membantu ketika membaca controller, model, dan komponen framework lainnya.

### C. HTML dan CSS

HTML dan CSS tetap diperlukan karena aplikasi Laravel menghasilkan halaman web yang ditampilkan di browser.

### D. JavaScript dasar

Pengetahuan JavaScript membantu ketika mempelajari interaksi pada sisi browser, termasuk penggunaan Alpine.js.

Materi ini merupakan daftar persiapan belajar, bukan berarti semua konsep tersebut harus sudah dikuasai secara sempurna sebelum mencoba Laravel.

## Ringkasan

1. Laravel merupakan framework PHP untuk membangun aplikasi web.
2. Laravel 11 menggunakan struktur aplikasi yang lebih sederhana dibandingkan sejumlah versi sebelumnya.
3. MVC memisahkan tanggung jawab model, view, dan controller.
4. Routing menentukan penanganan URL atau permintaan HTTP.
5. Blade membantu menyusun tampilan dinamis.
6. Artisan menyediakan perintah untuk membantu pengembangan aplikasi.
7. Laravel Breeze dapat menyediakan implementasi awal autentikasi.
8. Tailwind CSS mengatur tampilan melalui utility class.
9. Alpine.js membantu membuat interaksi ringan pada browser.
10. Composer mengelola dependensi PHP, sedangkan NPM mengelola dependensi JavaScript.
11. PHP, Composer, dan konfigurasi lingkungan yang sesuai diperlukan untuk menjalankan proyek Laravel.
12. Pemahaman PHP, OOP, HTML, CSS, dan JavaScript membantu proses belajar Laravel.

## Checklist Belajar Mandiri

- [ ] Memahami fungsi framework Laravel.
- [ ] Menjelaskan konsep MVC.
- [ ] Mengenali struktur dasar direktori Laravel 11.
- [ ] Memahami fungsi routing.
- [ ] Memahami hubungan controller dengan view.
- [ ] Mengenali Blade sebagai template engine.
- [ ] Menjelaskan fungsi Laravel Artisan.
- [ ] Memahami kegunaan Laravel Breeze.
- [ ] Membedakan fungsi Tailwind CSS dan Alpine.js.
- [ ] Menjelaskan perbedaan Composer dan NPM.
- [ ] Mengenali kebutuhan lingkungan pengembangan Laravel.
- [ ] Memahami pentingnya PHP dan OOP sebelum mempelajari Laravel lebih lanjut.

## Batasan Materi

Catatan ini berfokus pada pengenalan Laravel 11 dan teknologi pendukungnya sesuai transkrip video.

Pembahasan implementasi autentikasi secara lengkap, operasi CRUD, relasi database, pengujian, deployment produksi, dan konfigurasi keamanan tidak dijelaskan secara mendalam dalam catatan ini.
