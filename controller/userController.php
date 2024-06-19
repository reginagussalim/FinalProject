<?php

function create($data)
{
    global $conn;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 'User';

    $query = "INSERT INTO users VALUES (null,'$name','$email','$password','$role')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

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
        "SELECT * FROM users"
    );

    return $kafe;
}

?>