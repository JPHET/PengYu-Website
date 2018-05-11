<!DOCTYPE html>
<html>
<head>
	<title>PengYu-SignUp</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom styles for this template -->
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <?php include('functions.php') ?>
  <?php getHeader(); ?>
  <div id="alert">
    <div class="container">
      <div class="rows">
        <div class="alert alert-success">
          <strong>Success!</strong> You have successfully registered an account. You can now Login and pick the location that you want.
        </div>
      </div>
    </div>
  </div>


  <div class="container">
   <div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6" id="signupform">
     <h2>Sign Up</h2><br>
     <form action="" method="post">
       <div class="form-group">
         <label for="FirstName">First Name:</label>
         <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" maxlength = "20"
         value="<?php if(isset($_POST['fname']))echo $_POST['fname'];?>" required>
       </div>
       <div class="form-group">
        <label for="LastName">Last Name:</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" maxlength = "20"
        value="<?php if(isset($_POST['lname']))echo $_POST['lname'];?>" required>
      </div>
      <div class="form-group">
        <label for="addr">Address:</label>
        <input type="text" class="form-control" id="addr" placeholder="Enter Address" name="addr" maxlength = "50"
        value="<?php if(isset($_POST['addr']))echo $_POST['addr'];?>" required>
      </div>
      <div class="form-group">
        <label for="Cnumber">Contact No.:</label>
        <input type="text" class="form-control" id="Cno" placeholder="Enter your Contact number" name="Cno" maxlength = "11"
        value="<?php if(isset($_POST['Cno']))echo $_POST['Cno'];?>" required>
      </div>

      <div class="form-group">
       <label for="email">Email:</label>
       <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" maxlength = "70"
       value="<?php if(isset($_POST['email']))echo $_POST['email'];?>" required>
     </div>
     <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="psword" placeholder="Enter password" name="psword" maxlength = "20"
      value="<?php if(isset($_POST['psword']))echo $_POST['psword'];?>" required>
    </div>
    <div class="form-group">
      <label for="pwd">Retype Password:</label>
      <input type="password" class="form-control" id="rpsword" placeholder="Retype your Password" name="rpsword" maxlength = "20"
      value="<?php if(isset($_POST['rpsword']))echo $_POST['rpsword'];?>" required>
    </div>
    <label class="form-check-label">
     <center><input class="form-check-input" type="checkbox" name="remember">Yes, I would like to hear about PengYu's exclusive deals and discounts
     </label></center>
     <div id="button">
       <center><button type="submit" class="btn btn-primary" id="S" name="submit" method="post">Sign Up</button></center>
     </div>

   </form>
 </div>

 <div class="col-md-3">

 </div>
</div>
</div>

<?php
if (isset($_POST['submit'])){
  $e=$_POST['email'];
  $q="SELECT * from pengyu_users WHERE Email='$e'";
  $result=$dbcon->query($q);
  if($result->num_rows > 0){
    echo "<script type='text/javascript'>alert('Email address is already been used.');</script>";
  }else{
    $fn=$_POST['fname'];
    $ln=$_POST['lname'];
    $Cn=$_POST['Cno'];
    $Ad=$_POST['addr'];

    if($_POST['psword']==$_POST['rpsword']){
      $p=$_POST['psword'];

      $q="INSERT INTO pengyu_users(Email,psword,Lname,Fname,Address,ContactNumber,Access)values('$e',SHA1('$p'),'$ln','$fn','$Ad','$Cn','1')";
      //insert and update
      $result=$dbcon->query($q);
        // to know result
      if($result === TRUE){
            // echo "<script type='text/javascript'>alert('Registration Success');</script>"; ?>
            <style type="text/css">#alert{
              margin-top:100px;
              opacity:100;
              margin-bottom:0px;
            }</style>
            <?php
          }else{
            echo "<script type='text/javascript'>alert('Registration failed due to system failure. Please try again. Sorry for the inconvience.');</script>";
          }
        }else{
          echo "<script type='text/javascript'>alert('Password not match.');</script>";
        }
        $dbcon->close();
      }
    }
    ?>
    <?php getFooter(); ?>
  </body>
  </html>