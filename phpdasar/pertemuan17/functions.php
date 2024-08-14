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
    $gambar = upload();
    if(!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa VALUES ('','$nama','$nim', '$email','$jurusan', '$gambar' )";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function upload(){

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile =$_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
            alert('pilih gambar!');
        </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid =['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('ekstensi file tidak valid!');
        </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar 1-2 mb
    if($ukuranFile > 2000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar');
        </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar untuk disimpan ke database
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/'.$namaFileBaru);

    return $namaFileBaru;


}

function hapus($id)
{
    global $db;
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id =$id");

    return mysqli_affected_rows($db);
}

function ubah($data, $id){
    global $db;

    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', email = '$email', jurusan = '$jurusan', gambar ='$gambar' WHERE id = $id";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}

function cari ($keyword) {

    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' ";

    return query($query);
}

function registrasi($data){
    global $db;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        echo "
        <script>
                alert(`username sudah pernah terdaftar!`);
            </script>
        ";
        return false;
    }


    // cek konfirmasi password
    if ($password !== $password2) {
        echo "
        <script>
                alert(`password tidak sesuai!`);
            </script>
        ";
        return false;
    }

    // enkripsi passwordnya
    $password = password_hash($password, PASSWORD_DEFAULT);


    // tambahkan user ke data base
    mysqli_query($db, "INSERT INTO user VALUES('','$username', '$password')");

    return mysqli_affected_rows($db);


}


?>