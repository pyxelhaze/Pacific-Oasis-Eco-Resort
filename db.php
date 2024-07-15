<?php
$servername = "localhost"; // Hostname der Datenbank
$username = "root"; // Benutzername für die Datenbank
$password = "zander"; // Passwort für die Datenbank
$dbname = "holiday_resort"; // Name der Datenbank


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}


$conn->set_charset("utf8");