# Pertemuan 3

Pengenalan CSS Dasar

## Tujuan Pembelajaran

Setelah mempelajari materi ini, diharapkan mampu:

- Memahami pengertian dan fungsi CSS.
- Memahami hubungan HTML dan CSS.
- Mengenali tiga cara menerapkan CSS pada HTML.
- Memahami penggunaan selector, property, dan value.
- Mengatur tampilan halaman web menggunakan CSS.
- Memahami manfaat penggunaan satu file CSS untuk beberapa halaman HTML.
- Mengenali penggunaan efek interaktif sederhana seperti `hover`.

## Pengertian CSS

**CSS (Cascading Style Sheets)** adalah bahasa stylesheet yang digunakan untuk mengatur tampilan halaman web.

Jika HTML digunakan untuk menyusun struktur dan konten, CSS digunakan untuk mengatur bagaimana konten tersebut ditampilkan.

Contohnya, HTML menentukan bahwa sebuah halaman memiliki judul, paragraf, dan menu navigasi. CSS dapat mengatur warna judul, ukuran teks, jarak antarelemen, warna latar belakang, serta tampilan menu.

### Hubungan HTML dan CSS

| Teknologi | Fungsi |
|---|---|
| HTML | Menyusun struktur dan konten halaman web. |
| CSS | Mengatur tampilan dan tata letak halaman web. |

Contoh HTML:

```html
<h1>Selamat Datang</h1>
<p>Saya sedang belajar pemrograman web.</p>
```

Tanpa aturan CSS tambahan, browser tetap menampilkan kedua elemen tersebut menggunakan gaya bawaan browser.

Dengan CSS, tampilannya dapat diubah sesuai kebutuhan.

## Manfaat CSS

Berdasarkan materi pengenalan CSS, beberapa manfaat utama CSS adalah:

1. **Mengatur tampilan halaman web**, seperti warna, ukuran teks, dan latar belakang.
2. **Memisahkan struktur dan tampilan**, sehingga kode HTML lebih berfokus pada konten.
3. **Memudahkan pemeliharaan desain**, karena perubahan tampilan dapat dilakukan melalui CSS.
4. **Menggunakan satu stylesheet untuk beberapa halaman**, sehingga desain situs lebih konsisten.
5. **Membuat efek interaktif sederhana**, misalnya perubahan warna menu ketika pointer diarahkan ke atasnya.

## Struktur Dasar CSS

Aturan CSS umumnya terdiri dari selector, property, dan value.

```css
h1 {
    color: blue;
    font-size: 32px;
}
```

Penjelasan:

| Bagian | Contoh | Fungsi |
|---|---|---|
| Selector | `h1` | Memilih elemen HTML yang akan diberi gaya. |
| Property | `color` | Menentukan aspek tampilan yang diatur. |
| Value | `blue` | Menentukan nilai untuk property. |
| Declaration | `color: blue;` | Pasangan property dan value. |

Tanda `{` dan `}` membatasi sekumpulan deklarasi CSS. Setiap deklarasi umumnya diakhiri dengan tanda titik koma (`;`).

## Tiga Cara Menggunakan CSS

Ada tiga cara umum menerapkan CSS pada dokumen HTML: inline CSS, internal CSS, dan external CSS.

### Inline CSS

Inline CSS ditulis langsung pada elemen HTML melalui atribut `style`.

Contoh:

```html
<h1 style="color: blue;">Belajar CSS</h1>

<p style="font-size: 18px;">
    Ini adalah paragraf dengan ukuran teks 18 piksel.
</p>
```

**Kelebihan:**
- Praktis untuk mengatur satu elemen secara langsung.
- Tidak memerlukan deklarasi stylesheet terpisah.

**Kekurangan:**
- Sulit dikelola jika digunakan secara berlebihan.
- Gaya yang sama harus ditulis berulang kali jika diterapkan pada banyak elemen.

### Internal CSS

Internal CSS ditulis di dalam tag `<style>`, biasanya pada bagian `<head>` dokumen HTML.

