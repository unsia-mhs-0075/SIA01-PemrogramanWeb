<div class="jumbotron">
    <h1 class="display-4">Selamat Datang</h1>
    <p class="lead">Ini adalah halaman pertama aplikasi CodeIgniter.</p>
    <hr class="my-4">
    <p>Judul halaman: <?= html_escape($judul); ?></p>
    <p>Nama mahasiswa: <?= html_escape($nama); ?></p>
    <a class="btn btn-primary btn-lg" href="<?= base_url('mahasiswa'); ?>" role="button">
        Lihat Data Mahasiswa
    </a>
</div>
