<?php
session_start();

if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'functions.php';
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    // cek apakah data berhasil diubah atau tidak
    if (ubah($_POST,$id) > 0) {
        echo "
            <script>
                alert(`data berhasil diubah!`);
                document.location.href = 'index.php' ;
            </script>
        ";
    } else {
        echo "
            <script>
                alert(`data gagal diubah!`);
                document.location.href ='index.php';
            </script>
            ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>

<body>
    <h1>Ubah data Mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value ="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim"  value ="<?= $mhs["nim"] ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email"  value ="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan"  value ="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <img src="img/<?=$mhs['gambar']; ?>" width= "40px" height ="50px" alt=""> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>

    </form>
</body>

</html>