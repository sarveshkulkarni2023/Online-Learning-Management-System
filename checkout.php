<?php 
include('./dbConnection.php');
session_start();
 if(!isset($_SESSION['stuLogEmail'])) {
  echo "<script> location.href='loginorsignup.php'; </script>";
 } else {
  $stuEmail = $_SESSION['stuLogEmail'];
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    
   <title>Checkout</title>
  </head>
  <body>
  <div class="container mt-5">
    <div class="row">
    <div class="col-sm-6 offset-sm-3 jumbotron">
    <h3 class="mb-5">Welcome to E-Learning Payment Page</h3>
    <form method="post" action="./paymentdone.php">
      <div class="form-group row">
       <label for="ORDER_ID" class="col-sm-4 col-form-label">Order ID</label>
       <div class="col-sm-8">
         <input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
          value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
       </div>
      </div>
      <div class="form-group row">
       <label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
       <div class="col-sm-8">
         <input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="<?php if(isset($stuEmail)){echo $stuEmail; }?>" readonly>
       </div>
      </div>
      <div class="form-group row">
       <label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
       <div class="col-sm-8">
        <input title="TXN_AMOUNT" class="form-control" tabindex="10"
          type="text" name="TXN_AMOUNT" value="<?php if(isset($_POST['id'])){echo $_POST['id']; }?>" readonly>
       </div>
      </div>
      <form>
        <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_QQyn5DBvuM1u1A" async> </script> 
      </form>
      <div class="text-center">
       <input value="Check out" type="submit"	class="btn btn-primary"  onclick="window.location.href='./courses.php';">
       <a href="./courses.php" class="btn btn-secondary">Cancel</a>
      
      </div>
     </form>
     <small class="form-text text-muted">Note: Complete Payment by Clicking Checkout Button</small>
     </div>
    </div>
  </div>

    <!-- Jquery and Boostrap JavaScript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Font Awesome JS -->
    <script type="text/javascript" src="js/all.min.js"></script>

    <!-- Custom JavaScript -->
    <script type="text/javascript" src="js/custom.js"></script>

  </body>
  </html>
 <?php } ?>

