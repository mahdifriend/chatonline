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

$text = $_POST['text'];
$id_user_send = $_POST['id_user_send'];
$id_user_recive = $_POST['id_user_recive'];

$sql = "INSERT INTO message (text, id_user_send, id_user_recive)
VALUES ('$username', '$id_user_send', '$id_user_recive')";

if ($conn->query($sql) === TRUE) {
    echo "true";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>