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

$id_user_send = $_POST['id_user_send'];
$id_user_recive = $_POST['id_user_recive'];
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tab[] = array(
                    'id' => $row["id"],
                    'username' => $row["username"],
                    'email' => $row["email"]) ;
    }
    return $tab;
} else {
    echo "0 results";
}
$conn->close();
?>