# Pertemuan 8

Ujian Akhir Semester

## Tugas

- Hosting website
- Pastikan semua fungsi aktif dan berjalan normal

## Dikumpulkan 

- Link URL web
- Screen capture (coding, program)
- Flowchart program

---

## Yang Sudah Dikerjakan Selama Belajar

Berkas UAS ini dilengkapi setelah konsultasi dengan dosen pengampu: tidak ada
tugas hosting di LMS untuk mata kuliah ini, sehingga yang dikumpulkan adalah
**riwayat pekerjaan selama belajar**, bukan aplikasi yang di-host.

### Repositori

Seluruh materi dan kode ada di repositori GitHub:
**https://github.com/unsia-mhs-0075/SIA01-PemrogramanWeb-learning**

### Progres per Pertemuan

| Pertemuan | Materi | Hasil Kerja |
|---|---|---|
| P1 | Pengenalan Web | 7 file HTML latihan |
| P2 | Tag, Elemen, Atribut HTML | 8 file HTML latihan |
| P3 | CSS Dasar | 6 file HTML + 5 file CSS |
| P4 | Struktur Dasar PHP | 22 file PHP, dijalankan & keluarannya dicocokkan |
| P5 | CodeIgniter 3 + Bootstrap 4 | Project MVC utuh, **terbukti berjalan** |
| P6 | Laravel 11 | Route + Controller + Blade, **terbukti berjalan** |
| P7 | Laravel Telescope | Dipasang & dijalankan sungguhan, 26 entri terekam |
| P8 | UAS | Dokumen ini |

### Aplikasi yang Dipakai sebagai Contoh Program

Aplikasi **Daftar Mahasiswa** pada P5 dipilih sebagai contoh program utama
karena merupakan satu-satunya aplikasi utuh yang terbukti berjalan dari awal
sampai akhir (browser → controller → model → database → tampil).

Struktur MVC-nya:

```
P5/ci-app/
├── index.php                          ← titik masuk framework
└── application/
    ├── config/routes.php              ← routing
    ├── controllers/Mahasiswa.php      ← controller
    ├── models/Mahasiswa_model.php     ← model (Query Builder)
    ├── views/
    │   ├── templates/header.php       ← template Bootstrap
    │   ├── mahasiswa/index.php        ← tabel data
    │   └── templates/footer.php
    └── db/
        ├── db_mahasiswa.sqlite        ← database (SQLite)
        └── buat_tabel.sql             ← versi MySQL
```

### Flowchart Program

Alur lengkap request sampai data tampil ada di
**[FLOWCHART.md](FLOWCHART.md)** — diagram MVC beserta penjelasan tiap langkah.

### Screenshot Program

Semua screenshot diambil dari aplikasi yang benar-benar dijalankan
(`php -S localhost`), bukan gambar contoh.

| Berkas | Isi |
|---|---|
| [screenshot/01-home.png](screenshot/01-home.png) | Halaman utama — jumbotron Bootstrap, navbar, data dikirim controller ke view |
| [screenshot/02-mahasiswa.png](screenshot/02-mahasiswa.png) | Halaman Daftar Mahasiswa — tabel Bootstrap `table-striped` berisi 4 data dari SQLite |
| [screenshot/03-kode-controller.png](screenshot/03-kode-controller.png) | Kode `Mahasiswa.php` — controller memuat model dan mengirim data ke view |
| [screenshot/04-kode-model.png](screenshot/04-kode-model.png) | Kode `Mahasiswa_model.php` — Query Builder `getAllMahasiswa()` |
| [screenshot/05-kode-view.png](screenshot/05-kode-view.png) | Kode `mahasiswa/index.php` — view merender tabel |

### Cara Menjalankan

```bash
cd P5/ci-app
php -S localhost:8000
# http://localhost:8000/              → halaman utama
# http://localhost:8000/index.php/mahasiswa → daftar mahasiswa
```

### Catatan

- Screenshot halaman diambil pada 15 Oktober 2026 dari aplikasi yang berjalan
  di localhost; data yang tampil adalah data contoh pada database SQLite.
- Kode pada screenshot diambil langsung dari berkas di repositori ini.
- Aplikasi P6 (Laravel 11) dan P7 (Telescope) juga pernah dijalankan dan
  dibuktikan bekerja; dokumentasi pengujiannya ada di README masing-masing
  pertemuan.
