<?php
// $mahasiswa = [
//     ["Leonardo Gunawan", "100290192", "leonardogunawan15@gmail.com", "Teknik Informatika"],
//     ["Steve Jobs", "100290192", "steveJobs@gmail.com", "Computer"]
// ];

// Array Associative
// Key anya adalah string yang kita buat sendiri
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

echo $mahasiswa[1]["tugas"][1];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama = <?= $mhs["nama"] ?></li>
            <li>NIM = <?= $mhs["nim"] ?></li>
            <li>Email = <?= $mhs["email"] ?></li>
            <li>Jurusan = <?= $mhs["jurusan"] ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>