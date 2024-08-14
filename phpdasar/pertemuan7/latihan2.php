<?php
if (!isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["email"]) || !isset($_GET["jurusan"])) {
    //redirect
    header("Location: latihan1.php");
    exit;
}

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
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["nim"]; ?></li>
        <li><?php echo $_GET["email"]; ?></li>
        <li><?php echo $_GET["jurusan"]; ?></li>
    </ul>

</body>

</html>