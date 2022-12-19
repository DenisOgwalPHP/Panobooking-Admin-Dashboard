<?php
require_once('connect.php');
$sales ="SELECT COUNT(IDs) as bookings FROM `cart` where Status ='New' and BookingType='Tour Package'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['bookings'];
$totals=$totalmessages;
if($totals>=1){
echo "$totals";
}else{
	echo "0";
	}
?>