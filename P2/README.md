# Pertemuan 2 

Mengenal Tag, Elemen dan Atribut dalam HTML

## File Latihan

| File | Materi |
|---|---|
| [01-struktur-dasar.html](01-struktur-dasar.html) | Struktur dasar dokumen HTML5 |
| [02-tag-pembuka-penutup.html](02-tag-pembuka-penutup.html) | Tag pembuka & penutup (h1, p, div) |
| [03-nesting.html](03-nesting.html) | Nesting elemen (`strong` di dalam `p`) |
| [04-id-class.html](04-id-class.html) | Atribut `id` & `class` + demo CSS |
| [05-tautan.html](05-tautan.html) | Atribut tautan: `href`, `target` |
| [06-gambar.html](06-gambar.html) | Atribut gambar: `src`, `alt`, `width`, `height`, `title` |
| [07-atribut-global-komentar.html](07-atribut-global-komentar.html) | Atribut global (`id`, `class`, `title`, `style`, `hidden`) & komentar |
| [08-latihan-gabungan.html](08-latihan-gabungan.html) | Latihan gabungan: halaman profil |

> Catatan: `06-gambar.html` dan `08-latihan-gabungan.html` memakai `../P1/gambar.png` (poster sosialisasi akademik di folder P1).

## Materi Video Referensi

