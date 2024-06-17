<?php
    require '../../config.php';
    session_start();

    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = $_POST['password'];

        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
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
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <img src="../../assets/logo.png" alt="Logo XPLORE">
    </div>

    <div class="section">
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <form action="#" method="POST">
                    <h1>Sign in</h1>
                    <span>use your account</span>
                    <input type="email" name="email" placeholder="Email" required />
                    <input type="password" name="password" placeholder="Password" required />
                    <button type="submit" name="submit">Sign In</button>
                </form>
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
        <p>Created by <span class="bold-text">KAKIGATAL</span>. | @ 2024</p>
    </footer>
</body>

</html>

<script>
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>