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

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM user where email = '$email' and password ='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   // echo 'yes';
   header('Location: http://localhost/onlinechat/chat.html');
} else {
    header('Location: http://localhost/onlinechat/index_login.html'); 
}
$conn->close();
?>