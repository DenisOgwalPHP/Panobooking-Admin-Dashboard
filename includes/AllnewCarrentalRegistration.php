<?php
require_once('connect.php');
$sales ="SELECT COUNT(IDs) as registrations FROM `carrentals` where Approved ='Not Approved'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['registrations'];
$totals=$totalmessages;
if($totals>=1){
echo "$totals";
}else{
	echo "0";
	}
?>