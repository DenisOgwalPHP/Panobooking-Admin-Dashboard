<?php
require_once('connect.php');
$sales ="SELECT COUNT(FeedBackID) as clientfeedback  FROM `clientfeedback` where Status ='New'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['clientfeedback'];
$totals=$totalmessages;
if($totals>=1){
echo "$totals";
}else{
	echo "0";
	}
?>