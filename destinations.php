<!DOCTYPE html>
<html lang="en">
<?php include('functions.php'); ?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PengYu-Destinations</title>
  
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" type="text/css" href="css/modern-business.css">
  <link href="css/scrolling-nav.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <script src="vendor/jquery/jquery.min.js"></script>
</head>

<body>
  <?php getHeader(); ?>
  <div id="content" class="animated">

  </div>

  <!-- Pagination -->
  <ul class="pagination justify-content-center">
    <li class="page-item prev">
      <a class="page-link "  href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>

    <?php 
    $sql = "SELECT COUNT(*) from packages";
    $count = $dbcon->query($sql)->fetch_assoc()['COUNT(*)'];
    $pages = ceil($count/6);
    for ($i=1; $i <= $pages; $i++) {  
      ?>
      <li class="page-item">
        <a class="page-link" href="javascript:void(0)" ><?php echo $i; ?></a>
      </li>
      <?php
    }
    ?>
    <li class="page-item next">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>

  </ul>

</div>

<!-- for page -->
<script type="text/javascript">
  $(document).ready(function(){
    $("#content").addClass("fadeIn");
    $("#content").load("lib/dest-contents.php?page=1");
    $('.pagination .page-item:nth-child(2)').addClass('active');
    $('.page-link').click(function(){     
     var page = $(this).text();
     $("#content").removeClass("fadeIn");
     setTimeout(function(){
      $("#content").addClass("fadeIn");
      $('.page-item').removeClass('active');
      var p = parseInt(page) + 1;
      $('.pagination .page-item:nth-child('+ p +')').addClass('active');
      $("#content").load("lib/dest-contents.php?page=" + page);
    },900);
   });
  });
</script>

<?php getFooter(); ?>
<?php getFooterAssets(); ?>

</body>

</html>
