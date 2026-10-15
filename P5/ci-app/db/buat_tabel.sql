-- Pertemuan 5: SQL pembuatan tabel mahasiswa
-- (Versi MySQL/MariaDB sesuai materi dosen)
-- Untuk proyek ini digunakan SQLite — lihat db/buat_tabel.sqlite.sql

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    nrp VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    jurusan VARCHAR(100) NOT NULL
);

INSERT INTO mahasiswa (nama, nrp, email, jurusan) VALUES
('Andi Wijaya',  '2021001', 'andi@example.com',  'Sistem Informasi'),
('Budi Santoso', '2021002', 'budi@example.com',  'Sistem Informasi'),
('Citra Lestari','2021003', 'citra@example.com', 'Teknik Informatika'),
('Dewi Anggraini','2021004','dewi@example.com',  'Sistem Informasi');
