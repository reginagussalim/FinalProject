<?php
// read
function read_data($query)
{

    $destination = [];
    global $conn;
    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_assoc($result)) {
        $destination[] = $data;
    }
    return $destination;
}

function read()
{

    $kafe = read_data(
        "SELECT * FROM destination"
    );

    return $kafe;
}

function readById($id)
{

    $kafe = read_data(
        "SELECT * FROM destination WHERE id='$id'"
    );

    return $kafe;
}

function readTop()
{

    $kafe = read_data(
        "SELECT * FROM destination LIMIT 3"
    );

    return $kafe;
}

function create($data)
{
    global $conn;

    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO destination VALUES (
            null,
            '$name',
            '$desc',
            '$gambar'
        )";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function update($data)
{
    global $conn;

    $id = $_POST['id'];
    $namaKafe = $_POST['nama'];
    $jarak = $_POST['jarak'];
    $harga = $_POST['harga'];
    $fasilitas = $_POST['fasilitas'];
    $keindahan = $_POST['keindahan'];
    $segiRasa = $_POST['segiRasa'];
    $hasBuku = isset($_POST['hasBuku']) ? 1 : 0;
    $hasWifi = isset($_POST['hasWifi']) ? 1 : 0;
    $hasPermainan = isset($_POST['hasPermainan']) ? 1 : 0;
    $alamat = $_POST['alamat'];
    $gambar = null;

    if ($_FILES['gambar']['name']) {
        $gambar = upload();
    }

    $query = "UPDATE kafe SET
            namaKafe = '$namaKafe', 
            jarak = '$jarak', 
            harga = '$harga', 
            fasilitas = '$fasilitas', 
            keindahan = '$keindahan', 
            segiRasa = '$segiRasa', 
            hasWifi = '$hasWifi', 
            hasPermainan = '$hasPermainan',
            hasBuku = '$hasBuku',
            alamat = '$alamat'
            WHERE id = '$id'";

    mysqli_query($conn, $query);

    if ($gambar) {
        $query = "UPDATE kafe SET gambar = '$gambar' WHERE id = '$id'";
        mysqli_query($conn, $query);
    }

    return mysqli_affected_rows($conn);
}

function delete_dest($id)
{
    global $conn;
    $query = "DELETE FROM destination WHERE id='$id'";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload()
{

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    $ekstansiFileAcc = ['jpg', 'jpeg', 'png'];

    // cek apakah tidak ada gambar yang diupload 
    if ($error === 4) {
        echo "<script>
				  	alert('pilih gambar terlebih dahulu');
				  </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $eksistensiGambar = explode('.', $namaFile);
    $eksistensiGambar = strtolower(end($eksistensiGambar));
    if (!in_array($eksistensiGambar, $ekstansiFileAcc)) {
        echo "<script>
				  	alert('yang anda upload bukan gambar');
				  </script>";
    }

    if ($ukuranFile > 5000000) {
        echo "<script>
				  	alert('terlalu besar bro');
				  </script>";
        return false;
    }

    move_uploaded_file($tmpName, __DIR__ . '/../assets/destination/' . $namaFile);

    return $namaFile;
}


?>