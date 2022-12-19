<?php
require_once('connect.php');
$sales ="SELECT COUNT(IDs) as registrations FROM `homeguesthouses` where Approved ='Not Approved'";
$result=mysqli_query($link,$sales);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['registrations'];
$homeguesttotals=$totalmessages;
if($homeguesttotals>=1){
$homeguesttotals=$totalmessages;
}else{
$homeguesttotals=0;
	}
	
$sales1 ="SELECT COUNT(IDs) as registrations FROM `pickuplocations` where Approved ='Not Approved'";
$result=mysqli_query($link,$sales1);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['registrations'];
$staystotals=$totalmessages;
if($totalmessages>=1){
$staystotals=$totalmessages;
}else{
$staystotals=0;
	}
	
$sales2 ="SELECT COUNT(IDs) as registrations FROM `carrentals` where Approved ='Not Approved'";
$result=mysqli_query($link,$sales2);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['registrations'];
$carrentalstotals=$totalmessages;
if($totalmessages>=1){
$carrentalstotals=$totalmessages;
}else{
$carrentalstotals=0;
	}
	
$sales3 ="SELECT COUNT(IDs) as registrations FROM `ambulances` where Approved ='Not Approved'";
$result=mysqli_query($link,$sales3);
$row=mysqli_fetch_assoc($result);
$totalmessages=$row['registrations'];
if($totalmessages>=1){
$ambulancestotals=$totalmessages;
}else{
$ambulancestotals=0;
	}
$totals=$ambulancestotals+	$carrentalstotals+$staystotals+$homeguesttotals;
echo $totals;
?>