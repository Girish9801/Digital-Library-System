<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
  header('location:index.php');
} else { ?>
  <!DOCTYPE html>
  <html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Digital Library | User Dashboard</title>

    <link rel="icon" type="image/png" href="assets/img/icon.png">
    
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <!-- CUSTOM STYLE  -->
    <!-- <link href="assets/css/style.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="assets/css/dashboard.css">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Nova Square' rel='stylesheet'>

  </head>

  <body style="background-image: url('assets/img/dashboard.png'); background-repeat: no-repeat; background-size: cover;">
    <!------MENU SECTION START-->
    <?php include('includes/header.php'); ?>
    <!-- MENU SECTION END-->
    <h4 class="header-line">DASHBOARD</h4>
    <div class="container">
      


      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="alert alert-info back-widget-set text-center">
          <i class="fa fa-bars fa-5x"></i>
          <?php
          $sid = $_SESSION['stdid'];
          $sql1 = "SELECT id from tblissuedbookdetails where StudentID=:sid";
          $query1 = $dbh->prepare($sql1);
          $query1->bindParam(':sid', $sid, PDO::PARAM_STR);
          $query1->execute();
          $results1 = $query1->fetchAll(PDO::FETCH_OBJ);
          $issuedbooks = $query1->rowCount();
          ?>

          <h3><?php echo htmlentities($issuedbooks); ?> </h3>
          Book Issued
        </div>
      </div>

      <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="alert-warning back-widget-set text-center">
          <i class="fa fa-recycle fa-5x"></i>
          <?php
          $rsts = 0;
          $sql2 = "SELECT id from tblissuedbookdetails where StudentID=:sid and RetrunStatus=:rsts";
          $query2 = $dbh->prepare($sql2);
          $query2->bindParam(':sid', $sid, PDO::PARAM_STR);
          $query2->bindParam(':rsts', $rsts, PDO::PARAM_STR);
          $query2->execute();
          $results2 = $query2->fetchAll(PDO::FETCH_OBJ);
          $returnedbooks = $query2->rowCount();
          ?>

          <h3><?php echo htmlentities($returnedbooks); ?></h3>
          Books you have to return
        </div>
      </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php'); ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
  </body>

  </html>
<?php } ?>