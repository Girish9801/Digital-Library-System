<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Library System</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="icon" type="image/png" href="assets/img/icon.png">
    <link href='https://fonts.googleapis.com/css?family=Nova Square' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/2f4be6bad1.js" crossorigin="anonymous"></script>
</head>
</head>

<body>
    <header class="hero-section">
        <div class="hero-content">
            <a href="contactus.php" class="contact-icon"><i class="fa-sharp fa-solid fa-phone-volume"></i></a>
            <span class="contact">contact</span>
            <a href="aboutus.php" class="about-icon"><i class="fa-solid fa-address-card "></i></a>
            <span class="about">about</span>
            <a href="adminlogin.php" class="admin-icon"><i class="fa-solid fa-user-tie "></i></a>
            <span class="admin">admin</span>
            <h1>Welcome to DLS</h1>
            <p>Effortless book management for library</p>
            <a href="signup.php" class="cta-button">Get Started</a>
            <div style="margin-top: 3px;"><a href="index.php" class="login-button">LOGIN</a></div>
        </div>
    </header>

    <section class="features-section">
        <div class="feature">
            <i class="fa-solid fa-book  fa-2x"></i>
            <h2>Manage Books</h2>
            <p>Add, update, and organize books in your library</p>
        </div>
        <div class="feature">
            <i class="fas fa-search  fa-2x"></i>
            <h2>Quick Search</h2>
            <p>Efficiently find books using advanced search capabilities</p>
        </div>
        <div class="feature">
            <i class="fas fa-user  fa-2x"></i>
            <h2>User Accounts</h2>
            <p>Create and manage user accounts for library members</p>
        </div>
    </section>

    <section class="latest-updates-section">
        <h2>Latest Updates</h2>
        <div class="latest-updates-container">
            <div class="latest-updates-container">
                <div class="latest-update">
                    <h3>New Feature: Online Book Reservations</h3>
                    <p>We are excited to announce the launch of our new online book reservation system. Now, library members can easily reserve books through our website or mobile app.</p>
                </div>
                <div class="latest-update">
                    <h3>Library Closure Notice</h3>
                    <p>Please note that the library will be closed for maintenance from June 20th to June 25th. We apologize for any inconvenience caused.</p>
                </div>
            </div>
    </section>

    <section class="new-arrivals-section">
        <h2>New Arrivals</h2>
        <div class="new-arrivals-container">
            <div class="new-arrival">
                <h3>Big Data For Beginners</h3>
                <p>by Vince Reynolds</p>
            </div>
            <div class="new-arrival">
                <h3>Introduction to Machine Learning with Python</h3>
                <p>by Andreas C. Müller, Sarah Guido</p>
            </div>
        </div>
    </section>


    <?php include('includes/footer.php'); ?>
</body>

</html>