<?php
// variabel om hur den anluter samt med vad
$servername = "localhost";
$username = "root";
$password = 
$dbname = "emails";
$email = $_POST["email"];  // använder post metod för att få data från html

// anslutning
$conn = new mysqli($servername, $username, $password, $dbname);

// kolla anslutning
if($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}


echo "<a href=\"index.html\"><h1 style=\"text-align:center;\">Tack för ditt intresse! Clicka på mig för att gå tillbaka.</h1></a>";


// skriver vad för sql kod som ska in och vad för typ av data samt vilken data
$stmt = $conn->prepare("INSERT INTO emails (emails) VALUES (?)");
$stmt->bind_param("s", $email);
$stmt -> execute();
$stmt -> close();
$conn -> close();
?>