Contoh:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Internal CSS</title>

    <style>
        h1 {
            color: green;
        }

        p {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1>Belajar CSS</h1>
    <p>CSS mengatur tampilan halaman web.</p>
</body>
</html>
```

**Kelebihan:**
- Aturan CSS berada dalam satu bagian dokumen HTML.
- Cocok untuk latihan atau halaman sederhana.

**Kekurangan:**
- Jika banyak halaman menggunakan gaya yang sama, aturan CSS dapat terduplikasi.

### External CSS

External CSS ditulis dalam file terpisah dengan ekstensi `.css`, kemudian dihubungkan ke HTML menggunakan tag `<link>`.

Contoh struktur folder:

```text
praktikum_web/
├── index.html
└── style.css
```

Isi `index.html`:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>External CSS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Belajar External CSS</h1>
    <p>Tampilan halaman diatur oleh file CSS terpisah.</p>
</body>
</html>
```

Isi `style.css`:

```css
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

h1 {
    color: darkblue;
}

p {
    font-size: 18px;
}
```

**Kelebihan:**
- HTML dan CSS terpisah sehingga lebih mudah dikelola.
- Satu file CSS dapat digunakan oleh beberapa halaman HTML.
- Perubahan desain dapat diterapkan ke semua halaman yang menggunakan stylesheet tersebut.

**Kekurangan:**
- File CSS harus berada pada lokasi yang benar dan berhasil dimuat oleh browser.

## Perbandingan Inline, Internal, dan External CSS

| Aspek | Inline | Internal | External |
|---|---|---|---|
| Lokasi | Atribut `style` | Tag `<style>` | File `.css` terpisah |
| Cakupan umum | Elemen tertentu | Satu dokumen HTML | Dapat digunakan beberapa halaman |
| Pemeliharaan | Kurang praktis untuk banyak elemen | Cukup praktis untuk halaman sederhana | Lebih praktis untuk situs dengan banyak halaman |
| Pemisahan HTML dan CSS | Tidak | Tidak sepenuhnya | Ya |
| Contoh | `style="color: red"` | `<style>...</style>` | `<link rel="stylesheet" href="style.css">` |

Ketiganya dapat digunakan dalam satu proyek, tetapi pemilihan metode sebaiknya mempertimbangkan kemudahan pemeliharaan dan kebutuhan halaman.

## Selector CSS

Selector menentukan elemen HTML mana yang akan diberi gaya.

### Element selector

Memilih elemen berdasarkan nama tag.

```css
p {
    color: gray;
}
```

Aturan tersebut berlaku untuk semua elemen `<p>` yang sesuai dengan cakupan aturan CSS tersebut.

### Class selector

Memilih elemen berdasarkan atribut `class`. Selector class diawali dengan tanda titik (`.`).

HTML:

```html
<p class="informasi">Informasi pertama.</p>
<p class="informasi">Informasi kedua.</p>
```

CSS:

```css
.informasi {
    color: green;
}
```

Kedua paragraf menggunakan class yang sama sehingga dapat menerima aturan yang sama.

### ID selector

Memilih elemen berdasarkan atribut `id`. Selector ID diawali dengan tanda pagar (`#`).

HTML:

```html
<h1 id="judul-utama">Belajar CSS</h1>
```

CSS:

```css
#judul-utama {
    color: navy;
}
```

Secara konvensi, `id` digunakan untuk identitas unik suatu elemen dalam halaman, sedangkan `class` dapat digunakan bersama oleh beberapa elemen.

## Property CSS yang Sering Digunakan

| Property | Fungsi | Contoh |
|---|---|---|
| `color` | Mengatur warna teks. | `color: blue;` |
| `background-color` | Mengatur warna latar belakang. | `background-color: lightgray;` |
| `font-size` | Mengatur ukuran teks. | `font-size: 18px;` |
| `font-family` | Mengatur jenis huruf. | `font-family: Arial, sans-serif;` |
| `text-align` | Mengatur perataan teks. | `text-align: center;` |
| `margin` | Mengatur jarak di luar elemen. | `margin: 20px;` |
| `padding` | Mengatur jarak di dalam elemen. | `padding: 15px;` |
| `border` | Mengatur garis tepi elemen. | `border: 1px solid black;` |

Contoh:

```css
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

h1 {
    color: darkblue;
    text-align: center;
}

p {
    font-size: 16px;
    margin: 10px;
}
```

Property tersebut dapat digabungkan dalam satu aturan CSS untuk mengatur beberapa aspek tampilan sekaligus.

## Efek Hover pada Menu

Dalam materi pengenalan CSS, salah satu contoh penerapan CSS adalah membuat menu berubah tampilan ketika pointer diarahkan ke atasnya.

Efek tersebut dapat dibuat menggunakan pseudo-class `:hover`.

Contoh HTML:

```html
<nav>
    <a href="#beranda">Beranda</a>
    <a href="#profil">Profil</a>
    <a href="#kontak">Kontak</a>
</nav>
```

Contoh CSS:

```css
nav a {
    display: inline-block;
    padding: 10px 15px;
    color: white;
    background-color: #333;
    text-decoration: none;
}

nav a:hover {
    background-color: #007bff;
}
```

Penjelasan:

- `nav a` memilih elemen tautan di dalam elemen navigasi.
- `display: inline-block` memungkinkan tautan memiliki ukuran dan padding.
- `text-decoration: none` menghilangkan garis bawah tautan.
- `nav a:hover` menerapkan gaya ketika pointer berada di atas tautan.

Efek ini membuat menu lebih interaktif tanpa harus menggunakan JavaScript.

## 10. Menggunakan Satu CSS untuk Beberapa Halaman

Salah satu kelebihan external CSS adalah satu file stylesheet dapat digunakan oleh beberapa dokumen HTML.

Contoh struktur folder:

```text
website/
├── index.html
├── profil.html
├── kontak.html
└── style.css
```

Ketiga file HTML dapat menggunakan stylesheet yang sama.

Pada bagian `<head>` masing-masing halaman, tuliskan:

```html
<link rel="stylesheet" href="style.css">
```

Dengan demikian, ketika aturan dalam `style.css` diubah, tampilan halaman yang menggunakan file tersebut dapat ikut berubah.

Hal ini memudahkan pengelolaan desain agar lebih konsisten.

## 11. Contoh Praktik Gabungan

Contoh berikut menggabungkan HTML, internal CSS, external CSS, dan inline CSS.

Struktur folder:

```text
praktikum_web/
├── index.html
└── style-ku.css
```

Isi `index.html`:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktik CSS Dasar</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="style-ku.css">

    <!-- Internal CSS -->
    <style>
        .internal-box {
            background-color: #e8f4ff;
            padding: 15px;
            border: 1px solid #7ab8e8;
        }
    </style>
</head>
<body>
    <h1 style="color: darkblue;">Pengenalan CSS</h1>

    <p>
        Halaman ini menunjukkan tiga cara menerapkan CSS.
    </p>

    <div class="internal-box">
        Bagian ini menggunakan internal CSS.
    </div>

    <div class="external-box">
        Bagian ini menggunakan external CSS.
    </div>

    <p style="font-weight: bold;">
        Paragraf ini menggunakan inline CSS.
    </p>
</body>
</html>
```

Isi `style-ku.css`:

```css
body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 20px;
}

