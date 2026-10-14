# Pertemuan 4

Struktur Dasar PHP

## Tujuan Pembelajaran

Setelah mempelajari materi ini, diharapkan mampu:

- Memahami pengertian dan cara kerja PHP.
- Menulis struktur dasar kode PHP.
- Menggunakan `echo` untuk menampilkan keluaran.
- Menulis komentar dalam kode PHP.
- Membuat variabel dan mengenali tipe data dasar.
- Mendefinisikan konstanta.
- Menggunakan operator aritmatika, penggabungan string, perbandingan, dan logika.

## Pengertian PHP

**PHP (PHP: Hypertext Preprocessor)** adalah bahasa pemrograman yang umum digunakan untuk mengembangkan aplikasi web.

PHP dapat ditulis bersama HTML. Kode PHP diproses di sisi server, kemudian hasilnya dikirimkan kepada browser.

Alur sederhananya:

1. Pengguna membuka halaman web.
2. Browser mengirim permintaan ke server.
3. Server menjalankan kode PHP.
4. Hasil pemrosesan dikirimkan kepada browser.
5. Browser menampilkan hasilnya.

Berbeda dengan HTML statis, PHP dapat menghasilkan konten berdasarkan data dan logika program.

## Struktur Dasar PHP

Kode PHP ditulis di antara tag pembuka `<?php` dan, jika diperlukan, tag penutup `?>`.

Contoh:

```php
<?php
echo "Selamat datang!";
?>
```

Fungsi `echo` digunakan untuk menampilkan keluaran, misalnya teks atau markup HTML.

PHP juga dapat disisipkan ke dalam dokumen HTML.

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>
        <?php
        echo "Selamat Datang";
        ?>
    </h1>
</body>
</html>
```

Pada contoh tersebut, HTML membentuk struktur halaman, sedangkan PHP menghasilkan teks judul.

## Menampilkan Keluaran dengan `echo`

`echo` digunakan untuk menampilkan teks atau hasil ekspresi.

Contoh:

```php
<?php
echo "Belajar PHP";
echo "<br>";
echo "Pertemuan 4";
?>
```

Tag `<br>` merupakan elemen HTML untuk membuat pergantian baris.

PHP juga dapat menampilkan nilai variabel:

```php
<?php
$nama = "Andi";
echo "Nama mahasiswa: $nama";
?>
```

Beberapa nilai juga dapat diberikan kepada `echo` dengan pemisah koma:

```php
<?php
$nama = "Andi";
$nilai = 80;

echo "Nama: ", $nama, "<br>";
echo "Nilai: ", $nilai;
?>
```

## Komentar dalam PHP

Komentar merupakan catatan dalam kode yang tidak dieksekusi sebagai instruksi program.

PHP mendukung beberapa bentuk komentar.

### Komentar satu baris dengan `//`

```php
<?php
// Ini adalah komentar satu baris
echo "Belajar PHP";
?>
```

### Komentar satu baris dengan `#`

```php
<?php
# Ini juga komentar satu baris
echo "Halo";
?>
```

### Komentar beberapa baris dengan `/* ... */`

```php
<?php
/*
Komentar ini terdiri dari
lebih dari satu baris.
*/
echo "Contoh komentar PHP";
?>
```

Komentar berguna untuk menjelaskan tujuan kode, memberi catatan, dan mempermudah pemeliharaan program.

## Variabel PHP

Variabel digunakan untuk menyimpan nilai yang dapat digunakan selama program berjalan.

Dalam PHP, nama variabel diawali dengan tanda dolar (`$`).

Contoh:

```php
<?php
$nim = "1710110989";
$nama = "Maria Mercedes";
$alamat = "Jl. Gajah Mada No. 4";
$nilai = 80;

echo "NIM: $nim<br>";
echo "Nama: $nama<br>";
echo "Alamat: $alamat<br>";
echo "Nilai: $nilai";
?>
```

### Aturan dasar variabel

- Nama variabel diawali dengan `$`.
- Nama variabel harus diawali huruf atau garis bawah (`_`), bukan angka.
- Nama variabel peka terhadap huruf besar dan kecil.
- Nilai variabel dapat berubah selama program berjalan.

Contoh:

```php
<?php
$nama = "Andi";
$nama = "Budi";

echo $nama;
?>
```

Keluaran:

```text
Budi
```

Nilai yang ditampilkan adalah nilai terakhir yang diberikan kepada variabel `$nama`.

## Tipe Data Dasar

Tipe data menunjukkan jenis nilai yang digunakan dalam program.

| Tipe data | Keterangan | Contoh |
|---|---|---|
| String | Teks | `"Belajar PHP"` |
| Integer | Bilangan bulat | `10` |
| Float | Bilangan desimal | `2.5` |
| Boolean | Nilai benar atau salah | `true`, `false` |
| Array | Kumpulan nilai | `[10, 20, 30]` |
| Object | Instansiasi dari sebuah class | `$objek` |

