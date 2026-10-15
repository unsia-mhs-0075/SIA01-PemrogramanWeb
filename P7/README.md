# Pertemuan 7

Laravel Telescope

## Tujuan Pembelajaran

Setelah mempelajari materi ini, diharapkan mampu:

- Memahami pengertian dan fungsi Laravel Telescope.
- Memahami peran Telescope dalam proses debugging aplikasi Laravel.
- Mengenali informasi yang dapat dipantau menggunakan Telescope.
- Memahami proses instalasi Telescope melalui Composer.
- Menjalankan instalasi Telescope dan migrasi database.
- Mengakses dashboard Telescope pada aplikasi Laravel.

## Pengertian Laravel Telescope

**Laravel Telescope** adalah alat debugging dan pemantauan yang dirancang untuk membantu pengembang memahami aktivitas yang terjadi di dalam aplikasi Laravel.

Telescope menyediakan dashboard yang menampilkan berbagai informasi tentang aktivitas aplikasi sehingga pengembang lebih mudah menelusuri masalah ketika mengembangkan dan menguji aplikasi.

Telescope dapat membantu pengembang mengamati permintaan yang masuk, aktivitas database, serta informasi lain yang direkam oleh aplikasi.

## Fungsi Laravel Telescope

Beberapa kegunaan Telescope dalam pengembangan aplikasi adalah:

1. **Debugging** — membantu menelusuri aktivitas aplikasi ketika terjadi masalah.
2. **Pemantauan request** — melihat informasi permintaan HTTP yang diterima aplikasi.
3. **Pemantauan query database** — membantu memeriksa query yang dijalankan.
4. **Analisis aktivitas aplikasi** — memberikan gambaran tentang proses yang berlangsung selama aplikasi digunakan.
5. **Pemeriksaan selama pengembangan** — membantu pengembang memahami perilaku aplikasi tanpa harus mengandalkan pencatatan manual saja.

Telescope merupakan alat bantu pengembangan. Informasi yang ditampilkan tetap perlu dianalisis oleh pengembang untuk menemukan penyebab masalah dan menentukan perbaikannya.

## Perbandingan dengan Clockwork

Clockwork juga merupakan alat yang membantu proses debugging dan pemeriksaan aktivitas aplikasi web.

Secara umum, keduanya memiliki tujuan yang serupa, yaitu membantu pengembang memahami apa yang terjadi saat aplikasi dijalankan.

Dalam materi video, Clockwork digunakan sebagai pembanding untuk memperkenalkan tujuan Laravel Telescope. Fokus praktik selanjutnya adalah penggunaan Telescope pada aplikasi Laravel.

## Instalasi Laravel Telescope

Materi video menggunakan Composer untuk memasang Telescope sebagai dependensi pengembangan.

Jalankan perintah berikut dari direktori proyek Laravel:

```bash
composer require laravel/telescope --dev
```

Penjelasan:

- `composer require` digunakan untuk menambahkan paket PHP ke proyek.
- `laravel/telescope` merupakan nama paket yang dipasang.
- `--dev` menandakan bahwa paket ditambahkan sebagai dependensi pengembangan.

Dengan demikian, Telescope dicatat pada bagian `require-dev` di `composer.json`, bukan sebagai dependensi produksi biasa.

## Menjalankan Instalasi Telescope

Setelah paket berhasil dipasang, jalankan:

```bash
php artisan telescope:install
```

Perintah tersebut menjalankan proses instalasi Telescope pada proyek Laravel.

Selanjutnya, jalankan migrasi database:

```bash
php artisan migrate
```

Migrasi digunakan untuk membuat atau memperbarui struktur tabel database yang diperlukan oleh aplikasi, termasuk tabel yang dibutuhkan Telescope.

Urutan perintah sesuai materi:

```bash
composer require laravel/telescope --dev
php artisan telescope:install
php artisan migrate
```

Pastikan konfigurasi database aplikasi sudah benar sebelum menjalankan migrasi.

## Tabel Database Telescope

Materi video menyebutkan beberapa tabel yang berkaitan dengan penyimpanan data Telescope.

