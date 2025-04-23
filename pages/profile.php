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
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/styles-menu.css">
    <link rel="stylesheet" href="../assets/css/styles-home1.css">
    <link rel="stylesheet" href="../assets/css/styles-home2.css">
</head>
<body>
    <div class="container">
        <h1>Profil Sekolah</h1>
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
    <?php include_once '../includes/footer.php'; ?>
</body>
</html>