Contoh:

```php
<?php
$nama = "Andi";       // String
$umur = 20;           // Integer
$nilai = 85.5;        // Float
$lulus = true;        // Boolean
$angka = [10, 20, 30]; // Array

echo $nama;
?>
```

Array dan object merupakan bagian dari pengenalan tipe data. Penggunaannya secara lebih mendalam membutuhkan materi lanjutan.

### Catatan tentang string angka

Perhatikan contoh berikut:

```php
<?php
$a = "5";
$b = "2.5";

$hasil = $a + $b;

echo $hasil;
?>
```

Variabel `$a` dan `$b` berisi string karena nilainya ditulis menggunakan tanda kutip. Dalam operasi aritmatika ini, PHP mengonversi string numerik menjadi angka sehingga hasilnya adalah `7.5`.

Jika ingin mendeklarasikan bilangan sebagai integer dan float sejak awal, gunakan:

```php
<?php
$a = 5;
$b = 2.5;
?>
```

## Konstanta PHP

Konstanta digunakan untuk menyimpan nilai yang tidak dimaksudkan untuk diubah selama program berjalan.

Salah satu cara mendefinisikan konstanta adalah menggunakan fungsi `define()`.

Contoh:

```php
<?php
define("KAMPUS", "UNSIA");

echo KAMPUS;
?>
```

Keluaran:

```text
UNSIA
```

Perbedaan variabel dan konstanta:

| Aspek | Variabel | Konstanta |
|---|---|---|
| Penulisan | Diawali `$` | Tidak menggunakan `$` saat diakses |
| Contoh | `$nama = "Andi";` | `define("KAMPUS", "UNSIA");` |
| Penggunaan | Nilainya dapat diubah | Nilainya tidak dimaksudkan untuk diubah |

## Operator Aritmatika

Operator aritmatika digunakan untuk melakukan perhitungan matematika.

Misalnya:

```php
<?php
$a = 5;
$b = 2.5;

$tambah = $a + $b;
$kurang = $a - $b;
$kali = $a * $b;
$bagi = $a / $b;
$sisa = $a % 2;

echo "Penjumlahan: $tambah<br>";
echo "Pengurangan: $kurang<br>";
echo "Perkalian: $kali<br>";
echo "Pembagian: $bagi<br>";
echo "Sisa pembagian: $sisa<br>";
?>
```

| Operator | Fungsi | Contoh | Hasil |
|---|---|---|---|
| `+` | Penjumlahan | `5 + 2` | `7` |
| `-` | Pengurangan | `5 - 2` | `3` |
| `*` | Perkalian | `5 * 2` | `10` |
| `/` | Pembagian | `5 / 2` | `2.5` |
| `%` | Sisa pembagian | `5 % 2` | `1` |

Operator `%` dapat digunakan untuk memeriksa apakah suatu bilangan habis dibagi dua.

```php
<?php
$angka = 7;

echo $angka % 2;
?>
```

Keluaran:

```text
1
```

Sisa pembagian `1` menunjukkan bahwa angka tersebut ganjil.

## Operator Increment dan Decrement

Operator increment menambah nilai variabel sebanyak satu, sedangkan decrement mengurangi nilainya sebanyak satu.

| Operator | Fungsi |
|---|---|
| `++$a` | Pre-increment: menaikkan nilai sebelum digunakan. |
| `$a++` | Post-increment: menggunakan nilai saat ini sebelum menaikkannya. |
| `--$a` | Pre-decrement: menurunkan nilai sebelum digunakan. |
| `$a--` | Post-decrement: menggunakan nilai saat ini sebelum menurunkannya. |

Contoh:

```php
<?php
$a = 5;

echo ++$a; // 6
echo "<br>";

$b = 5;

echo $b++; // 5
echo "<br>";

echo $b;   // 6
?>
```

Perbedaan pre dan post terlihat ketika operator digunakan dalam suatu ekspresi.

## Operator Penggabungan String

Operator titik (`.`) digunakan untuk menggabungkan string.

Contoh:

```php
<?php
$komentar = "Selamat Datang";
$nama = "UNSIA";

echo $komentar . " di " . $nama;
?>
```

Keluaran:

```text
Selamat Datang di UNSIA
```

Operator ini juga dapat digunakan untuk menggabungkan teks dengan tag HTML.

```php
<?php
$nama = "Andi";

echo "<p>Selamat belajar, " . $nama . "!</p>";
?>
```

Perlu dibedakan antara operator penggabungan string (`.`) dan tanda tambah (`+`) yang digunakan untuk operasi aritmatika.

## Operator Perbandingan

Operator perbandingan digunakan untuk membandingkan dua nilai. Hasilnya berupa boolean, yaitu `true` atau `false`.

