<!DOCTYPE html>
<html lang="en">
<?php include('functions.php'); ?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PengYu</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/scrolling-nav.js"></script>
  </head>

  <body id="page-top">
 

<?php getHeader(); ?>

   <!--Carousel-->
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
   </ul>
    
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/ilocos.png" alt="Ilocos" >
    </div>
    <div class="carousel-item">
      <img src="img/manila.png" alt="Manila">
    </div>
    <div class="carousel-item">
      <img src="img/sagada.png" alt="Sagada">
    </div>

  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


    <header class="text-black">
      <div class="container text-center">
        <h1>PengYu Transport & Tours Services Corporation</h1>
        <p class="lead">We offer the best transport service in a low price and making your travel safe and fast.</p>
      </div>
    </header>



<!--About msg-->


    <section id="about">
      <div class="container">
         <div class="col-md-12 mx-auto">
            <h2 class="text-center">About Us</h2>
            <p class="lead text-center" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          </div>
        </div>
      </div>  <div class="row">
       

      <div class="container" id="ab">
        <div class="row">
          <div class="col-md-6 text-center">
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          </div>
          <div class="col-md-6">
            <img src="img/pengyu.png" id="pengyu" class="image-fluid">
          </div>
        </div>
      </div>
    


     <div class="container" id="ab">
        <div class="row">
           <div class="col-md-6 col-sm-6 align-right">
            <img src="img/van.png" id="van">
          </div>
          <div class="col-md-6 col-sm-6 text-center">
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          </div>
        </div>
      </div>

      <div class="container" id="ab">
        <div class="row">
          <div class="col-md-6 text-center">
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          </div>
          <div class="col-md-6" >
            <img src="img/exp.png" id="exp" class="img-thumbnail" >
          </div>
        </div>
      </div>
    


    </section>
    <section id="services" class="bg-light">
      <div class="container">   
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Services we offer</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact us</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
          </div>
        </div>
      </div>
    </section>
<footer>
<?php getFooter(); ?>
<?php getFooterAssets(); ?>
</footer>
</body>

</html>
