# Pertemuan 5

Pengenalan CodeIgniter 3 dan Bootstrap 4

## Tujuan Pembelajaran

Setelah mempelajari materi ini, diharapkan mampu:

- Memahami konsep framework dalam pengembangan web.
- Mengenali struktur dasar CodeIgniter 3.
- Memahami konsep Model-View-Controller (MVC).
- Mengatur controller default dan routing.
- Menghubungkan controller dengan view.
- Menggunakan template header dan footer.
- Mengenali Bootstrap 4 untuk membantu membangun tampilan web.
- Menghubungkan aplikasi CodeIgniter dengan database.
- Mengambil dan menampilkan data mahasiswa menggunakan model dan Query Builder.

## Pengertian Framework

Framework adalah kerangka kerja yang menyediakan struktur, komponen, dan mekanisme untuk membantu pengembang membuat aplikasi.

Tanpa framework, pengembang perlu menyusun sendiri banyak bagian aplikasi, seperti pengaturan URL, pemanggilan file, pengolahan data, dan pengelolaan struktur kode.

Dengan framework, pengembangan aplikasi dapat dilakukan menggunakan pola dan struktur yang sudah disediakan.

### CodeIgniter

**CodeIgniter** adalah framework PHP yang digunakan untuk membangun aplikasi web.

Materi video ini menggunakan CodeIgniter versi **3.1.9** dan memperkenalkan Bootstrap 4 untuk membantu pengaturan tampilan.

Catatan: Materi ini membahas CodeIgniter 3, bukan CodeIgniter 4. Struktur direktori dan cara konfigurasinya tidak boleh dianggap sama antara kedua versi tersebut.

## Konsep Model-View-Controller (MVC)

MVC merupakan pola arsitektur yang memisahkan tanggung jawab aplikasi menjadi tiga bagian.

| Komponen | Fungsi |
|---|---|
| Model | Mengelola data dan interaksi dengan database. |
| View | Menampilkan antarmuka kepada pengguna. |
| Controller | Mengatur alur aplikasi dan menghubungkan model dengan view. |

### Model

Model menangani pengambilan atau pengolahan data.

Contohnya, `Mahasiswa_model` mengambil daftar mahasiswa dari tabel `mahasiswa`.

### View

View berisi tampilan yang dilihat pengguna, seperti tabel, judul halaman, menu, dan formulir.

Contohnya, `v_mahasiswa.php` menampilkan daftar mahasiswa.

### Controller

Controller menerima permintaan, menjalankan logika aplikasi yang diperlukan, memanggil model, dan meneruskan data kepada view.

Contohnya, controller `Mahasiswa` mengambil data dari model lalu mengirimkannya ke halaman daftar mahasiswa.

### Alur MVC

```text
Pengguna
   |
   v
Controller
   |
   v
Model -----> Database
   |
   v
Controller
   |
   v
View
   |
   v
Halaman ditampilkan
```

Pemisahan tersebut membantu membuat kode lebih terorganisasi dan memudahkan pemeliharaan aplikasi.

## Struktur Direktori CodeIgniter 3

CodeIgniter 3 memiliki sejumlah direktori penting, termasuk `application/` dan `system/`.

Contoh struktur sederhana:

```text
ci-app/
├── application/
│   ├── config/
│   ├── controllers/
│   ├── models/
│   ├── views/
│   └── ...
├── system/
├── index.php
└── ...
```

| Direktori atau file | Fungsi |
|---|---|
| `application/` | Berisi kode aplikasi yang dikembangkan. |
| `application/controllers/` | Menyimpan controller. |
| `application/models/` | Menyimpan model. |
| `application/views/` | Menyimpan file tampilan. |
| `application/config/` | Menyimpan konfigurasi aplikasi. |
| `system/` | Berisi komponen inti framework CodeIgniter. |
| `index.php` | Menjadi titik masuk aplikasi. |

Sebagai contoh, controller `Home.php` ditempatkan di direktori `application/controllers/`, sedangkan view `home.php` dapat ditempatkan di `application/views/`.

