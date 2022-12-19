<?php session_start();
if(isset($_SESSION['panobookingadminuser'])){
	}
	else{
		echo '<script type="application/javascript">';
		echo'alert("Login First");';
				echo'window.location.href="../../index.php";';
				echo '</script>';
		}
if(isset($_REQUEST['destinationupdate']))
{	
// getting inputs from the form	
	$exactlocation=$_POST['exactlocation'];
	$coordinates = $_POST['coordinates'];
	$creditcard = $_POST['creditcard'];
	$facilities = $_POST['facilities'];
	$bedbreakfast=$_POST['bedbreakfast'];
	$policies = $_POST['policies'];
	$checkouttime=$_POST['checkouttime'];
    $transportation = $_POST['transportation'];
	$airporttransport = $_POST['airporttransport'];
	$parking = $_POST['parking'];
	$market = $_POST['market'];
	$supermarket=$_POST['supermarket'];
	$cafeandbar=$_POST['cafeandbar'];
	$restaurant=$_POST['restaurant'];
	$moredetails=$_POST['moredetails'];
	$sustainabilityinitiatives=$_POST['sustainabilityinitiatives'];
	require_once('../../connect/connect.php');
	
	$query2 = "UPDATE `pickuplocations` SET Restaurant='$restaurant',CafeandBar='$cafeandbar',SuperMarket='$supermarket',Market='$market',TransportPark='$parking',TransportAir='$airporttransport',Transportation='$transportation',Checkout='$checkouttime',Policies='$policies',ExactLocation='$exactlocation',coordinates='$coordinates',CreditCard='$creditcard',Facilities='$facilities',BedBreakFast='$bedbreakfast', SustainabilityInitiatives='$sustainabilityinitiatives' where IDs='$moredetails'";
	$result2=mysqli_query($link,$query2);
	
			if($result2)
			{
				echo '<script type="application/javascript">';
				echo'alert("Destination successfully Updated");';
				echo'window.location.href="../tables/destinations.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Destination Update Failed");';
				echo'window.location.href="../tables/destinations.php";';
				echo '</script>';
			}
			
}else
{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../tables/destinations.php";';
				echo '</script>';
			die;
}
?>