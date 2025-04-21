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
    <script>
        // Javascript for slideshow
        let slideshow = 0;
        function showSlides() {
            let slides = document.getElementsByClassName("slides");
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1; }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change slide every 3 seconds
        }
        document.addEventListener("DOMContentLoaded", showSlides);
    </script>
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
</body>
</html>