| Operator | Fungsi |
|---|---|
| `>` | Lebih besar dari |
| `<` | Lebih kecil dari |
| `>=` | Lebih besar dari atau sama dengan |
| `<=` | Lebih kecil dari atau sama dengan |
| `==` | Sama nilai setelah konversi tipe yang mungkin dilakukan |
| `!=` | Tidak sama nilai |

Contoh:

```php
<?php
$a = 10;
$b = 5;

var_dump($a > $b);
echo "<br>";

var_dump($a == $b);
echo "<br>";

var_dump($a != $b);
?>
```

`var_dump()` digunakan untuk menampilkan informasi nilai beserta tipe datanya. Dalam contoh ini, hasil perbandingan ditampilkan sebagai boolean.

Catatan: PHP juga memiliki operator `===` dan `!==` untuk membandingkan nilai sekaligus tipe datanya. Operator tersebut merupakan tambahan di luar daftar operator dasar di atas.

## Operator Logika

Operator logika digunakan untuk menggabungkan atau membalik kondisi.

| Operator | Fungsi |
|---|---|
| `&&` | Bernilai benar jika kedua kondisi benar. |
| `||` | Bernilai benar jika minimal satu kondisi benar. |
| `xor` | Bernilai benar jika tepat satu kondisi benar. |
| `!` | Membalik nilai logika. |

Contoh:

```php
<?php
$a = 10;
$b = 5;

var_dump($a > 0 && $b > 0);
echo "<br>";

var_dump($a > 0 || $b < 0);
echo "<br>";

var_dump(($a > 0) xor ($b < 0));
echo "<br>";

var_dump(!($a < 0));
?>
```

Operator `and` dan `or` juga tersedia dalam PHP. Namun, prioritas evaluasinya berbeda dari `&&` dan `||`, sehingga penggunaannya perlu memperhatikan tanda kurung dan urutan operasi.

## Contoh Program Gabungan

Contoh berikut menggabungkan variabel, konstanta, operator aritmatika, penggabungan string, dan perbandingan.

```php
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan PHP Pertemuan 4</title>
</head>
<body>
    <h1>Latihan Struktur Dasar PHP</h1>

    <?php
    define("KAMPUS", "UNSIA");

    $nama = "Andi";
    $nilai1 = 80;
    $nilai2 = 90;

    $total = $nilai1 + $nilai2;
    $rataRata = $total / 2;

    echo "<p>Nama: " . $nama . "</p>";
    echo "<p>Kampus: " . KAMPUS . "</p>";
    echo "<p>Total nilai: " . $total . "</p>";
    echo "<p>Rata-rata: " . $rataRata . "</p>";

    if ($rataRata >= 75) {
        echo "<p>Status: Memenuhi batas nilai.</p>";
    } else {
        echo "<p>Status: Belum memenuhi batas nilai.</p>";
    }
    ?>
</body>
</html>
```

Contoh ini juga memperkenalkan `if/else` sebagai tambahan. Pembahasan kontrol alur secara lengkap mencakup materi tersendiri.

## Cara Menjalankan Program PHP

Untuk praktik menggunakan XAMPP:

1. Jalankan Apache melalui XAMPP Control Panel.
2. Simpan file PHP dalam folder `C:\xampp\htdocs\praktikum_web`.
3. Beri nama file, misalnya `pertemuan4.php`.
4. Buka browser.
5. Akses alamat:

   `http://localhost/praktikum_web/pertemuan4.php`

PHP harus diproses oleh server web. Membuka file PHP langsung melalui alamat `file:///...` tidak menjalankan PHP seperti yang diharapkan.

MySQL tidak diperlukan untuk contoh-contoh PHP dasar yang belum menggunakan database. Jalankan MySQL jika praktikum atau aplikasi yang dikerjakan memang memerlukannya.

## Kesalahan yang Perlu Dihindari

1. Lupa menuliskan tanda `$` pada variabel.
2. Mengakses konstanta dengan menambahkan `$`.
3. Menggunakan operator `+` untuk menggabungkan string.
4. Menganggap angka yang ditulis dalam tanda kutip otomatis bertipe integer atau float.
5. Lupa menutup tanda kutip atau kurung.
6. Menggunakan pembagian dengan nilai nol.
7. Membuka file PHP secara langsung tanpa server PHP.
8. Menganggap komentar PHP sebagai instruksi yang dijalankan program.

## Ringkasan

