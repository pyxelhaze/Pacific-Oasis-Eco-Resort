<?php
$servername = "localhost"; // Hostname der Datenbank
$username = "root"; // Benutzername für die Datenbank
$password = "zander"; // Passwort für die Datenbank
$dbname = "holiday_resort"; // Name der Datenbank

// Verbindung zur Datenbank herstellen
$conn = new mysqli($servername, $username, $password, $dbname);

// Überprüfen, ob die Verbindung erfolgreich war
if ($conn->connect_error) {
    die("Verbindung zur Datenbank fehlgeschlagen: " . $conn->connect_error);
}

// UTF-8 für die korrekte Darstellung von Sonderzeichen setzen
$conn->set_charset("utf8");

// Wenn die Verbindung erfolgreich war, kannst du hier Queries ausführen