- [HTML Dasar: Tag](https://www.youtube.com/watch?v=cUWBYzA6M-8) oleh
  [@sandhikagalihWPU](https://www.youtube.com/@sandhikagalihWPU)
  * [Slide](https://www.slideshare.net/slideshow/html-dasar-4-tags/52740998)

## Tujuan Pembelajaran

Setelah mempelajari materi ini, diharapkan mampu:

- Memahami perbedaan tag, element, dan attribute dalam HTML.
- Memahami cara menulis tag pembuka dan penutup.
- Menggunakan atribut untuk memberikan informasi tambahan pada elemen.
- Memahami penggunaan `id` dan `class`.
- Menggunakan tautan, gambar, dan atribut umum HTML.
- Menyusun elemen HTML dengan struktur yang benar.

## Pengertian Tag, Element, dan Attribute

Ketiganya merupakan konsep dasar dalam penulisan HTML, tetapi memiliki fungsi yang berbeda.

### Tag

**Tag** adalah penanda yang ditulis menggunakan tanda kurung sudut (`<` dan `>`) untuk mendefinisikan elemen HTML.

Contoh:

```html
<p>
</p>
```

- `<p>` merupakan tag pembuka.
- `</p>` merupakan tag penutup.

### Element

**Element** adalah keseluruhan bagian HTML yang terdiri dari tag pembuka, konten, dan tag penutup, jika elemen tersebut menggunakan pasangan tag.

Contoh:

```html
<p>Saya sedang belajar HTML.</p>
```

Pada contoh tersebut, satu elemen terdiri atas:

- Tag pembuka: `<p>`
- Konten: `Saya sedang belajar HTML.`
- Tag penutup: `</p>`

Tidak semua elemen HTML menggunakan tag penutup. Contohnya, elemen gambar ditulis menggunakan `<img>`.

### Attribute

**Attribute** adalah informasi tambahan yang ditulis pada tag pembuka untuk mengatur atau menjelaskan karakteristik elemen.

Contoh:

```html
<a href="https://example.com">Buka situs</a>
```

Penjelasannya:

- `<a>` merupakan tag pembuka.
- `href` merupakan atribut.
- `https://example.com` merupakan nilai atribut.
- `Buka situs` merupakan teks tautan.

### Perbedaan secara ringkas

| Konsep | Fungsi | Contoh |
|---|---|---|
| Tag | Penanda elemen | `<p>` |
| Element | Keseluruhan struktur elemen | `<p>Halo</p>` |
| Attribute | Informasi tambahan | `href="https://example.com"` |

## Struktur Dasar Dokumen HTML

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Belajar Tag HTML</title>
</head>
<body>
    <h1>Belajar HTML</h1>
    <p>Ini adalah contoh elemen paragraf.</p>
</body>
</html>
```

Penjelasan:

- `<!DOCTYPE html>` menyatakan bahwa dokumen menggunakan HTML5.
- `<html>` merupakan elemen utama dokumen.
- `<head>` berisi informasi mengenai dokumen.
- `<title>` menentukan judul pada tab browser.
- `<body>` berisi konten yang ditampilkan kepada pengguna.

## Tag Pembuka dan Penutup

Sebagian besar elemen HTML memiliki tag pembuka dan penutup.

Contoh:

```html
<h1>Judul Halaman</h1>
<p>Ini adalah paragraf.</p>
<div>Ini adalah sebuah bagian.</div>
```

Tag penutup ditandai dengan garis miring (`/`) sebelum nama tag.

Contoh yang salah:

```html
<p>Ini adalah paragraf.
<div>Bagian lain</div>
```

Contoh yang benar:

```html
<p>Ini adalah paragraf.</p>
<div>Bagian lain</div>
```

Menutup elemen dengan benar membantu menjaga struktur dokumen tetap jelas dan menghindari hasil tampilan yang tidak diharapkan.

## Nesting atau Penempatan Elemen

Nesting adalah penempatan satu elemen HTML di dalam elemen lainnya.

Contoh yang benar:

```html
<p>
    Saya sedang belajar
    <strong>pemrograman web</strong>.
</p>
```

Elemen `strong` berada di dalam elemen `p`.

Jika elemen saling bersarang, urutan penutupannya harus benar.

Contoh:

```html
<p>
    Ini adalah <strong>teks penting</strong>.
</p>
```

Hindari susunan tag yang saling tumpang tindih dan tidak mengikuti urutan pembukaannya.

## Atribut `id` dan `class`

Atribut `id` dan `class` digunakan untuk memberikan identitas atau pengelompokan pada elemen HTML. Keduanya sering digunakan bersama CSS dan JavaScript.

### Atribut `id`

`id` memberikan identitas kepada satu elemen dalam dokumen. Nilainya harus unik dalam satu halaman.

```html
<h1 id="judul-utama">Belajar HTML</h1>
<p id="paragraf-pembuka">Selamat datang.</p>
```

### Atribut `class`

`class` digunakan untuk mengelompokkan elemen yang memiliki karakteristik atau tujuan serupa. Beberapa elemen dapat menggunakan class yang sama.

```html
<p class="informasi">Informasi pertama.</p>
<p class="informasi">Informasi kedua.</p>
<p class="peringatan">Perhatikan bagian ini.</p>
```

### Perbedaan `id` dan `class`

| Atribut | Kegunaan | Contoh |
|---|---|---|
| `id` | Identitas unik suatu elemen | `id="judul"` |
| `class` | Mengelompokkan elemen | `class="informasi"` |

Contoh penggunaan bersama CSS:

```html
<style>
    #judul {
        color: blue;
    }

    .informasi {
        font-size: 18px;
    }
</style>

<h1 id="judul">Belajar HTML</h1>
<p class="informasi">Paragraf pertama.</p>
<p class="informasi">Paragraf kedua.</p>
```

Pada contoh ini, `id="judul"` digunakan untuk memilih judul tertentu, sedangkan `.informasi` digunakan untuk memilih semua elemen dengan class tersebut.

Catatan: Contoh CSS ini merupakan pengayaan untuk memahami kegunaan `id` dan `class`, bukan pembahasan utama CSS.

## Atribut pada Tautan

Tag `<a>` digunakan untuk membuat tautan atau hyperlink.

Contoh:

```html
<a href="https://example.com">Kunjungi situs</a>
```

Atribut `href` menentukan tujuan tautan.

Tautan juga dapat diarahkan ke halaman lain:

```html
<a href="halaman2.html">Buka Halaman 2</a>
```

Atribut `target` dapat digunakan untuk menentukan tempat tautan dibuka.

```html
<a href="https://example.com" target="_blank">
    Buka di tab baru
</a>
```

`target="_blank"` biasanya membuka tautan di tab baru.

## Atribut pada Gambar

Tag `<img>` digunakan untuk menampilkan gambar.

```html
<img src="gambar.jpg" alt="Pemandangan alam" width="300">
```

Atribut yang digunakan:

| Atribut | Kegunaan |
|---|---|
| `src` | Menentukan sumber atau lokasi gambar. |
| `alt` | Memberikan teks alternatif untuk gambar. |
| `width` | Menentukan lebar gambar. |
| `height` | Menentukan tinggi gambar. |
| `title` | Memberikan informasi tambahan yang biasanya muncul saat pointer diarahkan ke elemen. |

Contoh:

```html
<img
    src="gambar.jpg"
    alt="Pemandangan pegunungan"
    width="300"
    height="200"
    title="Pemandangan alam"
>
```

Pastikan lokasi gambar pada `src` sesuai dengan tempat file gambar disimpan.

## Atribut Global HTML

Atribut global adalah atribut yang dapat digunakan pada berbagai elemen HTML, sesuai dengan fungsi dan aturan masing-masing atribut.

Contoh atribut global:

| Atribut | Fungsi |
|---|---|
| `id` | Memberikan identitas unik. |
| `class` | Mengelompokkan elemen. |
| `title` | Memberikan informasi tambahan. |
| `style` | Menuliskan aturan CSS langsung pada elemen. |
| `hidden` | Menandai elemen agar tidak ditampilkan. |

Contoh:

```html
<p id="pesan" class="informasi" title="Pesan pembuka">
    Selamat belajar HTML.
</p>
```

Atribut dapat digunakan bersamaan dalam satu elemen.

## Komentar HTML

Komentar digunakan untuk menambahkan catatan pada kode. Komentar tidak ditampilkan sebagai konten biasa pada halaman web.

Sintaks:

```html
<!-- Ini adalah komentar HTML -->

<p>Konten halaman web.</p>
```

Komentar berguna untuk menjelaskan bagian kode atau menandai bagian tertentu ketika mengembangkan halaman web.

Perlu diingat bahwa komentar HTML dapat dilihat melalui sumber halaman, sehingga tidak boleh digunakan untuk menyimpan informasi rahasia.

## Contoh Latihan Gabungan

Contoh berikut menggabungkan tag, element, attribute, tautan, gambar, `id`, `class`, dan komentar.

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Pertemuan 2</title>
</head>
<body>
    <!-- Judul utama halaman -->
    <h1 id="judul-utama">Profil Mahasiswa</h1>

    <p class="informasi">
        Nama: Andi
    </p>

    <p class="informasi">
        Program Studi: Sistem Informasi
    </p>

    <!-- Contoh gambar -->
    <img
        src="gambar.jpg"
        alt="Ilustrasi mahasiswa"
        width="200"
        title="Ilustrasi mahasiswa"
    >

    <!-- Contoh tautan -->
    <p>
        <a href="https://example.com" target="_blank">
            Kunjungi situs contoh
        </a>
    </p>

    <!-- Contoh elemen div -->
    <div id="penutup">
        <p>Terima kasih telah mengunjungi halaman ini.</p>
    </div>
</body>
</html>
```

Simpan kode sebagai `index.html`, lalu buka melalui browser. Ganti `gambar.jpg` sesuai nama dan lokasi file gambar yang tersedia.

## Kesalahan yang Perlu Dihindari

1. Salah menulis nama tag atau atribut.
2. Lupa menutup tag yang memerlukan tag penutup.
3. Menempatkan elemen secara tidak benar atau saling tumpang tindih.
4. Menggunakan `id` yang sama untuk beberapa elemen dalam satu halaman.
5. Salah menulis nilai atribut, seperti lokasi file pada `src`.
6. Menganggap `id` dan `class` memiliki fungsi yang sama.
7. Menyimpan informasi rahasia di dalam komentar HTML.

## Ringkasan

- **Tag** merupakan penanda elemen HTML.
- **Element** merupakan keseluruhan struktur elemen, termasuk konten jika ada.
- **Attribute** memberikan informasi tambahan pada elemen.
- Tag pembuka dan penutup harus ditulis dengan benar.
- Nesting menentukan hubungan antar-elemen.
- `id` memberikan identitas unik, sedangkan `class` mengelompokkan elemen.
- `href` menentukan tujuan tautan.
- `src` menentukan sumber gambar.
- `alt` memberikan teks alternatif pada gambar.
- Komentar HTML ditulis menggunakan `<!-- ... -->`.
- Atribut global dapat digunakan pada berbagai elemen sesuai aturan HTML.

## Checklist Belajar Mandiri

- [ ] Dapat membedakan tag, element, dan attribute.
- [ ] Dapat menulis tag pembuka dan penutup dengan benar.
- [ ] Dapat membuat elemen yang saling bersarang.
- [ ] Dapat menjelaskan perbedaan `id` dan `class`.
- [ ] Dapat membuat tautan menggunakan `a` dan `href`.
- [ ] Dapat menampilkan gambar menggunakan `img`.
- [ ] Dapat menggunakan atribut `alt`, `title`, `width`, dan `height`.
- [ ] Dapat menulis komentar HTML.
- [ ] Dapat membuat halaman profil sederhana secara mandiri.