h1 {
    text-align: center;
}

p {
    color: #444;
}

.external-box {
    background-color: #e8f8e8;
    padding: 15px;
    margin-top: 15px;
    border: 1px solid #82c782;
}
```

### Cara menjalankan

1. Buat folder `praktikum_web`.
2. Simpan kode HTML sebagai `index.html`.
3. Simpan CSS eksternal sebagai `style-ku.css` di folder yang sama.
4. Buka `index.html` menggunakan browser.
5. Amati perbedaan gaya pada judul, paragraf, kotak internal, dan kotak eksternal.
6. Ubah beberapa nilai CSS dan amati perubahan yang terjadi.

Untuk praktik CSS dasar ini, XAMPP tidak diperlukan karena halaman masih berupa HTML statis.

## Catatan Penting tentang Cascading

CSS memiliki mekanisme *cascade*, yaitu proses browser menentukan aturan mana yang berlaku ketika beberapa aturan dapat diterapkan pada elemen yang sama.

Hasil akhirnya dapat dipengaruhi oleh asal aturan, prioritas, specificity selector, dan urutan deklarasi, serta penggunaan `!important`.

Karena itu, jika dua aturan mengatur property yang sama pada elemen yang sama, aturan yang berlaku tidak selalu sekadar aturan yang ditulis paling akhir. Prioritas dan specificity juga perlu diperhatikan.

Contoh:

```css
p {
    color: blue;
}

.informasi {
    color: green;
}
```

Jika sebuah paragraf menggunakan `class="informasi"`, aturan class umumnya lebih spesifik daripada selector elemen sehingga warna teksnya menjadi hijau, dengan asumsi tidak ada aturan lain yang mengubah hasilnya.

## Ringkasan

1. CSS merupakan bahasa stylesheet untuk mengatur tampilan halaman web.
2. HTML mengatur struktur dan konten, sedangkan CSS mengatur presentasi.
3. CSS dapat diterapkan melalui inline, internal, dan external CSS.
4. Selector menentukan elemen yang akan diberi gaya.
5. Property dan value menentukan aspek tampilan beserta nilainya.
6. `id` dan `class` dapat digunakan untuk memilih elemen secara lebih terarah.
7. Pseudo-class `:hover` memungkinkan perubahan tampilan ketika pointer diarahkan ke elemen.
8. External CSS dapat digunakan bersama oleh beberapa halaman HTML.
9. CSS membantu memisahkan struktur dan tampilan sehingga desain lebih mudah dikelola.
10. Mekanisme cascade dan specificity memengaruhi aturan CSS yang akhirnya diterapkan browser.

## Checklist Belajar Mandiri

- [ ] Memahami fungsi CSS dan hubungannya dengan HTML.
- [ ] Dapat menjelaskan perbedaan inline, internal, dan external CSS.
- [ ] Dapat menulis selector, property, dan value.
- [ ] Dapat menggunakan element selector.
- [ ] Dapat menggunakan class selector dan ID selector.
- [ ] Dapat mengatur warna, ukuran teks, margin, padding, dan border.
- [ ] Dapat membuat efek `hover` pada tautan.
- [ ] Dapat menghubungkan file CSS eksternal dengan HTML.
- [ ] Dapat menggunakan satu file CSS untuk beberapa halaman HTML.
- [ ] Dapat mengubah kode contoh dan mengamati hasilnya di browser.

## 15. Batasan Materi

Catatan ini berfokus pada pengenalan CSS dasar. Pembahasan seperti Flexbox, Grid, responsive design, animasi, dan framework CSS tidak dijelaskan secara mendalam karena bukan fokus utama materi pengenalan yang dibahas.
