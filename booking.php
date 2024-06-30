<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    $_SESSION['booking_error'] = 'Bitte loggen Sie sich ein, um eine Buchung vorzunehmen.';
    header("Location: index.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];

    // check fields
    if (empty($check_in) || empty($check_out) || empty($adults)) {
        echo "All fields are required.";
        exit;
    }

    // convert dates to DateTime objects for comparison
    $current_date = new DateTime();
    $arrival_date = new DateTime($check_in);

    // compare arrival date with current date
    if ($arrival_date < $current_date) {
        $_SESSION['booking-time'] = 'Das Anreisedatum darf nicht in der Vergangenheit liegen.';
        header("Location: index.php");
        exit;
    }

    // getting user id from session
    $username = $_SESSION['username'];
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($user_id);
    $stmt->fetch();
    $stmt->close();


    // check for overlapping bookings
    $stmt = $conn->prepare("SELECT COUNT(*) FROM bookings WHERE user_id = ? AND (check_in < ? AND check_out > ?)");
    $stmt->bind_param("iss", $user_id, $check_out, $check_in);
    $stmt->execute();
    $stmt->bind_result($overlapping_count);
    $stmt->fetch();
    $stmt->close();

    if ($overlapping_count > 0) {
        $_SESSION['booking-overlap'] = true;
        header("Location: index.php");
        exit;
    }

    // send data to db
    $stmt = $conn->prepare("INSERT INTO bookings (user_id, check_in, check_out, adults, children) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("issii", $user_id, $check_in, $check_out, $adults, $children);

    if ($stmt->execute()) {
        echo "Booking successful!";
        header("Location: booking_success.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}