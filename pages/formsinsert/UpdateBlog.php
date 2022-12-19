 <?php
		  if (isset($_REQUEST['updatedetails'])=="blogupdate") {
			$realvalue = $_POST['realvalue'];
	$productnames = $_POST['tourismarticle'];
	$taxioption = $_POST['taxioption'];
	require_once('../../connect/connect.php');
	if($taxioption=="Short Description"){
		$query = "UPDATE `blogs` SET BlogShortDescription='" . $realvalue . "' WHERE BlogTitle='" . $productnames . "'";
		  }else if($taxioption=="Description"){
			$query = "UPDATE `blogs` SET Description='" . $realvalue . "' WHERE BlogTitle='" . $productnames . "'";  
		  }
	$result4 = mysqli_query($link, $query);
	if ($result4) {
		echo '<script type="application/javascript">';
		echo 'alert("Blog successfully Updated");';
		echo 'window.location.href="../forms/AddBlog.php";';
		echo '</script>';
	} else {
		echo '<script type="application/javascript">';
		echo 'alert("Blog Update Failed");';
		echo 'window.location.href="../forms/AddBlog.php";';
		echo '</script>';
	}
		  } else {
	echo '<script type="application/javascript">';
	echo 'alert("Error occured and i am un able to correct it");';
	echo 'window.location.href="AddBlog.php";';
	echo '</script>';
	die;
}
		  ?>
