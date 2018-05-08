
<?php require('mysqli_connect.php'); 

$packageID = $_POST['packID'];
$q = "SELECT * from packages where Package_ID = $packageID";
$package = $dbcon->query($q);

if($package->num_rows > 0) {
	$row = $package->fetch_assoc();
	echo $row["Starting_Price"];
}


?>

