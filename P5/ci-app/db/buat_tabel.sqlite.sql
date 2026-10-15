-- Pertemuan 5: SQL pembuatan tabel mahasiswa (versi SQLite)
-- Dijalankan otomatis oleh script inisialisasi proyek.

CREATE TABLE IF NOT EXISTS mahasiswa (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    nama TEXT NOT NULL,
    nrp TEXT NOT NULL,
    email TEXT NOT NULL,
    jurusan TEXT NOT NULL
);

INSERT INTO mahasiswa (nama, nrp, email, jurusan) VALUES
('Andi Wijaya',  '2021001', 'andi@example.com',  'Sistem Informasi'),
('Budi Santoso', '2021002', 'budi@example.com',  'Sistem Informasi'),
('Citra Lestari','2021003', 'citra@example.com', 'Teknik Informatika'),
('Dewi Anggraini','2021004','dewi@example.com',  'Sistem Informasi');
