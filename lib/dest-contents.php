<!-- dest-contents.php -->
<?php require('mysqli_connect.php'); ?>

<div class="container">
  <h1 class="mt-4 mb-3">Destinations
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.html">Home</a>
    </li>
    <li class="breadcrumb-item active">Destinations</li>
  </ol>


  <!-- Page Content -->

  <!-- Page Heading/Breadcrumbs -->

  <div class="row">
    <?php
    $max = $_REQUEST['page'] * 6;
    $sql = "SELECT * from packages";
    $destinations = $dbcon->query($sql);
    
    if($destinations->num_rows > 0) {
      $dest_array = array();
      $num = 0;
      $page = 1;
      while($row = $destinations->fetch_assoc()){
        $num++;
        $dest_array["dest" . $page][$num] = $row;
        if($num % 6 == 0) $page++;
      }

      $destinations_array = $dest_array["dest" . $_REQUEST['page']];

      foreach($destinations_array as $desti){
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="<?php echo 'destination-packages.php?package=' . $desti["Package_ID"];?>" class="img-overlay">
              <img class="card-img-top" src="img/services/<?php echo $desti["img_src"]; ?>" alt="">
              <div class="price-overlay"><span>P<?php echo $desti["Starting_Price"]; ?>/pax</span></div>
            </a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $desti["Destination"]; ?></a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>

        <?php 
      }
    }
    ?>
  </div>

