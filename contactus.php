<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Digital Library System</title>
    <link rel="stylesheet" href="assets/css/contactus.css">
    <link rel="icon" type="image/png" href="assets/img/icon.png">
    <link href='https://fonts.googleapis.com/css?family=Nova Square' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/2f4be6bad1.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header-section">
        <div class="header-content">
            <h1>Contact Us</h1>
            <p>If you have any questions or feedback, please feel free to reach out to us. We would love to hear from you!</p>
        </div>
    </header>

    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p>Get in touch with us via the following methods:</p>
                <ul>
                    <li><i class="fa-solid fa-phone"></i> Phone: +91 9234567890</li>
                    <li><i class="fa-solid fa-envelope"></i> Email: dls@gmail.com</li>
                    <li><i class="fa-solid fa-map-marker"></i> Address: Sharnbasva University Kalburgi</li>
                </ul>
                <div class="social-media">
                    <h3>Connect with us:</h3>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <h2>Send us a message</h2>
                <form action="#" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>
</body>

</html>
