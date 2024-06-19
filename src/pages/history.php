<?php
require '../../config.php';
include '../../controller/transactionController.php';
include '../../controller/destinationController.php';
session_start();

$transaction = read_t($_SESSION['id']);

if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
    <link rel="stylesheet" href="../styles/history.css">
</head>
<body>
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

    <div class="header">
        <h1>History</h1>
    </div>

    <div class="historyCard">
        <div class="card-container">
        <?php foreach ($transaction as $trs) : ?>
            <?php 
                $dest = readById($trs['idDestination']);
            ?>
            <div class="card">
                <div class="cardContent">
                    <img src="<?= '../../assets/destination/' . $dest[0]['link_gambar'] ?>" alt="Bunaken">
                    <div class="place">
                        <h3><?= $dest[0]['name']; ?></h3>
                        <p><?= $dest[0]['desc']; ?></p>
                        <p><?= $trs['guest'] . ' orang' ?></p>
                    </div>
                    <div class="statusProses">
                        <p>Check your email!</p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>

</body>
</html>