<?php
require '../../config.php';
include '../../controller/destinationController.php';
session_start();

$destination = read();

if (!isset($_SESSION['username'])) {
    header("Location: ../auth/login.php");
    exit();
}
if ($_SESSION['role'] != 'Admin') {
    header("Location: ../auth/login.php");
    exit();
}

if (isset($_POST["submit"])) {
    if (create($_POST) > 0) {
        echo "
        <script>
          alert('data berhasil ditambahkan');
          document.location.href='dashboard.php';
        </script>
      ";
    } else {
        echo "
        <script>
          alert('data gagal ditambahkan');
          document.location.href='dashboard.php';
        </script>
      ";
    }
}

if (isset($_POST["submit-edit"])) {
    if (update($_POST) > 0) {
        echo "
        <script>
          alert('data berhasil diubah');
          document.location.href='dashboard.php';
        </script>
      ";
    } else {
        echo "
        <script>
          alert('data gagal diubah');
          document.location.href='dashboard.php';
        </script>
      ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../styles/dashboard.css">

    <style>
        /* Additional CSS for the logout button */
        .logout-button {
            position: fixed;
            bottom: 10px;
            left: 10px;
            padding: 10px 20px;
            background-color: #f44336; /* Red color for logout */
            color: white;
            text-decoration: none;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .logout-button:hover {
            background-color: #cc0000; /* Darker red on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Destination Management</h1>
        <button id="addDestinationButton" class="add-button" onClick="showAddModal()">Add Destination</button>
        <div class="destination-list">
            <h2>All Destinations</h2>
            <table id="destinationTable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($destination as $dest) : ?>
                    <tr>
                        <td><?= $dest['name']; ?></td>
                        <td><?= $dest['desc']; ?></td>
                        <td>
                            <img src=<?= '../../assets/destination/' . $dest['link_gambar'] ?> height=100 width 100>
                        </td>
                        <td class="actions">
                            <a href="../../controller/delete.php?id=<?= $dest["id"] ?>">
                                <button class="delete">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- The Modal -->
    <div id="addDestinationModal" class="modal hidden">
        <div class="modal-content">
            <span class="close" onClick="hideAddModal()">&times;</span>
            <h2 id="modalTitle">Add / Edit Destination</h2>
            <form id="destinationForm" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="destinationId" name="id">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="desc">Description:</label>
                    <textarea id="desc" name="desc" required></textarea>
                </div>
                <div>
                    <label for="gambar">Image Link:</label>
                    <input type="file" id="gambar" name="gambar" required>
                </div>
                <button type="submit" name="submit">Save Destination</button>
            </form>
        </div>
    </div>

    <!-- Logout Button -->
    <a href="../auth/logout.php" class="logout-button">Logout</a>

    <script src="../script/dashboard.js"></script>
</body>
</html>
