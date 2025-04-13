<?php
include_once 'config/db.php';
include_once 'includes/functions.php';
include_once 'includes/header.php';

$data = getAllsekolahInfo($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Sekolah</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    
    <main>
        <h2>Selamat datang di website sekolah kami!</h2>
        <p>Di sini Anda dapat menemukan informasi terbaru tentang sekolah kami.</p>
        <p>Untuk informasi lebih lanjut, silakan pilih menu di atas.</p>

        <h3>Daftar Sekolah</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Sekolah</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($data->num_rows > 0) {
                    while ($row = $data->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['nama_sekolah'] . "</td>";
                        echo "<td>" . $row['alamat'] . "</td>";
                        echo "<td>" . $row['telepon'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada data sekolah.</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Form untuk mencari detail sekolah berdasarkan ID -->
        <h3>Detail Sekolah</h3>
        <form method="GET" action="">
            <label for="id">Masukkan ID Sekolah:</label>
            <input type="number" name="id" id="id" required>
            <button type="submit">Cari</button>
        </form>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sekolah = getAllsekolahInfoById($conn, $id);
            if ($sekolah) {
                echo "<h4>Detail Sekolah ID " . $sekolah['id'] . "</h4>";
                echo "<p>Nama Sekolah: " . $sekolah['nama_sekolah'] . "</p>";
                echo "<p>Alamat: " . $sekolah['alamat'] . "</p>";
                echo "<p>Telepon: " . $sekolah['telepon'] . "</p>";
            } else {
                echo "<p>Data sekolah tidak ditemukan.</p>";
            }
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2025 Website Sekolah. All rights reserved.</p>
    </footer>
</body>
</html>
<?php
$conn->close();
include_once 'includes/footer.php';
?>