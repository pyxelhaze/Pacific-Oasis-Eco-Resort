<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrivalDate = isset($_POST['arrivalDate']) ? $_POST['arrivalDate'] : '';
    $departureDate = isset($_POST['departureDate']) ? $_POST['departureDate'] : '';
    $adults = isset($_POST['adults']) ? $_POST['adults'] : '';
    $children = isset($_POST['children']) ? $_POST['children'] : '';

    // Verarbeiten Sie die Formulardaten, z.B. speichern Sie sie in einer Datenbank oder senden Sie eine E-Mail

    echo "Arrival Date: " . htmlspecialchars($arrivalDate) . "<br>";
    echo "Departure Date: " . htmlspecialchars($departureDate) . "<br>";
    echo "Adults: " . htmlspecialchars($adults) . "<br>";
    echo "Children: " . htmlspecialchars($children) . "<br>";
}
