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
