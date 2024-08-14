<?php

$db = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data dari tabel data mahasiswa/ query
$result = mysqli_query($db, "SELECT * FROM mahasiswa");

// ambil data mahasiswa dari object result
while ($mhs = mysqli_fetch_assoc($result)) {
    $mhss[] = $mhs;
}

var_dump($mhss);
// var_dump($mhs[3]);

// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()

if (!$result) {
    echo mysqli_error($db);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing=0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href="">Ubah</a> |
                    <a href="">Hapus</a>
                </td>
                <td>
                    <img src="img/photo1.jpg" width="50px" height="50px">
                </td>
                <td><?= $row["nim"] ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["jurusan"] ?></td>
            </tr>
            <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>

</html>