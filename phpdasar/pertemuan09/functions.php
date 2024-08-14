<?php

// koneksikan ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $db;
    $result =  mysqli_query($db, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>