| Tabel | Keterangan |
|---|---|
| `telescope_entries` | Menyimpan entri aktivitas yang direkam Telescope. |
| `telescope_entries_tags` | Menyimpan informasi tag yang berkaitan dengan entri. |
| `telescope_monitoring` | Digunakan untuk informasi pemantauan Telescope. |

Tabel-tabel tersebut dapat diperiksa melalui alat pengelola database, misalnya phpMyAdmin, apabila aplikasi menggunakan MySQL atau MariaDB.

**Catatan:** nama dan struktur tabel dapat bergantung pada versi paket serta migrasi yang digunakan. Periksa database proyek setelah proses instalasi untuk memastikan tabel yang benar-benar tersedia.

## Menjalankan Aplikasi Laravel

Setelah instalasi dan migrasi selesai, jalankan server pengembangan Laravel:

```bash
php artisan serve
```

Artisan akan menampilkan alamat lokal yang dapat digunakan untuk membuka aplikasi melalui browser.

Secara umum, alamat default server pengembangan Laravel adalah:

```text
http://127.0.0.1:8000
```

Jika port tersebut digunakan oleh aplikasi lain, alamat yang ditampilkan oleh terminal perlu diikuti sesuai hasil yang sebenarnya.

## Mengakses Dashboard Telescope

Setelah aplikasi berjalan dan Telescope terpasang, buka:

```text
http://127.0.0.1:8000/telescope
```

Dashboard Telescope digunakan untuk memeriksa aktivitas yang telah direkam oleh aplikasi.

Jika dashboard tidak dapat dibuka, beberapa hal yang dapat diperiksa adalah:

- Apakah paket Telescope berhasil dipasang?
- Apakah perintah instalasi Telescope berhasil dijalankan?
- Apakah migrasi database berhasil?
- Apakah server Laravel sedang berjalan?
- Apakah URL dan port yang digunakan sudah benar?
- Apakah konfigurasi akses Telescope mengizinkan pengguna yang sedang mengaksesnya?

## Alur Kerja Laravel Telescope

Secara sederhana, alur penggunaan Telescope adalah:

```text
Pasang Telescope
       |
       v
Jalankan Instalasi
       |
       v
Jalankan Migrasi Database
       |
       v
Jalankan Aplikasi Laravel
       |
       v
Buka Dashboard Telescope
       |
       v
Periksa Aktivitas Aplikasi
       |
       v
Analisis dan Perbaiki Masalah
```

Telescope membantu menyediakan informasi untuk proses debugging. Pengembang tetap perlu memahami kode dan konteks masalah agar dapat menentukan tindakan perbaikan yang tepat.

## Catatan Keamanan

Telescope dapat menampilkan informasi internal aplikasi, seperti detail request dan query database. Oleh karena itu, aksesnya harus dikendalikan.

Hal-hal yang perlu diperhatikan:

1. Gunakan Telescope terutama untuk kebutuhan pengembangan dan debugging.
2. Jangan membuka dashboard Telescope kepada publik tanpa pembatasan akses yang memadai.
3. Hindari menyimpan atau menampilkan informasi sensitif secara tidak perlu.
4. Tinjau konfigurasi Telescope sebelum aplikasi digunakan di lingkungan produksi.
5. Pastikan akses dashboard dibatasi kepada pihak yang berwenang.

Opsi `--dev` membantu memisahkan dependensi pengembangan dari dependensi produksi, tetapi **tidak dengan sendirinya menjamin dashboard Telescope aman atau tidak dapat diakses di lingkungan produksi**. Konfigurasi aplikasi dan kontrol akses tetap harus diperhatikan.

## Ringkasan

1. Laravel Telescope adalah alat debugging dan pemantauan untuk aplikasi Laravel.
2. Telescope membantu memeriksa request, query database, dan aktivitas aplikasi yang direkam.
3. Telescope dapat dipasang melalui Composer.
4. Opsi `--dev` menambahkan Telescope sebagai dependensi pengembangan.
5. `php artisan telescope:install` menjalankan proses instalasi Telescope.
6. `php artisan migrate` menjalankan migrasi database.
7. Dashboard Telescope dapat diakses melalui path `/telescope` pada aplikasi yang berjalan.
8. Telescope membantu proses analisis masalah, tetapi tidak otomatis memperbaiki masalah aplikasi.
9. Akses dashboard perlu dikendalikan karena Telescope dapat menampilkan informasi internal aplikasi.

