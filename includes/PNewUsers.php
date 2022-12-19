<?php
require_once('connect/connect.php');
$dates=date("Y-m-d");
$sales ="SELECT COUNT(IDDesc) as Sales FROM `registration` where created_at like '$dates%'";
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