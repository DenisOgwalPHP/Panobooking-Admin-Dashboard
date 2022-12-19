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
	$creditcard = $_POST['creditcard'];
	$bedbreakfast=$_POST['bedbreakfast'];
	$moredetails=$_POST['moredetails'];
	require_once('../../connect/connect.php');
	
	$query2 = "UPDATE `pickuplocations` SET ExactLocation='$exactlocation',CreditCard='$creditcard',BedBreakFast='$bedbreakfast' where Place='$moredetails'";
	$result2=mysqli_query($link,$query2);
	
			if($result2)
			{
				echo '<script type="application/javascript">';
				echo'alert("Destination successfully Updated");';
				echo'window.location.href="../forms/AddDestination2.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Destination Update Failed");';
				echo'window.location.href="../forms/AddDestination2.php";';
				echo '</script>';
			}
			
}else
{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../forms/AddDestination2.php";';
				echo '</script>';
			die;
}
?>