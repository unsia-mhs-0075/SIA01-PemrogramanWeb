#!/bin/bash
# Memeriksa tabel Telescope yang benar-benar terbentuk di database.
# Ganti dengan perintah MySQL bila proyek memakai MySQL/MariaDB
# (materi video menyebut phpMyAdmin untuk kasus tersebut).

set -e
php artisan tinker --execute="
foreach (DB::select(\"SELECT name FROM sqlite_master WHERE type='table'\") as \$t) {
    if (str_contains(\$t->name, 'telescope')) echo \$t->name . PHP_EOL;
}
echo 'Total entri terekam: ' . DB::table('telescope_entries')->count() . PHP_EOL;
"
