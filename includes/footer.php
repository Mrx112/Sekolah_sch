<?php
// Footer file for the website
// This file contains the closing tags for HTML and PHP
// and any additional scripts or styles needed for the footer
?>
    <!DOCTYPE html>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/styles-menu.css">
    <link rel="stylesheet" href="../assets/css/styles-home1.css">
    <link rel="stylesheet" href="../assets/css/styles-home2.css">

    <footer class="primary-footer">
        <div class="container">
            <!-- Logo di sisi kiri -->
            <div class="footer-logo"></div>
            <!-- Teks di bawah logo -->
            <p class="copyright">&copy; 2025 Website SMK KRISTEN SURAKARTA. All rights reserved.</p>
        </div>
    </footer>

    <footer class="footer-distributed">
        <div class="footer-left">
            <h3>SMK KRISTEN SURAKARTA</h3>
            <p class="footer-links">
                <a href="../pages/index.php" link="#index">Home</a>
                .
                <a href="../pages/profile.php" link="#profile">About</a>
                .
                <a href="../pages/kontak.php" link="#kontak">Contact</a>
            </p>
            <p class="footer-company-name">&copy; Created By Adi Susilo &copy; 2025</p>
        </div>

        <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Jl. Pendidikan No. 123</span> Surakarta, Jawa Tengah</p>
        </div>
        <div>
            <i class="fa fa-phone"></i>
            <p>+62 XXX XXXX XXXX</p>
        </div>
        <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:info@sekolah.com">info@sekolah.com</a></p>
        </div>
    </div>

    <div class="footer-right">
        <p class="footer-company-about">
            <span>Tentang Website</span>
            Website ini menyediakan informasi lengkap tentang sekolah kami, termasuk layanan, berita, dan kontak.
        </p>
        <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
        </div>
    </div>
    </footer>
</body>
</html>
<?php
// Close the database connection
$conn->close();
?>