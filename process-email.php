<?php
// variabel om hur den anluter samt med vad
$servername = "localhost";
$username = "root";
$password = "NatgranD123!";
$dbname = "emails";
$email = $_POST["email"];  // använder post metod för att få data från html

// anslutning
$conn = new mysqli($servername, $username, $password, $dbname);

// kolla anslutning
if($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
  }
else{
    echo "connection yes";
}

// skriver vad för sql kod som ska in och vad för typ av data samt vilken data
$stmt = $conn->prepare("INSERT INTO emails (emails) VALUES (?)");
$stmt->bind_param("s", $email);
$stmt -> execute();
$stmt -> close();
$conn -> close();
?>