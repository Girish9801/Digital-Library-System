<?php
session_start();
error_reporting(0);
include('includes/config.php');
if ($_SESSION['login'] != '') {
    $_SESSION['login'] = '';
}
if (isset($_POST['login'])) {
    //code for captcha verification
    if ($_POST["vercode"] != $_SESSION["vercode"] or $_SESSION["vercode"] == '') {
        echo "<script>alert('Incorrect verification code');</script>";
    } else {
        $email = $_POST['emailid'];
        $password = md5($_POST['password']);
        $sql = "SELECT EmailId,Password,StudentId,Status FROM tblstudents WHERE EmailId=:email and Password=:password";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            foreach ($results as $result) {
                $_SESSION['stdid'] = $result->StudentId;
                if ($result->Status == 1) {
                    $_SESSION['login'] = $_POST['emailid'];
                    echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
                } else {
                    echo "<script>alert('Your Account Has been blocked. Please contact admin');</script>";
                }
            }
        } else {
            echo "<script>alert('Invalid Details');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Digital Library | Home</title>

    <!-- ICON-->
    <link rel="icon" type="image/png" href="assets/img/icon.png">


    <!-- CUSTOM STYLE  -->
    <link rel="stylesheet" href="assets/css/index.css">

    <!-- GOOGLE FONTS-->
    <link href='https://fonts.googleapis.com/css?family=Nova Square' rel='stylesheet'>
</head>

<body style="background-image: url('assets/img/background.png'); background-repeat: no-repeat; background-size: cover;">
    >
    <?php include('includes/header.php'); ?>
    <div class="container">
        <h4 class="header-line">USER LOGIN</h4>
        <div class="panel">
            <form role="form" method="post">
                <div class="form-group">
                    <label>Enter Email id</label>
                    <input class="form-control" type="text" name="emailid" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" required autocomplete="off">
                    <p class="help-block"><a href="user-forgot-password.php"> Forgot Password</a></p>
                </div>
                <div class="form-group">
                    <label>Verification code:</label>
                    <div class="captcha-container">
                        <input type="text" class="form-control" name="vercode" maxlength="5" autocomplete="off" required>
                        <img src="captcha.php" class="captcha-image" alt="Captcha">
                    </div>
                </div>
                <button type="submit" name="login" class="btn btn-info">LOGIN</button>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="signup.php" class="signup-link">Register</a>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/custom.js"></script>
    <?php include('includes/footer.php'); ?>
</body>

</html>