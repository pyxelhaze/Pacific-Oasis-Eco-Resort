<?php
session_start();

if (isset($_SESSION['user_id'])) {
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

    // Logout-Zeit in der DB speichern
    $user_id = $_SESSION['user_id'];
    $sql = "UPDATE user_logins SET logout_time = CURRENT_TIMESTAMP WHERE user_id = ? ORDER BY login_time DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

// Sitzung beenden und zur Startseite weiterleiten
session_destroy();
header("Location: ../public/index.php");
exit();