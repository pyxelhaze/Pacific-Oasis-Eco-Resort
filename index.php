<?php
include 'register.php';
include 'login.php';
$is_logged_in = isset($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Oasis Eco Resort</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/0aa3124d43.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />

</head>

<body>
    <div class="container">
        <?php include 'header.php'; ?>
        <main>
    </div>

    <div class="welcome">
        <p>
            Welcome to AquaVista Eco Ocean-Resort! Step into a realm where sustainability meets luxury, and
            immerse yourself in the extraordinary experience that is AquaVista. Nestled on the shores of a
            pristine, exotic world, our resort is a harmonious blend of cutting-edge technology, exotic marine
            landscapes, and a commitment to environmental conservation.
        </p>
        <div id="hiddenText">
            At AquaVista, every detail has been meticulously designed to transport you to a utopian future where
            ecological responsibility and opulent comfort coexist. Wake up to the gentle lull of ocean waves as
            your eco-friendly suite seamlessly merges with the stunning underwater views.
            <br /><br />
            Our state-of-the-art facilities redefine the boundaries of eco-tourism, providing you with an
            unforgettable adventure. Explore the vibrant coral reefs, rejuvenate your senses at the bio-spa, and
            savor the finest sustainable cuisine prepared by our world-class chefs. Step into a realm where
            sustainability meets luxury, and immerse yourself in the extraordinary experience that is AquaVista.
            Nestled on the shores of a pristine, futuristic world, our resort is a harmonious blend of
            cutting-edge technology, exotic marine landscapes, and a commitment to environmental conservation.
            <br /><br />
            As pioneers in futuristic hospitality, we invite you to embark on a journey where nature and
            technology unite to create a haven unlike any other. AquaVista is not just a resort; it's a vision
            of a future where indulgence and environmental stewardship dance in perfect harmony. Step into a
            realm where sustainability meets luxury, and immerse yourself in the extraordinary experience that
            is AquaVista. Nestled on the shores of a pristine, futuristic world, our resort is a harmonious
            blend of cutting-edge technology, exotic marine landscapes, and a commitment to environmental
            conservation.
            <br /><br />
            Welcome to a tomorrow that begins today. Welcome to AquaVista Eco Ocean-Resort – where dreams meet
            the tides of possibility.
            <br /><br />
        </div>
        <button id="toggleButton">Read More</button>
    </div>

    <div class="line"></div>

    <div class="apartments">Our Bungalows</div>
    <div class="slideshow-container">
        <div class="arrows"></div>
        <div class="slideshow-slide fade">
            <img src="images/houses/1.jpg" alt="Bild 1" />
        </div>
        <div class="slideshow-slide fade">
            <img src="images/houses/2.jpg" alt="Bild 2" />
        </div>
        <div class="slideshow-slide fade">
            <img src="images/houses/3.jpg" alt="Bild 3" />
        </div>
        <div class="slideshow-slide fade">
            <img src="images/houses/4.jpg" alt="Bild 4" />
        </div>
        <div class="slideshow-slide fade">
            <img src="images/houses/5.jpg" alt="Bild 5" />
        </div>
        <div class="slideshow-slide fade">
            <img src="images/houses/6.jpg" alt="Bild 6" />
        </div>
        <div class="slideshow-slide fade">
            <img src="images/houses/7.jpg" alt="Bild 7" />
        </div>
        <div class="slideshow-slide fade">
            <img src="images/houses/8.jpg" alt="Bild 8" />
        </div>
    </div>

    <div class="line"></div>

    <div class="apartments_details">
        <?php include 'apartment_details.php'; ?>
    </div>
    </main>
    </div>

    <div class="modal" id="modal-register">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-header">
                <div class="title">
                    Register </div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body">
                <h3>User Creation </h3>
                <form id="registrationForm" method="post" action="register.php">
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="password" placeholder="Password (optional)" name="password">
                    <button type="submit">Register</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-login">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-header">
                <div class="title">Login</div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body">
                <h3>LogIn </h3>
                <form id="registrationForm" method="post" action="login.php">
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="password" placeholder="Password (optional)" name="password">
                    <button type="submit">LogIn</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-error">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-header">
                <div class="title">
                    Please Login to book
                </div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body">
                <h3>LogIn </h3>
                <form id="registrationForm" method="post" action="login.php">
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="password" placeholder="Password (optional)" name="password">
                    <button type="submit">LogIn</button>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-invalid">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-header">
                <div class="title">
                    Invalid username or password
                </div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body">
                <h3>Please <button id="login-button"><a href="#" data-modal-target="#modal-login">Login</a></button> or
                    <button id="register-button"><a href="#" data-modal-target="#modal-register">Register</a></button>
                </h3>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-time">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-body">
                <h2>Das Anreisedatum darf nicht in der Vergangenheit liegen.</h2>
                <button data-close-button class="close-button">Ok</button>
            </div>
        </div>
    </div>

    <div class="modal" id="modal-overlap">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-body">
                <h2>You already have a booking in this period.</h2>
                <button data-close-button class="close-button">Ok</button>
            </div>
        </div>
    </div>

    <div id="overlay"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="script.js"></script>
    <script>
    // has to be in html because of php-parsing
    $(function() {
        // Check if there is a booking error in the session
        <?php if (isset($_SESSION['booking_error'])) : ?>
        openModal(document.querySelector('#modal-error'));
        <?php unset($_SESSION['booking_error']);
            endif; ?>
    });
    $(function() {
        // when there is an invalid entry
        <?php if (isset($_SESSION['invalid']) && $_SESSION['invalid'] === true) : ?>
        openModal(document.querySelector('#modal-invalid'));
        <?php unset($_SESSION['invalid']);
            endif; ?>
    });
    $(function() {
        // when the arrival time is before actual date
        <?php if (isset($_SESSION['booking-time'])) : ?>
        openModal(document.querySelector('#modal-time'));
        <?php unset($_SESSION['booking_time']);
            endif; ?>
    });
    $(function() {
        // when there is a booking overlap
        <?php if (isset($_SESSION['booking-overlap']) && $_SESSION['booking-overlap'] === true) : ?>
        openModal(document.querySelector('#modal-overlap'));
        <?php unset($_SESSION['booking-overlap']);
            endif; ?>
    });
    </script>
</body>

</html>