- PHP merupakan bahasa pemrograman yang dapat dijalankan di sisi server.
- Kode PHP diawali dengan `<?php`.
- `echo` digunakan untuk menghasilkan keluaran.
- Komentar dapat ditulis menggunakan `//`, `#`, atau `/* ... */`.
- Variabel diawali tanda `$`.
- Tipe data dasar meliputi string, integer, float, dan boolean.
- Konstanta dapat dibuat menggunakan `define()`.
- Operator aritmatika digunakan untuk perhitungan.
- Increment dan decrement menaikkan atau menurunkan nilai variabel.
- Operator titik (`.`) menggabungkan string.
- Operator perbandingan menghasilkan nilai boolean.
- Operator logika menggabungkan atau membalik kondisi.
- PHP dijalankan melalui server PHP, misalnya Apache pada XAMPP.

## Checklist Belajar Mandiri

- [ ] Memahami cara kerja PHP di sisi server.
- [ ] Membuat program sederhana menggunakan `echo`.
- [ ] Menggunakan komentar satu baris dan beberapa baris.
- [ ] Membuat dan menampilkan variabel.
- [ ] Membedakan string, integer, float, dan boolean.
- [ ] Membuat konstanta menggunakan `define()`.
- [ ] Menggunakan operator `+`, `-`, `*`, `/`, dan `%`.
- [ ] Memahami increment dan decrement.
- [ ] Menggabungkan string menggunakan operator `.`.
- [ ] Menggunakan operator perbandingan.
- [ ] Menggunakan operator logika.
- [ ] Menjalankan file PHP melalui `localhost`.

---

## File Latihan

| File | Topik | Keluaran |
|---|---|---|
| [01-struktur-dasar-echo.php](01-struktur-dasar-echo.php) | Struktur dasar `echo` | `Selamat datang!` |
| [02-php-dalam-html.php](02-php-dalam-html.php) | PHP disisipkan dalam dokumen HTML | Judul halaman dari PHP |
| [03-echo-beberapa-nilai.php](03-echo-beberapa-nilai.php) | `echo` dengan beberapa nilai | `Belajar PHP` / `Pertemuan 4` |
| [04-echo-variabel.php](04-echo-variabel.php) | Menampilkan nilai variabel | `Nama mahasiswa: Andi` |
| [05-echo-pemisah-koma.php](05-echo-pemisah-koma.php) | `echo` dengan pemisah koma | `Nama: Andi` / `Nilai: 80` |
| [06-komentar-garis-miring.php](06-komentar-garis-miring.php) | Komentar satu baris `//` | `Belajar PHP` |
| [07-komentar-pagar.php](07-komentar-pagar.php) | Komentar satu baris `#` | `Halo` |
| [08-komentar-banyak-baris.php](08-komentar-banyak-baris.php) | Komentar beberapa baris `/* */` | `Contoh komentar PHP` |
| [09-variabel-data-mahasiswa.php](09-variabel-data-mahasiswa.php) | Variabel data mahasiswa | NIM, nama, alamat, nilai |
| [10-variabel-nilai-berubah.php](10-variabel-nilai-berubah.php) | Nilai variabel dapat berubah | `Budi` |
| [11-tipe-data-dasar.php](11-tipe-data-dasar.php) | String, integer, float, boolean, array | `Andi` |
| [12-string-angka-konversi.php](12-string-angka-konversi.php) | String angka dikonversi PHP | `7.5` |
| [13-angka-integer-float.php](13-angka-integer-float.php) | Deklarasi integer & float asli | (tanpa keluaran) |
| [14-konstanta-define.php](14-konstanta-define.php) | Konstanta dengan `define()` | `UNSIA` |
| [15-operator-aritmatika.php](15-operator-aritmatika.php) | `+ - * / %` | 5 hasil perhitungan |
| [16-cek-bilangan-ganjil.php](16-cek-bilangan-ganjil.php) | Sisa bagi menentukan ganjil/genap | `1` (ganjil) |
| [17-increment-decrement.php](17-increment-decrement.php) | Pre/post increment & decrement | `6` / `5` / `6` |
| [18-operator-penggabung-string.php](18-operator-penggabung-string.php) | Operator `.` | `Selamat Datang di UNSIA` |
| [19-penggabung-string-html.php](19-penggabung-string-html.php) | Penggabungan dengan tag HTML | `<p>Selamat belajar, Andi!</p>` |
| [20-operator-perbandingan.php](20-operator-perbandingan.php) | `> == !=` dengan `var_dump` | `bool(true)` / `bool(false)` |
| [21-operator-logika.php](21-operator-logika.php) | `&&`, `||`, `xor`, `!` | 4 hasil boolean |
| [22-program-gabungan.php](22-program-gabungan.php) | Gabungan: variabel, konstanta, operator, `if/else` | Total 170, rata-rata 85 |

Semua file dijalankan dengan PHP 8.4 CLI dan keluarannya dicocokkan dengan keterangan `Keluaran` pada catatan di atas. Untuk praktik melalui server, letakkan file di folder `htdocs` lalu akses `http://localhost/...` — PHP tidak dieksekusi bila file dibuka langsung lewat `file://`.