## Menjalankan Aplikasi di Localhost

Video menggunakan alamat lokal, misalnya:

```text
http://localhost/ci-app
```

Nama `ci-app` merupakan contoh nama folder proyek.

Untuk menjalankan proyek pada lingkungan XAMPP:

1. Letakkan folder proyek di dalam direktori web server, misalnya `C:\xampp\htdocs\ci-app`.
2. Jalankan Apache melalui XAMPP Control Panel.
3. Pastikan struktur direktori CodeIgniter sudah benar.
4. Buka alamat proyek melalui browser.

Jika menggunakan database, konfigurasi koneksi database juga perlu disesuaikan.

## Routing dan Default Controller

Routing menentukan controller atau metode yang dipanggil untuk menangani suatu permintaan URL.

Pada CodeIgniter 3, pengaturan routing berada di:

```text
application/config/routes.php
```

Salah satu pengaturan penting adalah `default_controller`, yaitu controller yang dipanggil ketika pengguna membuka URL utama aplikasi tanpa menyebut controller tertentu.

Contoh:

```php
$route['default_controller'] = 'welcome';
```

Pada contoh tersebut, `welcome` menjadi controller default.

Jika ingin menggunakan controller `Home`, konfigurasi dapat disesuaikan:

```php
$route['default_controller'] = 'home';
```

Nama controller harus sesuai dengan file controller yang tersedia.

## Membuat Controller

Controller merupakan penghubung antara permintaan pengguna, model, dan view.

Contoh controller sederhana:

```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home');
    }
}
```

Penjelasan:

- `class Home extends CI_Controller` mendefinisikan controller bernama `Home`.
- `index()` merupakan metode yang akan dijalankan ketika metode tersebut dipanggil.
- `$this->load->view('home')` memuat view bernama `home`.

Pada CodeIgniter 3, nama file controller umumnya menggunakan huruf kapital di awal, misalnya `Home.php`, sesuai nama class-nya.

## Membuat View

View berisi HTML yang digunakan untuk menampilkan informasi kepada pengguna.

Contoh file `application/views/home.php`:

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Home</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <p>Ini adalah halaman pertama aplikasi CodeIgniter.</p>
</body>
</html>
```

Controller memanggil view tersebut dengan:

```php
$this->load->view('home');
```

Nama view ditulis tanpa ekstensi `.php`.

## Menggunakan Template Header dan Footer

Dalam aplikasi web, beberapa halaman biasanya memiliki bagian yang sama, seperti header, navigasi, dan footer.

Bagian tersebut dapat dipisahkan menjadi beberapa view agar tidak perlu ditulis berulang kali.

Contoh struktur:

```text
application/views/
├── templates/
│   ├── header.php
│   └── footer.php
└── home.php
```

Controller dapat memuat beberapa view secara berurutan:

```php
public function index()
{
    $this->load->view('templates/header');
    $this->load->view('home');
    $this->load->view('templates/footer');
}
```

Dengan pendekatan ini, tampilan yang digunakan bersama dapat dikelola pada satu tempat.

## Pengenalan Bootstrap 4

**Bootstrap 4** adalah framework CSS yang membantu pengembang membuat tampilan web dengan komponen dan sistem layout yang sudah tersedia.

Dalam materi video, Bootstrap digunakan untuk membantu membuat tampilan seperti navigasi, container, dan jumbotron.

Contoh kelas Bootstrap 4:

| Kelas | Kegunaan |
|---|---|
| `container` | Membuat area konten dengan lebar yang teratur. |
| `navbar` | Membantu membentuk navigasi. |
| `jumbotron` | Membuat area untuk menonjolkan konten utama. |
| `btn` | Memberikan gaya dasar pada tombol. |
| `table` | Memberikan gaya dasar pada tabel. |

Contoh penggunaan kelas Bootstrap 4:

```html
<div class="container">
    <div class="jumbotron">
        <h1>Data Mahasiswa</h1>
        <p>Aplikasi pengelolaan data mahasiswa.</p>
    </div>
