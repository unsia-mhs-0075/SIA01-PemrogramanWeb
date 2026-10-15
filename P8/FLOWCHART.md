# Flowchart Program — Aplikasi Daftar Mahasiswa (P5)

Aplikasi: CodeIgniter 3 + Bootstrap 4 + SQLite
Alur di bawah menggambarkan jalannya satu request ke halaman daftar mahasiswa,
dari browser sampai data tampil di layar.

## Diagram Alur (MVC)

```
                    ┌─────────────────────┐
                    │      BROWSER        │
                    │  buka URL:          │
                    │  /index.php/mahasiswa│
                    └──────────┬──────────┘
                               │ 1. HTTP GET
                               v
                    ┌─────────────────────┐
                    │   index.php         │
                    │   (titik masuk      │
                    │    CodeIgniter)     │
                    └──────────┬──────────┘
                               │ 2. bootstrap framework
                               v
                    ┌─────────────────────┐
                    │  routes/config      │
                    │  routes.php         │
                    │  → default: home    │
                    │  → /mahasiswa →     │
                    │    Mahasiswa@index  │
                    └──────────┬──────────┘
                               │ 3. arahkan ke controller
                               v
        ┌──────────────────────────────────────────────┐
        │            CONTROLLER                        │
        │      Mahasiswa.php :: index()                │
        │                                              │
        │  $this->load->model('Mahasiswa_model');      │
        │  $data['mahasiswa'] =                        │
        │      ->getAllMahasiswa();                    │
        └──────────┬────────────────────┬─────────────┘
                   │ 4. panggil model   │ 7. kirim $data ke view
                   v                    v
    ┌──────────────────────┐   ┌──────────────────────────┐
    │       MODEL          │   │          VIEW            │
    │  Mahasiswa_model.php │   │  templates/header.php    │
    │                      │   │  mahasiswa/index.php     │
    │  getAllMahasiswa()   │   │  templates/footer.php    │
    │  → Query Builder     │   │                          │
    │    ->get()           │   │  foreach ($mahasiswa)    │
    └──────────┬───────────┘   │    → tampilkan baris     │
               │ 5. query SQL  └──────────┬───────────────┘
               v                         │ 8. render HTML
    ┌──────────────────────┐             │
    │      DATABASE        │             │
    │  db_mahasiswa.sqlite │             │
    │  tabel: mahasiswa    │             │
    │  (id, nama, nrp,     │             │
    │   email, jurusan)    │             │
    └──────────┬───────────┘             │
               │ 6. hasil baris data     │
               └─────────────────────────┘
                               │
                               v
                    ┌─────────────────────┐
                    │      BROWSER        │
                    │  halaman HTML +     │
                    │  Bootstrap tampil   │
                    └─────────────────────┘
```

## Penjelasan Tiap Langkah

| # | Komponen | Berkas | Tindakan |
|---|---|---|---|
| 1 | Browser | — | Mengirim HTTP GET ke `/index.php/mahasiswa` |
| 2 | Entry point | `index.php` | Memuat dan menjalankan framework CodeIgniter |
| 3 | Routing | `application/config/routes.php` | Mencocokkan URI ke `Mahasiswa@index` |
| 4 | Controller | `application/controllers/Mahasiswa.php` | Memuat model, memanggil `getAllMahasiswa()` |
| 5 | Model | `application/models/Mahasiswa_model.php` | Menjalankan query lewat Query Builder |
| 6 | Database | `application/db/db_mahasiswa.sqlite` | Mengembalikan baris data mahasiswa |
| 7 | Controller | `Mahasiswa.php` | Mengirim `$data['mahasiswa']` ke view |
| 8 | View | `resources` → `application/views/` | Merender HTML + Bootstrap, menampilkan tabel |

## Hubungan Antar Komponen (MVC)

```
        permintaan ──▶ CONTROLLER ──▶ MODEL ──▶ DATABASE
                          │                         │
                          │                         │
                          └──────── VIEW ◀───────────┘
                                        │
                                   respons HTML
                                        │
                                     BROWSER
```

Controller menjadi penghubung: ia meminta data ke Model, lalu menyerahkan
data tersebut ke View untuk ditampilkan. Model tidak pernah berbicara
langsung dengan View, dan View tidak mengambil data sendiri dari database.
