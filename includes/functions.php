<?php
if (!function_exists('getAllsekolahInfo')) {
    function getAllsekolahInfo($conn) {
        $sql = "SELECT * FROM sekolah_baru";
        return $conn->query($sql);
    }
}

if (!function_exists('getAllsekolahInfoById')) {
    function getAllsekolahInfoById($conn, $id) {
        $sql = "SELECT * FROM sekolah_baru WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
?>