## Checklist Belajar Mandiri

- [ ] Memahami fungsi Laravel Telescope.
- [ ] Menjelaskan kegunaan Telescope dalam debugging.
- [ ] Memahami perbedaan dependensi pengembangan dan produksi.
- [ ] Menjalankan perintah instalasi Telescope.
- [ ] Menjalankan migrasi database.
- [ ] Memeriksa tabel Telescope pada database.
- [ ] Menjalankan server pengembangan Laravel.
- [ ] Mengakses dashboard Telescope.
- [ ] Memahami pentingnya pembatasan akses dashboard.

## Batasan Materi

Catatan ini mengikuti cakupan transkrip video yang telah dibahas. Materi berfokus pada pengenalan Telescope, instalasi, migrasi, dan akses dashboard.

Pembahasan konfigurasi Telescope secara mendalam, analisis performa lanjutan, penyaringan entri, dan penanganan masalah produksi tidak dijelaskan secara rinci dalam catatan ini.

---

## File Latihan

Berbeda dari pertemuan lain, P7 tidak menambah kode aplikasi — isinya **proses instalasi Telescope**. Karena itu yang dilampirkan adalah urutan perintahnya, dan semuanya **sudah dijalankan sungguhan** pada proyek Laravel 11.57.0 dengan Telescope 5.26.0.

| File | Keterangan |
|---|---|
| [contoh/perintah-instalasi.sh](contoh/perintah-instalasi.sh) | Urutan `composer require --dev` → `telescope:install` → `migrate` → `serve` |
| [contoh/periksa-tabel.sh](contoh/periksa-tabel.sh) | Memeriksa tabel `telescope_*` dan jumlah entri terekam |

**Hasil uji sungguhan (bukan salinan catatan):**

| Yang diuji | Hasil |
|---|---|
| `composer require laravel/telescope --dev` | ✅ terpasang, tercatat di `require-dev` |
| `php artisan telescope:install` | ✅ publish service provider, config, dan migrasi |
| `php artisan migrate` | ✅ tabel Telescope terbentuk |
| Tabel di database | ✅ `telescope_entries`, `telescope_entries_tags`, `telescope_monitoring` — ketiganya ada, sesuai tabel pada catatan di atas |
| Dashboard `/telescope` | ✅ HTTP 200, judul halaman `Telescope - Laravel` |
| Perekaman aktivitas | ✅ 26 entri terekam setelah beberapa request |

Tipe entri yang terekam Telescope, sesuai fungsi yang dijelaskan pada catatan:

| Tipe | Isi yang terbukti terekam |
|---|---|
| `request` | `GET /` dengan `response_status: 200` |
| `query` | Query SQL sungguhan, mis. `select "migration" from "migrations"` |
| `view` | View yang dirender, mis. `welcome` |

Jadi ketiga kemampuan utama Telescope pada catatan di atas — pemantauan request, pemantauan query database, dan analisis aktivitas aplikasi — terbukti bekerja, bukan hanya teori.

**Catatan lingkungan:**

- Materi video memakai MySQL/MariaDB + phpMyAdmin untuk memeriksa tabel. Proyek uji di sini memakai **SQLite** (bawaan Laravel 11), jadi pemeriksaannya lewat `php artisan tinker`. Perintah MySQL-nya sudah disiapkan sebagai komentar di `periksa-tabel.sh`.
- `--no-security-blocking` diperlukan karena Composer menolak `laravel/framework` 11.31+ karena advisory keamanan. Untuk belajar ini aman, tapi untuk produksi pilih versi yang sudah ditambal.
- **Keamanan:** sesuai catatan di atas, dashboard Telescope menampilkan informasi internal aplikasi. Pada proyek uji aksesnya dibuka karena hanya di localhost; jangan begini di produksi.
