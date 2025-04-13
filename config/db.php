<?php
    $HOST  = "localhost";
    $USER  = "mr112";
    $PASS  = "Devilarm123";
    $DB    = "sekolah_baru";

    $conn = mysqli_connect($HOST, $USER, $PASS, $DB);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>