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
if (isset($_GET['id'])) {
    $destination_id = $_GET['id'];
} else {
    echo "Destination ID not specified.";
}

$destination = readById($destination_id);

if (isset($_POST["submit"])) {
    if (create_t($_POST, $_SESSION['id'], $destination_id) > 0) {
        echo "
        <script>
          alert('data berhasil ditambahkan');
          document.location.href='history.php';
        </script>
      ";
    } else {
        echo "
        <script>
          alert('data gagal ditambahkan');
          document.location.href='history.php';
        </script>
      ";
    }
}

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="../styles/booking.css">
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
        <h1>Book your trip!</h1>
        <div class="destination">
            <?= $destination[0]['name']?>
        </div>
    </div>

    <!-- section 2 -->
    <div class="section2">
        <form method="POST">
            <label for="full-name">Full Name</label>
            <input type="text" id="full-name" name="full-name">
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            
            <label for="address">Address</label>
            <input type="text" id="address" name="address">
            
            <label for="guest">Guest</label>
            <input type="number" id="guest" name="guest">
            
            <label for="arrivals">Arrivals</label>
            <input type="date" id="arrivals" name="arrivals">
            
            <label for="leaving">Leaving</label>
            <input type="date" id="leaving" name="leaving">
            
            <button type="submit" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
