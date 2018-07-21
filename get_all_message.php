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
$sql = "SELECT * FROM message where id_user_send = '$id_user_send' and id_user_recive = '$id_user_recive'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $tab[] = array(
                    'id_message' => $row["id_message"],
                    'id_user_send' => $row["id_user_send"],
                    'id_user_recive' => $row["id_user_recive"],
                    'text' => $row["text"],
                    'date_envoie' => $row["date_envoierecive"]) ;
    }
    return $tab;
} else {
    echo $id_user_send;
    echo $id_user_recive;
    echo "0 results";
}
$conn->close();
?>