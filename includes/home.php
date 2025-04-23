<?php
    include_once '../config/db.php';
    include_once '../includes/function.php';
?>

<!DOCTYPE html>
<html leng="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard</title>
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
    <div class="wrapper">
        <!-- Main Content -->
        <div class="main-content">
            <!-- Lembar Kiri -->
            <div class="lembar-kiri">
                
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
    <!-- Footer -->
    <?php include_once __DIR__ . '../includes/footer.php';?>
    </div>
</body>
</html>