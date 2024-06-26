<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="../styles/about.css">
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
        <h1>About us</h1>
    </div>

    <!-- section 2 -->
    <div class="section2">
        <div class="content">
            <h2>APA SO ITU KAKIGATAL?</h2>
            <p>Selamat datang di KakiGatal, platform penyedia jasa booking tempat wisata terlengkap yang siap batamang pa ngoni for mo ba KakiGatal keliling dunia. Di KakiGatal, torang kase berbagai pilihan destinasi menarik yang boleh disesuaikan dengan ngoni pe minat deng kebutuhan. Dengan fitur pemesanan yang komprehensif for akomodasi deng aktivitas selama ba KakiGatal, torang pastikan ngoni dapa pengalaman wisata yang ngoni mo inga trus. Ada kategori wisata rupa Campfire, Tour Guide, Camping, deng Adventure, itu samua torang rancang for ngoni.</p>
            <p>Torang mangarti kalo setiap perjalanan adalah petualangan luar biasa yang pastinya ngoni musti prepare sebaik mungkin. Makanya, torang kase antarmuka yang user-friendly deng proses pemesanan yang gampang mo mangarti akang, supaya ngoni cepat dapa kong booking destinasi wisata impian di KakiGatal. Torang berkomitmen for kase layanan terbaik deng pengalaman wisata yang memuaskan, dari awal sampe akhir perjalanan for ngoni. Ngoni boleh keliling dunia dengan KakiGatal!</p>
        </div>
    </div>

    <!-- section 3 -->
    <div class="section3">
        <h2>TEAM</h2>
        <div class="team-container">
            <div class="team-member">
                <img src="../../assets/febi.jpg" alt="Febiola Lengkong">
                <h3>Febiola Lengkong</h3>
                <p>220211060007</p>
                <div class="social-icons">
                    <a href="#"><img src="../../assets/ig.png" alt="Instagram"></a>
                    <a href="#"><img src="../../assets/wa.png" alt="WhatsApp"></a>
                    <a href="#"><img src="../../assets/github.png" alt="GitHub"></a>
                </div>
            </div>
            <div class="team-member">
                <img src="../../assets/regina.jpg" alt="Regina">
                <h3>Regina Agussalim</h3>
                <p>220211060178</p>
                <div class="social-icons">
                    <a href="#"><img src="../../assets/ig.png" alt="Instagram"></a>
                    <a href="#"><img src="../../assets/wa.png" alt="WhatsApp"></a>
                    <a href="#"><img src="../../assets/github.png" alt="GitHub"></a>
                </div>
            </div>
            <div class="team-member">
                <img src="../../assets/ido.jpg" alt="Ido">
                <h3>Ridho Aditya</h3>
                <p>220211060113</p>
                <div class="social-icons">
                    <a href="#"><img src="../../assets/ig.png" alt="Instagram"></a>
                    <a href="#"><img src="../../assets/wa.png" alt="WhatsApp"></a>
                    <a href="#"><img src="../../assets/github.png" alt="GitHub"></a>
                </div>
            </div>
            <div class="team-member">
                <img src="../../assets/itin.jpg" alt="Itin">
                <h3>Christin Jocom</h3>
                <p>220211060033</p>
                <div class="social-icons">
                    <a href="#"><img src="../../assets/ig.png" alt="Instagram"></a>
                    <a href="#"><img src="../../assets/wa.png" alt="WhatsApp"></a>
                    <a href="#"><img src="../../assets/github.png" alt="GitHub"></a>
                </div>
            </div>
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
