<?php
    require '../../config.php';
    session_start();

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['email'];
            header('Location: ../pages/test.php');
        } else {
            echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Card</title>
        <link rel="stylesheet" href="../styles/test.css">
    </head>
    <body>
        <div class="navbar">
            <img src="../../assets/logo.png" alt="Logo XPLORE" />
        </div>
        <div class="login-card">
            <h2>Login</h2>
            <form action="#" method="POST">
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="submit" name="submit" />
            </form>
        </div>
    </body>
</html>
