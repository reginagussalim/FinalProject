<?php
    include '../../config.php';
    session_start();
    
    if (!isset($_SESSION['username'])) {
        header("Location: ../auth/login.php");
        exit(); // Terminate script execution after the redirect
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/home.css">
</head>
<body>
    <div class="section1">
        <div class="navbar">
            <img src="../../assets/logo.png" alt="Logo XPLORE">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Package</a></li>
                <li><a href="#">History</a></li>
            </ul>
        </div>
        <div>
            <h1 class="headerOne">MANADO</h1>
            <h2 class="headerTwo">MAKE YOUR TOUR WORTHWHILE</h2>
        </div>
        <button class="eksplore">Eksplore</button>
    </div>

    <div class="box-container">
        <div class="box">
            <div class="boxContent">
                <img width="182" height="110" src="../../assets/adventure.png">
                <p>Adventure</p>
            </div>
        </div>
        <div class="box">
            <div class="boxContent">
                <img width="129" height="117" src="../../assets/tourguide.png">
                <p>Tour Guide</p>
            </div>
        </div>
        <div class="box">
            <div class="boxContent">
                <img width="127" height="111" src="../../assets/camping.png">
                <p>Camping</p>
            </div>
        </div>
        <div class="box">
            <div class="boxContent">
                <img width="128" height="130" src="../../assets/fire.png">
                <p>Camp Fire</p>
            </div>
        </div>
    </div>

    <div class="about">
        <h2>ABOUT</h2>
        <p class="paragraphOne">
            Selamat datang di Xplore, platform penyedia jasa booking tempat wisata terlengkap yang siap batamang pa ngoni for mo xplore dunia. 
            Di Xplore, torang kase berbagai pilihan destinasi menarik yang boleh disesuaikan dengan minat dan kebutuhan. Dengan fitur 
            pemesanan yang komprehensif untuk akomodasi dan aktivitas, torang pastikan ngoni dapa pengalaman wisata yang tak terlupakan. 
            Pilih dari kategori wisata seperti Campfire, Tour Guide, Camping, dan Adventure, semuanya torang rancang for ngoni semua.
            Torang paham kalo setiap perjalanan adalah petualangan unik yang pantas direncanakan dengan baik. Makanya, torang kase antarmuka 
            yang user-friendly dan proses pemesanan yang mudah, supaya ngoni cepat dapa dan booking destinasi wisata impian. 
            Torang berkomitmen untuk memberikan layanan terbaik dan pengalaman wisata yang memuaskan, dari awal sampe akhir perjalanan for ngoni.
            Dengan Xplore, ngoni nyanda cuma menjelajahi tempat baru tapi juga menemukan diri sendiri dan beking kenangan yang ngoni mo inga 
            seumur hidup. Manjo keliling dunia dengan Xplore!
        </p>
        <p class="paragraphTwo">
            Torang paham kalo setiap perjalanan adalah petualangan unik yang pantas direncanakan dengan baik. 
            Makanya, torang kase antarmuka yang user-friendly dan proses pemesanan yang mudah, supaya ngoni 
            cepat dapa dan booking destinasi wisata impian. Torang berkomitmen untuk memberikan layanan terbaik 
            dan pengalaman wisata yang memuaskan, dari awal sampe akhir perjalanan for ngoni.Dengan Xplore, 
            ngoni nyanda cuma menjelajahi tempat baru tapi juga menemukan diri sendiri dan beking kenangan yang 
            ngoni mo inga seumur hidup. Manjo keliling dunia dengan Xplore!
        </p>
    </div>
    

</body>
</html>