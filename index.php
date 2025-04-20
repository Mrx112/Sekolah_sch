<?php
include_once '../config/db.php';
include_once '../includes/functions.php';
include_once '../includes/header.php';

$data = getAllsekolahInfo($conn);
?>

<main class="container">
    <section class="intro">
        <h2 class="page-title">Selamat Datang di Website Sekolah Kami</h2>
        <p>Di sini Anda dapat menemukan informasi terbaru tentang sekolah kami.</p>
        <p>Untuk informasi lebih lanjut, silakan pilih menu di atas.</p>
    </section>


<footer class="primary-footer">
    <div class="container">
        <p class="copyright">&copy; 2025 Website Sekolah. All rights reserved.</p>
    </div>
</footer>

<?php
include_once 'includes/footer.php';
?>
