<?php
require '../../config.php';
include '../../controller/destinationController.php';
$destination = read();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Package</title>
    <link rel="stylesheet" href="../styles/package.css">
</head>
<body>
    <!-- section 1 -->
    <div class="section1">
        <div class="navbar">
            <a href="home.php">
                <img src="../../assets/logo.png" alt="Logo XPLORE">
            </a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="package.php">Package</a></li>
                <li><a href="history.php">History</a></li>
                <?php
                // Check if user is logged in
                session_start();
                if (isset($_SESSION['username'])) {
                    // If logged in, show Logout button
                    echo '<li><a href="../auth/logout.php">Logout</a></li>';
                } else {
                    // If not logged in, show Login button
                    echo '<li><a href="../auth/login.php">Login</a></li>';
                }
                ?>
            </ul>
        </div>
        <h1>Package</h1>
    </div>
    
    <!-- section 2 -->
    <div class="section2">
        <h2>DESTINATIONS</h2>
        <div class="card-container">
            <?php foreach ($destination as $dest) : ?>
            <div class="card">
                <img src=<?= '../../assets/destination/' . $dest['link_gambar'] ?> alt="img">
                <h3><?= $dest['name']; ?></h3>
                <p><?= $dest['desc']; ?></p>
                <a href="booking.php?id=<?= $dest['id']; ?>">
                    <button class="book-now">Book now</button>
                </a>
                
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="social-media">
            <a href="#"><img src="../../assets/foot-ig.png" alt="Instagram"></a>
            <a href="#"><img src="../../assets/foot-wa.png" alt="WhatsApp"></a>
            <a href="#"><img src="../../assets/foot-git.png" alt="GitHub"></a>
        </div>
            <nav class="footer-nav">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Package</a>
            <a href="#">Booking</a>
        </nav>
        <p>Created by <span class="bold-text">KAKIGATAL</span>. | @ 2024</p>
    </footer>
</body>
</html>
