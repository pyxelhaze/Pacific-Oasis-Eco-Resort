<?php
session_start();
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
    <link rel="stylesheet" href="styles.css"> <!-- Falls du eine CSS-Datei hast -->
</head>

<body>
    <header>
        <nav class="topnav" id="myTopnav">
            <div class="resortname">
                <a href="../public/index.php" class="headline">AquaVista</a>
                <p class="headline2">Ocean Eco-Resort</p>
            </div>
            <div class="register">
                <ul>
                    <li><span>Hallo, <?php echo htmlspecialchars($_SESSION['username']); ?></span></li>
                    <li><a href="../auth/logout.php">Logout</a></li>
                </ul>
            </div>
            <a href="javascript:void(0);" class="icon standard" onclick="toggleForm()">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
    </header>
    <main>
        <h1>Buchung Erfolgreich!</h1>
        <p>Vielen Dank für Ihre Buchung bei AquaVista Ocean Eco-Resort.</p>
        <p>Wir freuen uns, Sie bald bei uns begrüßen zu dürfen.</p>
        <a href="../public/index.php'">Zurück zur Startseite</a>
    </main>
</body>

</html>