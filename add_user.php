<?php

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "chat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO user (username, email, password)
VALUES ('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    header('Location: http://localhost/onlinechat/index_login.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>