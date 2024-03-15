<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Travel</title>

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <!--swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--custom css file link -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <section class="header">
        <a href="home.php" class="logo">Travel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="book.php">Book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <div class="heading"
        style="background-image: url('https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <h1>Book Now</h1>
    </div>

    <!-- Booking section starts -->
    <section class="booking">
        <h1 class="heading-title">Book Your Trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputBox">
                    <span>Name:</span>
                    <input type="text" placeholder="Enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>Email:</span>
                    <input type="text" placeholder="Enter your email" name="email">
                </div>
            </div>
            <div class="flex">
                <div class="inputBox">
                    <span>Phone:</span>
                    <input type="number" placeholder="Enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>Address:</span>
                    <input type="text" placeholder="Enter your address" name="address">
                </div>
            </div>
            <div class="flex">
                <div class="inputBox">
                    <span>Where To:</span>
                    <input type="text" placeholder="Place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>How Many:</span>
                    <input type="number" placeholder="Number of guests" name="guests">
                </div>
            </div>
            <div class="flex">
                <div class="inputBox">
                    <span>Arrival Date:</span>
                    <input type="date" name="arrival" lang="en">
                </div>
                <div class="inputBox">
                    <span>Departure Date:</span>
                    <input type="date" name="departure" lang="en">
                </div>
            </div>
            <div class="flex">
                <input type="submit" value="Submit" class="btn" name="send">
            </div>
        </form>
    </section>
    <!-- Booking section ends -->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>About</a>
                <a href="package.php"><i class="fas fa-angle-right"></i>Package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Book</a>
            </div>
            <div class="box">
                <h3>Extra Links</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Ask Questions</a>
                <a href="#"><i class="fas fa-angle-right"></i>About Us</a>
                <a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
            </div>
            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i>+37378763045</a>
                <a href="#"><i class="fas fa-phone"></i>+39377635568</a>
                <a href="#"><i class="fas fa-envelope"></i>example@example.com</a>
                <a href="#"><i class="fas fa-map"></i>MD, Chisinau -2001</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a>
            </div>
        </div>
        <div class="credit">Created by <span>Mr. Alex, Web Designer</span> | All rights reserved </div>
    </section>

    <!-- Swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Custom js file link -->
    <script src="script.js"></script>

</body>

</html>