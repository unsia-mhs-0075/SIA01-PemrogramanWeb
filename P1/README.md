# Pertemuan 1

## File Latihan

| File | Materi |
|---|---|
| [01-struktur-dasar.html](01-struktur-dasar.html) | Struktur dasar dokumen HTML5 |
| [02-heading-paragraf.html](02-heading-paragraf.html) | Heading (h1–h6) dan paragraf |
| [03-format-teks.html](03-format-teks.html) | Pemformatan teks: `strong`, `i`, `hr` |
| [04-daftar.html](04-daftar.html) | Daftar berurutan (`ol`) dan tidak berurutan (`ul`) |
| [05-gambar.html](05-gambar.html) | Menampilkan gambar dengan `img` |
| [06-tabel.html](06-tabel.html) | Tabel sederhana |
| [07-latihan-gabungan.html](07-latihan-gabungan.html) | Latihan gabungan: halaman profil lengkap |

> Catatan: `05-gambar.html` dan `07-latihan-gabungan.html` menampilkan `gambar.png` (poster sosialisasi akademik Prodi SI UNSIA) yang tersimpan di folder ini.

## Catatan Dosen

```
Dear All

Selamat Pagi

Berikut Terlampir materi pertemuan 1: Pengenalan Web
point yang akan di pahami
1. Software yang digunakan
   - Xampp
   - Visual Studio Code
2. Perwakilan Dari Salah satu MHS membuat forum/ Grub di telegram untuk mempermudah proses belajar dan diskusi dengan
   kelas Pengampu saya 
3. Jadwal Vicon Akan di infokan Di Grub Telegram/ Grub Edlink

Happy Code
```

## Kemampuan Akhir yang Diharapkan

Mampu melakukan rancang bangun Aplikasi berbasis Web pada berbagai jenis Project (di berbagai kegiatan/pekerjaan/bisnis)
menggunakan perangkat lunak (_software_) WEB, metode, teknik-teknik, Algoritma/Logika Pemrograman dan alat bantu (Hardware)
tertentu untuk implementasi berikut dokumentasiannya.

## Target Pemrograman Berbasis Web

1. Konsep Pemrograman, instalasi PHP/XAMPP, script PHP & menggabungkan dgn HTML
2. Elemendasar PHP: Variabel Jenis/type, scope & Operator
3. Struktur Kontrol: If…, Else…., Else If…., Do…While
4. Script PHP lanjutan (Mengunakan Framework)
5. Fungsi: Membuat fungsi, fungsi build-in, Manipulasi array dan String & Akses ke database
6. Presentasi tugas Project Pada Pertemuan Setelah UTS
7. Menggunakan MySQL: dasar2 MySQL, Membuat database dan tabel & mengenal fungsi2 MySQL
8. Manipulasi tabel: Perintah SQL serta Klausa Where, Operator Logic menghapus, menambah & mengupdate Record
9. MembuatWebDinamis: dgn CSS, disain web Page dinamis melalui tools form, page login & Administrator.

## Video Referensi

