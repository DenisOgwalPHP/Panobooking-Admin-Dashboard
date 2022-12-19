<?php
require_once('connect.php');
$sales ="SELECT COUNT(ID) as messages FROM `messages` where Status ='New'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['messages'];
$totals=$totalmessages;
if($totals>=1){
echo "$totals";
}else{
	echo "0";
	}
?>