<?php 
require('lib/mysqli_connect.php');
function getHeader(){
	include_once('header.php');
}

function getFooter(){
	include_once('footer.php');
}

function getFooterAssets(){
	?>
    <!-- Bootstrap core JavaScript -->

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

    <!-- Plugin JavaScript -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
<?php
}
?>