- [Pengantar Pemrograman Web | #1 Pengenalan Dasar Web](https://www.youtube.com/watch?v=73mgBv14zgU) dari
  [@nahlcode](https://www.youtube.com/@nahlcode)
  
## Tujuan Pembelajaran

Memahami dasar HTML dan menggunakannya untuk membuat halaman web sederhana.

Setelah mempelajari materi ini, diharapkan mampu:
- Memahami fungsi HTML dalam halaman web.
- Menyusun struktur dasar dokumen HTML.
- Menggunakan heading dan paragraf.
- Membuat teks dengan format tertentu.
- Membuat daftar berurutan dan tidak berurutan.
- Menampilkan gambar.
- Membuat tabel sederhana.

## Pengertian HTML

**HTML (HyperText Markup Language)** adalah bahasa markup yang digunakan untuk menyusun struktur dan konten halaman web.

HTML digunakan untuk menentukan elemen yang ditampilkan pada halaman, seperti judul, paragraf, daftar, gambar, dan tabel.

HTML bukan bahasa pemrograman untuk menjalankan logika seperti perulangan atau percabangan. Fokus utama HTML adalah menyusun struktur konten halaman web.

## Struktur Dasar HTML

Contoh dokumen HTML sederhana:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Pertama</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <p>Ini adalah halaman web pertama saya.</p>
</body>
</html>
```

### Penjelasan elemen

| Elemen | Fungsi |
|---|---|
| `<!DOCTYPE html>` | Menyatakan bahwa dokumen menggunakan HTML5. |
| `<html lang="id">` | Elemen utama dokumen; `lang="id"` menunjukkan bahasa Indonesia. |
| `<head>` | Berisi informasi tentang dokumen. |
| `<meta charset="UTF-8">` | Menentukan pengodean karakter agar berbagai karakter dapat ditampilkan dengan benar. |
| `<title>` | Menentukan judul halaman pada tab browser. |
| `<body>` | Berisi konten utama yang ditampilkan pada halaman. |

## Heading dan Paragraf

### Heading

Heading digunakan untuk membuat judul atau subjudul. HTML menyediakan enam tingkat heading, dari `<h1>` sampai `<h6>`.

```html
<h1>Judul Utama</h1>
<h2>Subjudul</h2>
<h3>Bagian Materi</h3>
<h4>Subbagian</h4>
<h5>Judul Tingkat Lima</h5>
<h6>Judul Tingkat Enam</h6>
```

Secara umum, `<h1>` digunakan untuk judul utama, sedangkan tingkat berikutnya digunakan untuk bagian yang lebih terperinci.

### Paragraf

Tag `<p>` digunakan untuk membuat paragraf.

```html
<p>HTML digunakan untuk menyusun konten halaman web.</p>
<p>Setiap paragraf berisi satu kelompok informasi.</p>
```

## Pemformatan Teks

Beberapa tag yang dapat digunakan untuk memformat teks:

| Tag | Fungsi |
|---|---|
| `<strong>` | Menandai teks yang penting; biasanya ditampilkan tebal. |
| `<b>` | Menampilkan teks tebal. |
| `<i>` | Menampilkan teks miring. |
| `<em>` | Memberikan penekanan pada teks; biasanya ditampilkan miring. |
| `<hr>` | Membuat garis pemisah tematik. |

Contoh:

```html
<p><strong>Perhatian:</strong> Pelajari HTML secara bertahap.</p>
<p>Kata ini ditampilkan <i>miring</i>.</p>
<hr>
<p>Materi berikutnya dimulai setelah garis pemisah.</p>
```

Catatan: `<strong>` dan `<em>` memiliki makna semantik, sedangkan `<b>` dan `<i>` terutama berkaitan dengan penyajian teks.

## Membuat Daftar

HTML menyediakan daftar berurutan dan daftar tidak berurutan.

### Daftar berurutan — `<ol>`

Digunakan ketika urutan item penting.

```html
<ol>
    <li>Membuka editor kode</li>
    <li>Menulis HTML</li>
    <li>Menyimpan file</li>
    <li>Membuka file di browser</li>
</ol>
```

### Daftar tidak berurutan — `<ul>`

Digunakan ketika urutan item tidak menjadi hal utama.

```html
<ul>
    <li>HTML</li>
    <li>CSS</li>
    <li>PHP</li>
</ul>
```

Tag `<li>` digunakan untuk setiap item dalam daftar.

## Menampilkan Gambar

Tag `<img>` digunakan untuk menampilkan gambar.

```html
<img src="gambar.jpg" alt="Contoh gambar" width="300">
```

| Atribut | Fungsi |
|---|---|
| `src` | Menentukan lokasi atau sumber gambar. |
| `alt` | Memberikan teks alternatif jika gambar tidak dapat ditampilkan dan membantu aksesibilitas. |
| `width` | Menentukan lebar gambar. |
| `height` | Menentukan tinggi gambar. |

Contoh dengan lebar dan tinggi:

```html
<img
    src="gambar.jpg"
    alt="Pemandangan alam"
    width="300"
    height="200"
>
```

Pastikan file gambar tersedia pada lokasi yang sesuai dengan nilai `src`. Jika gambar berada di folder yang sama dengan file HTML, nama file dapat langsung digunakan.

## Membuat Tabel

Tabel digunakan untuk menyajikan data dalam bentuk baris dan kolom.

```html
<table border="1">
    <caption>Data Mahasiswa</caption>
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
    </tr>
    <tr>
        <td>1001</td>
        <td>Andi</td>
        <td>Sistem Informasi</td>
    </tr>
    <tr>
        <td>1002</td>
        <td>Budi</td>
        <td>Sistem Informasi</td>
    </tr>
</table>
```

### Penjelasan tag tabel

| Tag | Fungsi |
|---|---|
| `<table>` | Membuat tabel. |
| `<caption>` | Memberikan judul tabel. |
| `<tr>` | Membuat satu baris tabel. |
| `<th>` | Membuat sel judul kolom. |
| `<td>` | Membuat sel data. |

Atribut `border="1"` digunakan di sini untuk latihan dasar. Untuk pengaturan tampilan tabel yang lebih fleksibel, CSS dapat digunakan pada materi berikutnya.

## Contoh Latihan Gabungan

Contoh berikut menggabungkan struktur HTML, heading, paragraf, format teks, daftar, gambar, dan tabel.

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan HTML Dasar</title>
</head>
<body>
    <h1>Profil Mahasiswa</h1>

    <p>Selamat datang di halaman profil mahasiswa.</p>
    <p><strong>Program Studi:</strong> Sistem Informasi</p>
    <p><i>Belajar pemrograman web dimulai dari HTML.</i></p>

    <hr>

    <h2>Materi yang Dipelajari</h2>
    <ol>
        <li>Struktur HTML</li>
        <li>Heading dan paragraf</li>
        <li>Daftar</li>
        <li>Gambar dan tabel</li>
    </ol>

    <h2>Teknologi Web</h2>
    <ul>
        <li>HTML</li>
        <li>CSS</li>
        <li>PHP</li>
    </ul>

    <h2>Contoh Gambar</h2>
    <img src="gambar.jpg" alt="Contoh gambar" width="200">

    <h2>Data Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
        </tr>
        <tr>
            <td>1001</td>
            <td>Andi</td>
        </tr>
    </table>
</body>
</html>
```

**Catatan:** Ganti `gambar.jpg` dengan nama file gambar yang benar dan letakkan gambar di folder yang sama dengan file HTML.

## 10. Cara Menjalankan HTML

1. Buka editor kode, misalnya Visual Studio Code.
2. Buat file bernama `index.html`.
3. Masukkan kode HTML.
4. Simpan file.
5. Buka file tersebut menggunakan browser.

Untuk latihan HTML statis, XAMPP tidak diperlukan. File HTML dapat dibuka langsung melalui browser.

## Kesalahan yang Perlu Dihindari

- Lupa menutup tag yang memerlukan tag penutup.
- Salah menuliskan nama tag atau atribut.
- Menempatkan elemen secara tidak berurutan.
- Salah menuliskan lokasi file gambar pada `src`.
- Menggunakan `th` untuk seluruh sel data, padahal `td` lebih sesuai untuk data biasa.
- Menganggap HTML bertanggung jawab atas seluruh desain visual halaman; pengaturan tampilan yang lebih lanjut merupakan peran CSS.

## Ringkasan Pertemuan 1

Poin penting Pertemuan 1 adalah:

1. HTML menyusun struktur dan konten halaman web.
2. Dokumen HTML memiliki struktur dasar berupa `html`, `head`, dan `body`.
3. Heading digunakan untuk judul dan subjudul, sedangkan paragraf menggunakan `p`.
4. Pemformatan teks dapat menggunakan `strong`, `b`, `i`, dan `em`.
5. Daftar dibuat menggunakan `ol`, `ul`, dan `li`.
6. Gambar ditampilkan menggunakan `img` dengan atribut seperti `src` dan `alt`.
7. Tabel dibuat menggunakan `table`, `tr`, `th`, dan `td`.
8. File HTML statis dapat langsung dibuka melalui browser.

## Checklist Belajar Mandiri

- [ ] Memahami struktur dasar dokumen HTML.
- [ ] Membuat heading dan paragraf.
- [ ] Memformat teks dengan `strong` dan `i`.
- [ ] Membuat daftar `ol` dan `ul`.
- [ ] Menampilkan gambar dengan `img`.
- [ ] Membuat tabel dengan minimal dua baris data.
- [ ] Menjalankan file HTML di browser.
- [ ] Mencoba membuat satu halaman profil sederhana tanpa menyalin contoh secara utuh.

