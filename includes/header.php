<header>
    <nav class="topnav" id="myTopnav">
        <div class="headblock">
            <div class="resortname">
                <a href="..public/index.php" class="headline">AquaVista</a>
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
        <a href="javascript:void(0);" class="icon standard" onclick="toggleForm()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>

    <form id="bookingForm" class="myForm" method="POST" action="../booking/booking.php" style="display: none">
        <div class="booking_details">
            <div class="dates">
                <div class="date1">
                    <label for="arrivalDate">Arrival:</label>
                    <input type="date" id="arrivalDate" name="check_in" required />
                </div>
                <div class="date2">
                    <label for="departureDate">Departure:</label>
                    <input type="date" id="departureDate" name="check_out" required />
                </div>
            </div>
            <div class="people">
                <div class="adults">
                    <label for="adults">Adults:</label>
                    <div class="input-group">
                        <span class="minus">-</span>
                        <input type="number" id="adults" name="adults" value="2" min="1" readonly />
                        <span class="plus">+</span>
                    </div>
                </div>
                <div class="children">
                    <label for="children">Children:</label>
                    <div class="input-group">
                        <span class="minus">-</span>
                        <input type="number" id="children" name="children" value="0" min="0" readonly />
                        <span class="plus">+</span>
                    </div>
                </div>
            </div>
        </div>

        <button class="booknow" type="submit" id="bookNowButton">Book Now</button>

    </form>
</header>