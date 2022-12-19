<?php session_start();
if(isset($_SESSION['panobookingadminuser'])){
	}
	else{
		echo '<script type="application/javascript">';
		echo'alert("Login First");';
				echo'window.location.href="../../index.php";';
				echo '</script>';
		}
if(isset($_REQUEST['requestsubmit']))
{	
// getting inputs from the form	
	$selectproperty=$_POST['selectproperty'];
	$selectrooms = $_POST['selectrooms'];
	$propertyprice = $_POST['propertyprice'];
	$quantity = $_POST['quantity'];
	$startdate=$_POST['startdate'];
	$enddate=$_POST['enddate'];
	$timestamp1 = strtotime($startdate);
	$timestamp2 = strtotime($enddate);
	$difference = $timestamp2 - $timestamp1;
	$propertytype=$_POST['SelectType'];
	if($propertytype=="Stays"){
		$realtype="Stays";
	}else if($propertytype=="Rental Cars"){
		$realtype="Car Rental";
	}
	else if($propertytype=="Airport Taxis"){
		$realtype="Airport Taxi";
	}
	else if($propertytype=="Ambulances"){
		$realtype="Ambulance";
	}
	$realprice=$quantity*$propertyprice*(($difference/(24*60*60))+1);
	$ordercode="210107";
	$desDesc=$_POST['description'];
	require_once('../../connect/connect.php');
	
	$query2 = "INSERT into cart(ProductName,Quantity,Cost,User,OrderCode,DatesFrom,DatesTo,Descriptions,Facility,ImageUrl,BookingType,Currency,CurrencyAmount)
	VALUES('$selectrooms','$quantity','$realprice','request@panobooking.email','$ordercode','$startdate','$enddate','$desDesc','$selectproperty','$propertytype','$realtype','UGX','$realprice')";
	$result2=mysqli_query($link,$query2);
	
			if($result2)
			{
				echo '<script type="application/javascript">';
				echo'alert("self Request successfully registered");';
				echo'window.location.href="../forms/SelfRequest.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Self Request registration Failed");';
				echo'window.location.href="../forms/SelfRequest.php";';
				echo '</script>';
			}
			
}else
{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../forms/SelfRequest.php";';
				echo '</script>';
			die;
}
?>