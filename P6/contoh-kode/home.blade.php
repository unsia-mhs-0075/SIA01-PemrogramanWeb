<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Home</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <p>Ini adalah halaman Laravel.</p>

    {{-- Blade {{ }} menampilkan nilai dengan escaping HTML otomatis --}}
    @isset($nama)
        <hr>
        <h2>Halo, {{ $nama }}</h2>
    @endisset
</body>
</html>
