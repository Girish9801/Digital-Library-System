<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['change'])) {
  //code for captach verification
  if ($_POST["vercode"] != $_SESSION["vercode"] or $_SESSION["vercode"] == '') {
    echo "<script>alert('Incorrect verification code');</script>";
  } else {
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $newpassword = md5($_POST['newpassword']);
    $sql = "SELECT EmailId FROM tblstudents WHERE EmailId=:email and MobileNumber=:mobile";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
      $con = "update tblstudents set Password=:newpassword where EmailId=:email and MobileNumber=:mobile";
      $chngpwd1 = $dbh->prepare($con);
      $chngpwd1->bindParam(':email', $email, PDO::PARAM_STR);
      $chngpwd1->bindParam(':mobile', $mobile, PDO::PARAM_STR);
      $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
      $chngpwd1->execute();
      echo "<script>alert('Your Password succesfully changed');</script>";
    } else {
      echo "<script>alert('Email id or Mobile no is invalid');</script>";
    }
  }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Digital Library | Forgot Password </title>


  <link rel="icon" type="image/png" href="assets/img/icon.png">


  <!-- CUSTOM STYLE  -->
  <link rel="stylesheet" href="assets/css/user-forgot-password.css">

  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Nova Square' rel='stylesheet'>

  <script type="text/javascript">
    function valid() {
      if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
        alert("New Password and Confirm Password Field do not match  !!");
        document.chngpwd.confirmpassword.focus();
        return false;
      }
      return true;
    }
  </script>

</head>

<body>
  <!------MENU SECTION START-->
  <?php include('includes/header.php'); ?>
  <!-- MENU SECTION END-->
  <div class="container">
    <h4 class="header-line">User Password Recovery</h4>

    <!--LOGIN PANEL START-->
    <div class="panel panel-info">
      <div class="panel-body">
        <form role="form" name="chngpwd" method="post" onSubmit="return valid();">

          <div class="form-group">
            <label>Enter Reg Email id</label>
            <input class="form-control" type="email" name="email" required autocomplete="off" />
          </div>

          <div class="form-group">
            <label>Enter Reg Mobile No</label>
            <input class="form-control" type="text" name="mobile" required autocomplete="off" />
          </div>

          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="password" name="newpassword" required autocomplete="off" />
          </div>

          <div class="form-group">
            <label>Confirm Password</label>
            <input class="form-control" type="password" name="confirmpassword" required autocomplete="off" />
          </div>
          <div class="form-group">
            <label>Verification code:</label>
            <div class="captcha-container">
              <input type="text" class="form-control" name="vercode" maxlength="5" autocomplete="off" required>
              <img src="captcha.php" class="captcha-image" alt="Captcha">
            </div>
          </div>

          <button type="submit" name="change" class="btn btn-info">Change Password</button> | <a class="login" href="index.php">Login</a>
        </form>
      </div>
    </div>
  </div>
  <!---LOGIN PABNEL END-->

  <!-- CONTENT-WRAPPER SECTION END-->
  <?php include('includes/footer.php'); ?>
  <!-- FOOTER SECTION END-->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS  -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- CUSTOM SCRIPTS  -->
  <script src="assets/js/custom.js"></script>

</body>

</html>