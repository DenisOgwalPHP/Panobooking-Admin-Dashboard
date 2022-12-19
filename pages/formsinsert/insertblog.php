<?php session_start();
if(isset($_SESSION['panobookingadminuser'])){
	}
	else{
		echo '<script type="application/javascript">';
		echo'alert("Login First");';
				echo'window.location.href="../../index.php";';
				echo '</script>';
		}
if(isset($_REQUEST['travelarticlesubmit']))
{	
// getting inputs from the form	
	$articletitle= $_POST['articletitle'];
	$articledetails = $_POST['articledetails'];
	$shortdescription = $_POST['shortdescription'];
	$usernames = $_SESSION['panobookingadminuser'];
	$fileName1 = $_FILES['Filename1']['name'];
	$newfilename1 =$articletitle. '.' . "jpg";
	$target1 = '../../../AndroidFiles/BlogsThumbnail/';
	$fileTarget1 = $target1.$newfilename1;  
	$tempFileName1 = $_FILES["Filename1"]["tmp_name"];
	$result1 = move_uploaded_file($tempFileName1,$fileTarget1);	
	$imageurl1="https://panobooking.com/AndroidFiles/BlogsThumbnail";	
	require_once('../../connect/connect.php');
	$query2 = "INSERT INTO `blogs` (BlogTitle,BlogShortDescription,Description,PostedBy,BlogImage) VALUES('$articletitle','$shortdescription','$articledetails','$usernames','$newfilename1')";
	$result2=mysqli_query($link,$query2);
	
			if($result2)
			{
				echo '<script type="application/javascript">';
				echo'alert("Blog successfully registered");';
				echo'window.location.href="../forms/AddBlog.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Blog registration Failed");';
				echo'window.location.href="../forms/AddBlog.php";';
				echo '</script>';
			}
			
}else
{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../forms/AddBlog.php";';
				echo '</script>';
			die;
}
?>