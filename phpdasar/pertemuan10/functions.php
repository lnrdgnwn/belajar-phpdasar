<?php

// koneksikan ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $db;
    $result =  mysqli_query($db, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function tambah($data)
{
    global $db;
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa VALUES ('','$nama','$nim', '$email','$jurusan', '$gambar' )";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id =$id");

    return mysqli_affected_rows($db);
}

?>
<h1></h1>