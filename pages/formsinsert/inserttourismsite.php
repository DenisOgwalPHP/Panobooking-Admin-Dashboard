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
	$sitename= $_POST['sitename'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$searchkeywords = $_POST['searchkeywords'];
	$shortdescription = $_POST['shortdescription'];
	$articledetails = $_POST['articledetails'];
	$usernames = $_SESSION['panobookingadminuser'];
	$fileName1 = $_FILES['Filename1']['name'];
	$newfilename1 =$sitename. '.' . "jpg";
	$target1 = '../../../AndroidFiles/TourismSiteThumbnail/';
	$fileTarget1 = $target1.$newfilename1;  
	$tempFileName1 = $_FILES["Filename1"]["tmp_name"];
	$result1 = move_uploaded_file($tempFileName1,$fileTarget1);	
	$imageurl1="https://panobooking.com/AndroidFiles/TourismSiteThumbnail";	
	require_once('../../connect/connect.php');
	$query2 = "INSERT INTO `tourismsites` (SiteName,Country,City,SearchKeyWords,PhotoUri,ShortDescription,Description) VALUES('$sitename','$country','$city','$searchkeywords','1','$shortdescription','$articledetails')";
	$result2=mysqli_query($link,$query2);
	
			if($result2)
			{
				echo '<script type="application/javascript">';
				echo'alert("Tourism Site successfully registered");';
				echo'window.location.href="../forms/AddTourismSite.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Tourism Site Registration Failed");';
				echo'window.location.href="../forms/AddTourismSite.php";';
				echo '</script>';
			}
			
}else
{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../forms/AddTourismSite.php";';
				echo '</script>';
			die;
}
?>