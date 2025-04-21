<?php
include_once __DIR__ . '/config/db.php';
include_once __DIR__ . '/includes/functions.php';
include_once __DIR__ . '/includes/header.php';
include_once __DIR__ . '/includes/home.php';
$data = getAllsekolahInfo($conn);
?>

<main class="container">
    <section class="intro">
        <h2 class="page-title">Selamat Datang di Website Sekolah Kami</h2>
        <p>Di sini Anda dapat menemukan informasi terbaru tentang sekolah kami.</p>
        <p>Untuk informasi lebih lanjut, silakan pilih menu di atas.</p>
    </section>
</main>

<body>
    <div class="isi">
        <!-- Lembar Kiri -->
        <div class="lembar-kiri">
            <div class="slideshow-container">
                <div class="slides">
                    <img src="../assets/img/slide1.jpg" alt="Slide 1">
                </div>
                <div class="slides">
                    <img src="../assets/img/slide2.jpg" alt="Slide 2">
                </div>
                <div class="slides">
                    <img src="../assets/img/slide3.jpg" alt="Slide 3">
                </div>
            </div>
        </div>

        <!-- Table Kanan -->
        <div class="lembar-kanan">
            <h3>Data dan Menu</h3>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Menu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT id, name FROM sekolah_baru LIMIT 5"; // Replace with your table
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td><a href='#'>Edit</a></td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No data found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<footer class="primary-footer">
    <div class="container">
        <p class="copyright">&copy; 2025 Website Sekolah. All rights reserved.</p>
    </div>
</footer>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
