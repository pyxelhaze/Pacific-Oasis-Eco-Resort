<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Verbindung zur Datenbank
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "zander";
    $dbname = "holiday_resort";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $passwordHash = NULL;
    if (!empty($password)) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    }


    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $passwordHash);

    if ($stmt->execute()) {

        header('Location: ../public/index.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
    $conn->close();
}