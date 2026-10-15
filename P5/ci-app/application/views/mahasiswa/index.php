<h1>Daftar Mahasiswa</h1>

<table class="table table-striped table-bordered">
    <thead class="thead-dark">
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
