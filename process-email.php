<?php
$servername = "localhost";
$username = "root";
$password = "NatgranD123!";
$dbname = "emails";
$email = $_POST["email"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
  }
else{
    echo "connection yes";
}

$stmt = $conn->prepare("INSERT INTO emails (emails) VALUES (?)");
$stmt->bind_param("s", $email);
$stmt -> execute();
$stmt -> close();
$conn -> close();
?>