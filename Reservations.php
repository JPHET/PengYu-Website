<?php
session_start();
if(!isset($_SESSION['pengyu_details'])){
  header("location:login.php");
  exit();
}else{
  if($_SESSION['pengyu_details']['Access']==1){
    header("location:Login.php");
    exit();
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<?php include('functions.php');
$reservationID=0;


?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PengYu-Admin</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css"> 
  <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="datepicker/js/formden.js"></script>
  <link rel="stylesheet" href="datepicker/css/bootstrap-iso.css" /> 

  <body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-md  bg-light navbar-light fixed-top" id="mainNav">
      <a class="navbar-brand js-scroll-trigger" href="#"><img src="img/logo.png"><span class="navbar-text">Transport & Tours Services Corp.</span></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="admin.php">
              <i class="fa fa-fw fa-dashboard"></i>
              <span class="nav-link-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="Reservations.php">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">Reservations</span>
            </a>
          </li>

        </ul>
        <ul class="navbar-nav sidenav-toggler">
          <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
              <i class="fa fa-fw fa-angle-left"></i>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-envelope"></i>
              <span class="d-lg-none">Messages
                <span class="badge badge-pill badge-primary">12 New</span>
              </span>
              <span class="indicator text-primary d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">New Messages:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>David Miller</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>Jane Smith</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <strong>John Doe</strong>
                <span class="small float-right text-muted">11:21 AM</span>
                <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item small" href="#">View all messages</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-fw fa-bell"></i>
              <span class="d-lg-none">Alerts
                <span class="badge badge-pill badge-warning">6 New</span>
              </span>
              <span class="indicator text-warning d-none d-lg-block">
                <i class="fa fa-fw fa-circle"></i>
              </span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">New Alerts:</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <span class="text-success">
                  <strong>
                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                  </span>
                  <span class="small float-right text-muted">11:21 AM</span>
                  <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                  <span class="text-danger">
                    <strong>
                      <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
                    </span>
                    <span class="small float-right text-muted">11:21 AM</span>
                    <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <span class="text-success">
                      <strong>
                        <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
                      </span>
                      <span class="small float-right text-muted">11:21 AM</span>
                      <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all alerts</a>
                  </div>
                </li>
                <li class="nav-item">
                  <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
                      <input class="form-control" type="text" placeholder="Search for...">
                      <span class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fa fa-search"></i>
                        </button>
                      </span>
                    </div>
                  </form>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                  </li>
                </ul>
              </div>
            </nav>
            <div class="content-wrapper">
              <div class="container-fluid">



                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Reservation</a>
                  </li>
                  <li class="breadcrumb-item active">Admin</li>
                </ol>
                <div class="container-fluid">
                  <div class="row">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2" method="get">
                      <div class="input-group">
                        <input class="form-control" type="text" name="Search" placeholder="Search for..." value="<?php if(isset($_POST['Search']))echo $_POST['Search'];?>">
                        <span class="input-group-append">
                          <button class="btn btn-primary" type="submit" name="SB">
                            <i class="fa fa-search"></i>
                          </button>
                        </span>
                      </div>
                    </form>
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                      <div class="input-group">
                        <input class="form-control" id="Sdate" name="Sdate" placeholder="MM/DD/YYYY" type="text" maxlength="10"  value="<?php if(isset($_POST['Sdate']))echo $_POST['Sdate'];?>">
                        <span class="input-group-append">
                          <button class="btn btn-primary" type="submit">
                            <i class="fa fa-search"></i>
                          </button>
                        </span>
                      </div>
                    </form>


                  </div>
                </div>

                
                <?php

                function displayTable(){
                  global $dbcon;
                  ?>
                  <form class="form-inline my-2 my-lg-0 mr-lg-2" method="post">
                    <?php
                    if(ISSET($_GET['SB'])){
                      $value = $_GET['Search'];
                      $query="SELECT * FROM reservation where ClientFname LIKE '$value%'";
                    }
                    else{
                      $query = "SELECT * FROM reservation";
                    }
                    $res = $dbcon->query($query);
                    if ($res->num_rows > 0) {

                      echo "<table id='customers'>
                      <tr>
                        <th>ReserveID</th>
                        <th>Client Fname</th>
                        <th>Client Lname</th>
                        <th>Contact No.</th>
                        <th>Destination</th>
                        <th>Date of rent</th>
                        <th>End of rent</th>
                        <th>Pickup Location</th>
                        <th>Starting Price</th>
                        <th>Total Price</th>
                        <th>Status</th>
                      </tr>";
           // output data of each row
                      while($row = $res->fetch_assoc()) {
                        $reservationID=$row["Reservation_ID"];
                        echo 
                        "<tr>
                        <td>" . $row["Reservation_ID"]. "</td>
                        <td>" . $row["ClientFname"]."</td>
                        <td>". $row["ClientLname"]. "</td>
                        <td>" . $row["ContactNumber"]. "</td>
                        <td>" . $row["Destination"]. "</td>
                        <td>" . $row["DateofRent"]. "</td>
                        <td>" . $row["EndofRent"]. "</td>
                        <td>" . $row["PickupLocation"]. "</td>
                        <td>" . $row["StartingPrice"]. "</td>
                        <td>" . $row["TotalPrice"]. "</td>
                        <td>" ?><select class="form-control" id="Stat" name="stat[]" values="<?php if(isset($_POST['Stat']))echo $_POST['Stat'];?>"><?php
                         if($row['Status']==1){ 
                           ?>
                           <option value="1" selected>Pending</option>
                           <option value="2">Paid</option>
                           <option value="3">On Travel</option>
                           <option value="4">Finished</option>
                           <?php
                         }else if($row['Status']==2){
                           ?>
                           <option value="1">Pending</option>
                           <option value="2" selected>Paid</option>
                           <option value="3">On Travel</option>
                           <option value="4">Finished</option>
                           <?php
                         }else if($row['Status']==3){     
                          ?>
                          <option value="1">Pending</option>
                          <option value="2">Paid</option>
                          <option value="3" selected>On Travel</option>
                          <option value="4">Finished</option>
                          <?php
                        }
                        else{
                          ?>
                          <option value="1">Pending</option>
                          <option value="2">Paid</option>
                          <option value="3">On Travel</option>
                          <option value="4" selected>Finished</option>
                          <?php
                        }
                        ?></option>

                      </select><?php "</td>
                    </tr>";
                    ?>

                    <input type="hidden" name="reservationid[]" value="<?php echo $row["Reservation_ID"]; ?>">
                    <?php
                  }
                  echo "</table>";
                } else {
                  echo "0 results";
                }
                ?>

                <button class="btn btn-primary" type="submit" name="Save" id="Save">Save Changes</button>
              </form>
              <?php 
            }
            if(ISSET($_POST['Save'])){
              $i = 0;
              $stat = $_POST['stat'];
              foreach($stat as $st){
                $sql = "UPDATE reservation SET Status='".$st."' WHERE Reservation_ID='".$_POST['reservationid'][$i]."'";
                $result = $dbcon->query($sql);
                if($result=== TRUE){
                 
                } else {
                  echo "error"
                  . mysqli_error($dbcon);
                }
                $i++;
              }
              // Close connection
              displayTable();
            }else{
              displayTable();
            }
            $dbcon->close();
            ?>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
              <div class="container">
                <div class="text-center">
                  <small>Copyright © Your Website 2018</small>
                </div>
              </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
              <i class="fa fa-angle-up"></i>
            </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">PengYu</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">Are you sure you want to log out?</div>
                  <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="Logout.php">Logout</a>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

            <?php getFooterAssets(); ?>
            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="vendor/chart.js/Chart.min.js"></script>
            <script src="vendor/datatables/jquery.dataTables.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin.min.js"></script>
            <!-- Custom scripts for this page-->
            <script src="js/sb-admin-datatables.min.js"></script>
            <script src="js/sb-admin-charts.min.js"></script>

            <script type="text/javascript" src="datepicker/js/jquery-1.11.3.min.js"></script>
            <script type="text/javascript" src="datepicker/js/bootstrap-datepicker.min.js"></script>
            <link rel="stylesheet" href="datepicker/css/bootstrap-datepicker3.css"/>


            <script>
              $(document).ready(function(){
        var date_input=$('input[name="Sdate"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
          format: 'mm/dd/yyyy',
          container: container,
          todayHighlight: true,
          autoclose: true,
        })
      })
    </script>
  </div>
</body>

</html>
