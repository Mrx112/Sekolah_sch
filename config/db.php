<?php
    $HOST  = "localhost";
    $USER  = "mr112";
    $PASS  = "Devilarm123";
    $DB    = "sekolah_baru";

    $conn = new mysqli($HOST, $USER, $PASS, $DB);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>