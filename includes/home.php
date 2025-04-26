<?php
    include_once '../config/db.php';
    include_once '../includes/function.php';
?>

<!DOCTYPE html>
<html leng="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" img/content="width=device-width, initial-scale=1.0">
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
            <!-- Slideshow -->
            <div class="slideshow-container">
                <div class="slides">
                    <img src="../assets/img/content/content1.png" style="width:100%">
                </div>
                <div class="slides">
                    <img src="../assets/img/content/content2.png" style="width:100%">
                </div>
                <div class="slides">
                    <img src="../assets/img/content/content3.png" style="width:100%">
                </div>
                <div class="slides">
                    <img src="../assets/img/content/content4.png" style="width:100%">
                </div>
                <div class="slides">
                    <img src="../assets/img/content/content5.png" style="width:100%">
                </div>
            </div>
            <div class="slideshow-buttons">
                <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
                <button class="next" onclick="plusSlides(1)">&#10095;</button>
            </div>
            <div class="dot-container">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>

            <!-- Kotak Berita -->
            <div class="news-box">
                <h3>Berita Terbaru</h3>
                <ul>
                    <?php
                    $query = "SELECT id, title, description FROM berita ORDER BY created_at DESC LIMIT 4";
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<li><a href="../pages/berita_detail.php?id=' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['title']) . '</a></li>';
                            echo '<p>' . htmlspecialchars(substr($row['description'], 0, 100)) . '...</p>';
                        }
                    } else {
                        echo '<li>Tidak ada berita terbaru.</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    <!-- Footer -->
    <?php include_once __DIR__ . '../includes/footer.php';?>
    </div>
</body>
</html>