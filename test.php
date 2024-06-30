<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "zander"; // Passe das Passwort an
$dbname = "holiday_resort";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful!";
}
