<?php
require_once('connect.php');
$sales ="SELECT COUNT(FeedBackID) as clientfeedback FROM `clientfeedback` where Status ='New'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['clientfeedback'];
$homeguesttotals=$totalmessages;
if($homeguesttotals>=1){
$homeguesttotals=$totalmessages;
}else{
$homeguesttotals=0;
	}
	
$sales1 ="SELECT COUNT(ID) as blogcomments FROM `blogcomments` where Status ='New'";
$result=mysqli_query($link,$sales1);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['blogcomments'];
$staystotals=$totalmessages;
if($totalmessages>=1){
$staystotals=$totalmessages;
}else{
$staystotals=0;
	}
	
$sales2 ="SELECT COUNT(ID) as messages FROM `messages` where Status ='New'";
$result=mysqli_query($link,$sales2);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['messages'];
$carrentalstotals=$totalmessages;
if($totalmessages>=1){
$carrentalstotals=$totalmessages;
}else{
$carrentalstotals=0;
	}

$totals=$carrentalstotals+$staystotals+$homeguesttotals;
echo $totals;
?>