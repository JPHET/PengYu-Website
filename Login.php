<!DOCTYPE html>
<html>
<?php include('functions.php') ?>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PengYu-Login</title>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <?php getHeader(); ?>
  <!--Form-->
  <div class="container">
   <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6" id="loginform">
     <h2>Sign In</h2><br>
     <form action="" method="post">
       <div class="form-group">
         <label for="email">Email:</label>
         <input type="email" maxlength="20" class="form-control" id="email" placeholder="Enter email" name="lemail" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required>
       </div>
       <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="psword" placeholder="Enter password" name="lpsword" maxlength="20" required value="<?php if (isset($_POST['psword'])) echo $_POST['psword']; ?>" >
      </div>
      <div class="form-check">
       <label class="form-check-label">
         <input class="form-check-input" type="checkbox" name="remember"> Remember me
       </label>
       <p id="Signup">Don't have an account?<a href="signup.php">Create account</a></p>
     </div>
     <div id="button">
       <center><button type="Submit" name="submit" id="S" value="Login" class="btn btn-primary">Sign In</button></center>
     </div>
   </form>
 </div>

 <div class="col-md-3">

 </div>
</div>
</div>

<!-- phpstart -->
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){ 
  $e=mysqli_real_escape_string($dbcon, $_POST['lemail']);    
  $p=mysqli_real_escape_string($dbcon, $_POST['lpsword']);   

  if($e && $p){
    $q = "SELECT UserID, Fname, Lname, Email, ContactNumber, Access from pengyu_users WHERE (Email='$e' AND psword= '" . SHA1($p) . "')";
    $res = $dbcon->query($q);
    print_r($res);
    if($res->num_rows > 0){
      session_start();
      //here
      $_SESSION['pengyu_details'] = $res->fetch_assoc();
      $dbcon->close();
      if(isset($_SESSION['pengyu_details'])){
          if($_SESSION['pengyu_details']['Access'] == '0'){
            header('location: admin.php');
          }else if($_SESSION['pengyu_details']['Access'] == '1'){
            header('location: index.php');
          }else{
            header('location: index.php');
          }
      }
    }else{
      echo '<center><p>The email address and password could not be found<br>
      Not yet registered?&nbsp;<a href="registration.php">Click here&nbsp</a> to register!</p></center>'; 
    }
  }else{
    echo '<h4><p id="red"> Please try again. </p></h4>';
  }
}

?>

<!-- endphpcode -->
<!-- Footer -->
<?php getFooter(); ?>

<!-- Bootstrap core JavaScript -->
<?php getFooterAssets(); ?>
</body>
</html>
