<?php
session_start();
require_once('connect/connect.php');
$userin=$_SESSION['panobookingadminuser'];
$logout ="UPDATE staffregistration SET `Status` ='Offline' where Email='".$userin."'";
mysqli_query($link,$logout);
	unset($_SESSION['panobookingadminuser']);
	unset($_SESSION['panobookingadminemail']);
    session_destroy();
	echo '<script type="application/javascript">';
				echo'alert("You Have Successfully Logged Out, Login to Start A nother Session");';
				echo'window.location.href="index.php";';
				echo '</script>';
				
	 ?>