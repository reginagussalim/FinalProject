<?php
    require '../../config.php';
    include '../../controller/userController.php';
    session_start();

    if (isset($_POST["submit"])) {
      if (create($_POST) > 0) {
          echo "
          <script>
            alert('data berhasil ditambahkan');
            document.location.href='login.php';
          </script>
        ";
      } else {
          echo "
          <script>
            alert('data gagal ditambahkan');
            document.location.href='login.php';
          </script>
        ";
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login Card</title>
        <link rel="stylesheet" href="../styles/new-login.css">
    </head>
    <body>
        <div class="navbar">
            <img src="../../assets/logo.png" alt="Logo XPLORE" />
        </div>
        <div class="login-card">
            <h2>Login</h2>
            <form action="#" method="POST">
              
                <input type="text" name="name" placeholder="Name" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <input type="submit" name="submit" />
            </form>
        </div>
    </body>
</html>
