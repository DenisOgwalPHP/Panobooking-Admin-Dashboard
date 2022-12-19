<?php
session_start();
if (isset($_SESSION['panobookingadminuser'])) {
} else {
}

if (isset($_REQUEST['updatedetails'])) {
	// getting inputs from the form	
	$realvalue = $_POST['realvalue'];
	$productnames = $_POST['tourismarticle'];
	require_once('../../connect/connect.php');
		$query = "UPDATE `travelarticles` SET Details='" . $realvalue . "' WHERE ArticleTitle='" . $productnames . "'";
	
	$result4 = mysqli_query($link, $query);
	if ($result4) {
		echo '<script type="application/javascript">';
		echo 'alert("Travel Articles successfully Updated");';
		echo 'window.location.href="../forms/AddTravelArticles.php";';
		echo '</script>';
	} else {
		echo '<script type="application/javascript">';
		echo 'alert("Travel Articles Update Failed");';
		echo 'window.location.href="../forms/AddTravelArticles.php";';
		echo '</script>';
	}
} else {
	echo '<script type="application/javascript">';
	echo 'alert("Error occured and i am un able to correct it");';
	echo 'window.location.href="../forms/AddTravelArticles.php";';
	echo '</script>';
	die;
}
