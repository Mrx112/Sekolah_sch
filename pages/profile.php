<?php
    include_once '../config/db.php';
    include_once '../includes/functions.php'; // Perbaikan nama file
    include_once '../includes/header.php';

    // Ambil data sekolah
    $data = getAllsekolahInfo($conn)->fetch_assoc(); // Pastikan fungsi ini mengembalikan hasil query
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Sekolah</title>
        <link rel="stylesheet" href="../assets/css/styles-home1.css">
        <link rel="stylesheet" href="../assets/css/styles-home2.css">
        <link rel="stylesheet" href="../assets/css/styles-menu.css">
        <link rel="stylesheet" href="../assets/css/styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="../js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    </head>
<body>  
    <div class="title">
        <div class="title-text">
            <h1>Profil Sekolah</h1>
        </div>
    </div>
        <div class="wrapper">
            <div class="main-content">
                <!-- Lembar Kiri -->
                <div class="lembar-kiri">
                    <div class="profile-content">
                        <div class="img">
                            <img src="../assets/img/profile/profile-siswa.jpg" alt="Logo Sekolah">
                        </div>
                        <div class="profile-text">
                        <?php if ($data): ?>
                            <h2><?php echo htmlspecialchars($data['name']); ?></h2>
                            <p><?php echo htmlspecialchars($data['description']); ?></p>
                            <p><strong>Alamat:</strong> <?php echo htmlspecialchars($data['addreess']); ?></p>
                            <p><strong>Logo:</strong> <img src="../assets/img/<?php echo htmlspecialchars($data['logo']); ?>" alt="Logo Sekolah" width="100"></p>
                            <p><strong>Dibuat pada:</strong> <?php echo htmlspecialchars($data['created_at']); ?></p>
                        <?php else: ?>
                            <p>Data sekolah tidak ditemukan.</p>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- Lembar Kanan -->
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
                            $query = "SELECT id, name FROM sekolah_baru LIMIT 5"; // Ganti dengan nama tabel yang sesuai
                            $result = $conn->query($query);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                                    echo "<td><a href='#'>Detail</a></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='3'>Tidak ada data.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    <?php include_once '../includes/footer.php'; ?>
</body>
</html>