<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Verbindung zur Datenbank
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "zander";
    $dbname = "holiday_resort";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

    // Verbindung prüfen
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL-Befehl zum Abrufen des Benutzers
    $sql = "SELECT id, password FROM users WHERE username = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $storedPasswordHash);

    if ($stmt->fetch()) {
        // check pw 
        if (is_null($storedPasswordHash) || password_verify($password, $storedPasswordHash)) {
            // Benutzer ist eingeloggt
            $_SESSION['user_id'] = $id;
            $_SESSION['username'] = $username;

            // save login time
            $stmt->close();
            $sql = "INSERT INTO user_logins (user_id) VALUES (?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id);
            $stmt->execute();

            // Nach erfolgreichem Login zur index.php weiterleiten
            header('Location: index.php');
            exit();
        } else {
            $_SESSION['invalid'] = true;
        }
    } else {
        $_SESSION['invalid'] = true;
    }

    $stmt->close();
    $conn->close();

    // important to get back to index.php
    header('Location: index.php');
    exit();
}