</div>
```

Contoh ini memerlukan Bootstrap 4 yang sudah dimuat pada halaman. HTML saja tidak otomatis menyediakan gaya Bootstrap.

## Mengirim Data dari Controller ke View

Controller dapat mengirim data kepada view menggunakan array.

Contoh:

```php
public function index()
{
    $data['judul'] = 'Halaman Mahasiswa';
    $data['nama'] = 'Andi';

    $this->load->view('home', $data);
}
```

Pada view `home.php`, data dapat digunakan sebagai berikut:

```php
<h1><?php echo $judul; ?></h1>
<p>Nama mahasiswa: <?php echo $nama; ?></p>
```

Data yang dikirim melalui array `$data` tersedia sebagai variabel pada view sesuai nama key-nya.

Dengan cara ini, controller dapat menyiapkan data, sedangkan view berfokus pada penyajiannya.

## Konfigurasi Database

Untuk mengambil data mahasiswa, aplikasi perlu terhubung ke database.

Pada CodeIgniter 3, konfigurasi database berada di:

```text
application/config/database.php
```

Contoh konfigurasi dasar:

```php
$db['default'] = array(
    'dsn'      => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'db_mahasiswa',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt'  => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
```

Nilai di atas merupakan contoh untuk lingkungan lokal. Sesuaikan hostname, username, password, nama database, dan pengaturan lain dengan lingkungan yang digunakan.

**Penting:** jangan menggunakan konfigurasi kredensial pengembangan secara langsung di lingkungan produksi.

### Autoload dan pemuatan manual

CodeIgniter 3 menyediakan beberapa cara untuk memuat library atau komponen aplikasi.

- **Autoload:** komponen dikonfigurasi agar dimuat otomatis.
- **Pemuatan manual:** komponen dimuat saat diperlukan menggunakan loader.

Materi video memperkenalkan kedua pendekatan tersebut dalam konteks konfigurasi database dan model.

## Membuat Model Mahasiswa

Model digunakan untuk mengambil data mahasiswa dari database.

Contoh struktur tabel yang digunakan dalam materi:

| Kolom | Keterangan |
|---|---|
| `id` | Identitas data mahasiswa. |
| `nama` | Nama mahasiswa. |
| `nrp` | Nomor registrasi mahasiswa. |
| `email` | Alamat email mahasiswa. |
| `jurusan` | Jurusan mahasiswa. |

Contoh model `Mahasiswa_model.php`:

```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
}
```

Penjelasan:

- `Mahasiswa_model` merupakan class model.
- `extends CI_Model` menunjukkan bahwa class tersebut menggunakan fitur dasar model CodeIgniter.
- `$this->db->get('mahasiswa')` mengambil data dari tabel `mahasiswa`.
- `result_array()` mengembalikan hasil query dalam bentuk array.

Model ini mengasumsikan koneksi database sudah dikonfigurasi dan tabel `mahasiswa` sudah tersedia.

## Memanggil Model dari Controller

Controller dapat memuat model, kemudian menggunakan hasilnya untuk ditampilkan melalui view.

Contoh controller `Mahasiswa.php`:

```php
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->model('Mahasiswa_model');

        $data['mahasiswa'] =
            $this->Mahasiswa_model->getAllMahasiswa();

        $this->load->view('mahasiswa/index', $data);
    }
}
```

Alurnya:

1. Controller memuat `Mahasiswa_model`.
2. Controller memanggil metode `getAllMahasiswa()`.
3. Model mengambil data dari tabel `mahasiswa`.
4. Hasil query disimpan pada `$data['mahasiswa']`.
5. Controller mengirimkan data kepada view.

## Menampilkan Data Mahasiswa pada View

Contoh file `application/views/mahasiswa/index.php`:

```php
<h1>Daftar Mahasiswa</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NRP</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswa as $mhs): ?>
            <tr>
                <td><?= html_escape($mhs['id']); ?></td>
                <td><?= html_escape($mhs['nama']); ?></td>
                <td><?= html_escape($mhs['nrp']); ?></td>
                <td><?= html_escape($mhs['email']); ?></td>
                <td><?= html_escape($mhs['jurusan']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
```

Kode tersebut menggunakan `foreach` untuk mengulang setiap baris data mahasiswa dan menampilkannya dalam tabel.

Fungsi `html_escape()` membantu mencegah konten data ditafsirkan sebagai HTML ketika ditampilkan. Kelas Bootstrap `table` akan memberikan tampilan tabel jika Bootstrap sudah dimuat.

Contoh ini merupakan pengembangan praktik untuk memperjelas alur menampilkan data. Materi video yang dibahas berfokus pada pengambilan dan penampilan data, bukan pada implementasi keamanan secara mendalam.

## Query Builder pada CodeIgniter 3

Query Builder membantu menjalankan operasi database melalui metode yang disediakan framework.

Contoh yang digunakan dalam materi:

```php
$this->db->get('mahasiswa')->result_array();
```

Secara sederhana:

- `get('mahasiswa')` mengambil data dari tabel `mahasiswa`.
- `result_array()` mengambil hasil query sebagai array.

Hasilnya dapat digunakan oleh controller untuk diteruskan kepada view.

Penggunaan Query Builder membantu mengurangi kebutuhan menulis query SQL secara manual untuk operasi dasar.

## Alur Lengkap Aplikasi

Berikut rangkuman alur aplikasi daftar mahasiswa:

```text
Pengguna membuka halaman
          |
          v
Controller Mahasiswa
          |
          v
Memanggil Mahasiswa_model
          |
          v
Query Builder mengambil data
          |
          v
Database tabel mahasiswa
          |
          v
Hasil query dikembalikan ke model
          |
          v
Controller mengirim data ke view
          |
          v
View menampilkan tabel mahasiswa
```

Bagian ini memperlihatkan hubungan antara routing, controller, model, database, dan view dalam aplikasi CodeIgniter.

## Batasan Materi Pertemuan 5

Berdasarkan video yang telah dibahas, materi berhenti pada pengambilan dan penampilan data mahasiswa.

Operasi berikut disebut sebagai materi lanjutan pada video berikutnya:

- Insert: menambahkan data.
- Update: mengubah data.
- Delete: menghapus data.
- Searching: mencari data.

Oleh karena itu, operasi CRUD lengkap dan pencarian tidak dimasukkan sebagai materi inti catatan ini.

## Ringkasan

1. Framework menyediakan struktur dan komponen untuk membantu pengembangan aplikasi.
2. CodeIgniter 3 merupakan framework PHP yang menggunakan pola MVC.
3. Model menangani data, view menampilkan antarmuka, dan controller mengatur alur aplikasi.
4. Routing menentukan controller atau metode yang menangani permintaan.
5. Controller dapat memuat view dan mengirimkan data melalui array.
6. Bootstrap 4 membantu membangun tampilan web.
7. Konfigurasi database CodeIgniter 3 berada di `application/config/database.php`.
8. Model dapat mengambil data menggunakan Query Builder.
9. `get('mahasiswa')` mengambil data dari tabel mahasiswa, sedangkan `result_array()` menghasilkan array.
10. Controller meneruskan hasil query kepada view untuk ditampilkan.

## Checklist Belajar Mandiri

- [ ] Memahami konsep framework.
- [ ] Memahami pola MVC.
- [ ] Mengenali direktori `application/` dan `system/`.
- [ ] Menjelaskan fungsi controller, model, dan view.
- [ ] Mengenali konfigurasi `default_controller`.
- [ ] Membuat controller sederhana.
- [ ] Memuat view melalui controller.
- [ ] Mengirim data dari controller ke view.
- [ ] Memahami kegunaan Bootstrap 4.
- [ ] Mengenali konfigurasi database CodeIgniter 3.
- [ ] Membuat model untuk mengambil data mahasiswa.
- [ ] Menggunakan Query Builder untuk membaca data.
- [ ] Menampilkan hasil query pada view.
