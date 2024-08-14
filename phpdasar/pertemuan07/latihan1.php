<?php
$mahasiswa = [
    [
        "nim" => "2101023102",
        "nama" => "Leonardo Gunawan",
        "email" => "leonardogunawan15@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Steve Jobs",
        "nim" => "100290192",
        "email" => "steveJobs@gmail.com@gmail.com",
        "jurusan" => "Computer Science",
        "tugas" => [90, 80, 100]
    ],
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li> <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"] ?></a></li>
        <?php endforeach; ?>
    </ul>

</body>

</html>