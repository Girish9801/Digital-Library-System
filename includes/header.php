<?php if ($_SESSION['login']) { ?>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="logo">DLS: digital library system</a>
            <div class="navbar-links">
                <a id="menu-top" href="dashboard.php" class="navbar-link">DASHBOARD</a>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle navbar-link" id="ddlmenuItem" data-toggle="dropdown">
                        ACCOUNT <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">Profile</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li>
                    </ul>
                </div>
                <a class="navbar-link" href="issued-books.php">ISSUED BOOKS</a>
                <a href="logout.php" class="logout">LOG ME OUT</a>
            </div>
        </div>
    </nav>

<?php } else { ?>
    <nav class="navbar">
        <div class="navbar-container">
            <a href="#" class="logo">DLS : digital library system</a>
            <div class="navbar-links">
                <a href="home.php" class="navbar-link">HOME</a>
                <a href="index.php" class="navbar-link">LOGIN</a>
                <a href="signup.php" class="navbar-link">SIGNUP</a>
                <a href="contactus.php" class="navbar-link">CONTACT US</a>
                <a href="aboutus.php" class="navbar-link">ABOUT US</a>
            </div>
        </div>
    </nav>

<?php } ?>