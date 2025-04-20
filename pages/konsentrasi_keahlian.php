
<?php
    include_once '../config/db.php';
    include_once '../includes/function.php';
    include_once '../includes/header.php';

    $data = getAllsekolahInfo($conn);
?>


<footer class="primary-footer">
    <div class="container">
        <p class="copyright">&copy; 2025 Website Sekolah. All rights reserved.</p>
    </div>
</footer>