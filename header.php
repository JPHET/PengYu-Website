<?php 
session_start();
if(!ISSET($_SESSION['pengyu_details'])){ 
// <!-- Navigation -->
  ?>
  <nav class="navbar navbar-expand-md  bg-light navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php #page-top"><img src="img/logo.png"><span class="navbar-text">Transport & Tours Services Corp.</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="destinations.php?page=1">Destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="destination-packages.php">Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="Login.php">Sign In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
}else{ 
  // <!-- User Navigation -->
  ?>
  <nav class="navbar navbar-expand-md  bg-light navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php #page-top"><img src="img/logo.png"><span class="navbar-text">Transport & Tours Services Corp.</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="destinations.php?page=1">Destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="destination-packages.php">Packages</a>
          </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#exampleModal">Logout</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
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
    <?php
  }
  ?>
  

