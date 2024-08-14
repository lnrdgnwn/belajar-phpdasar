<?php
    // Date 
    // Untuk menampilkan tanggal dengan format teratentu
    // echo date("l, d-M-Y");

    // UNIX Timestamp / Epoch time
    // echo time(); // detik yang sudah berlalu sejak 1 januari 1970
    
    // echo date("l", time() - 60*60*24*100);

    // mktime
    // membuat sendiri detik
    // mktime()

    // echo date("l", mktime(0,0,0,6,15,2005));

    // strtotime
    echo date("l",strtotime("15 june 2005"));


?>
