<?php
require_once('connect.php');
$sales ="SELECT COUNT(ID) as blogcomments FROM `blogcomments` where Status ='New'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['blogcomments'];
$totals=$totalmessages;
if($totals>=1){
echo "$totals";
}else{
	echo "0";
	}
?>