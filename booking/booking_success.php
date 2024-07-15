<?php
session_start();
$is_logged_in = isset($_SESSION['username']);
if (!isset($_SESSION['username'])) {
    header("Location: ../public/index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Buchung Erfolgreich</title>
    <link rel="stylesheet" href="../public/styles2.css">
</head>

<body>
    <div class="container">
        <?php include '../includes/header.php'; ?>
    </div>
    <div class="booking-success">
        <h1>Booking Successful!</h1>
        <p>Thank you for your booking at AquaVista Ocean Eco-Resort.</p>
        <p>We look forward to welcoming you soon.</p>
        <a class="back" href="../public/index.php">Back to Homepage</a>

    </div>

</body>


</html>