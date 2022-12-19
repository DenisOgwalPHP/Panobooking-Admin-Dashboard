<?php
require_once('connect/connect.php');
$dates=date("Y-m-d");
$sales ="SELECT COUNT(OrderCode) as Sales FROM `bookings` where Date like '$dates%'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalsales=$row['Sales'];

$totals=$totalsales;
if($totals>=1){
echo "$totals";
}else{
	echo "0";
	}
?>