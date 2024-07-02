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
    <nav class="topnav" id="myTopnav">
        <div class="headblock">
            <div class="resortname">
                <a href="../public/index.php" class="headline">AquaVista</a>
                <p class="headline2">Ocean Eco-Resort</p>
            </div>

            <div class="register_buttons">
                <?php if ($is_logged_in) : ?>
                <button class="greeting">Hello <?php echo htmlspecialchars($_SESSION['username']); ?></button>
                <button class="logout"> <a href="../auth/logout.php">Logout</a></button>
                <?php else : ?>
                <button class="register"><a href="#" data-modal-target="#modal-register">Register</a></button>
                <button class="login"><a href="#" data-modal-target="#modal-login">Login</a></button>
                <?php endif; ?>
            </div>
        </div>

    </nav>
    <div class="booking-success">
        <h1>Booking Successful!</h1>
        <p>Thank you for your booking at AquaVista Ocean Eco-Resort.</p>
        <p>We look forward to welcoming you soon.</p>
        <a class="back" href="../public/index.php">Back to Homepage</a>

    </div>

</body>


</html>