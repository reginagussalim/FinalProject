<?php
// read
function read_data_t($query)
{

    $destination = [];
    global $conn;
    $result = mysqli_query($conn, $query);
    while ($data = mysqli_fetch_assoc($result)) {
        $destination[] = $data;
    }
    return $destination;
}

function read_t($id)
{
    $transaction = read_data_t(
        "SELECT * FROM transaction WHERE idUser='$id'"
    );

    return $transaction;
}

function readDest()
{

    $kafe = read_data_t(
        "SELECT * FROM destination LIMIT 3"
    );

    return $kafe;
}

function create_t($data, $idUser, $idDest)
{
    global $conn;

    $email = $_POST['email'];
    $address = $_POST['address'];
    $guest = (int)$_POST['guest']; 

    $query = "INSERT INTO transaction
              VALUES (null, $guest, '$arrivals', '$leaving', $idUser, $idDest)";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>