<?php session_start();
if(isset($_SESSION['panobookingadminuser'])){
	}
	else{
		echo '<script type="application/javascript">';
		echo'alert("Login First");';
				echo'window.location.href="../../index.php";';
				echo '</script>';
		}
if(isset($_REQUEST['tourismarticlesubmit']))
{	
// getting inputs from the form	
	$articletitle= $_POST['articletitle'];
	$articledetails = $_POST['articledetails'];
	$usernames = $_SESSION['panobookingadminuser'];
    $fileName = $_FILES['Filename']['name'];
	$fileName1 = $_FILES['Filename1']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
	$temp1 = explode(".", $_FILES["Filename1"]["name"]);
    $newfilename =$articletitle. '.' . end($temp);
	$newfilename1 =$articletitle. '1.' . 'jpg';
	
	$target = '../../../AndroidFiles/TourismArticles/';
	$target1 = '../../../AndroidFiles/TourismArticleThumbNail/';
	
	$fileTarget = $target.$newfilename; 
	$fileTarget1 = $target1.$newfilename1;  
	
    $tempFileName = $_FILES["Filename"]["tmp_name"];
	$tempFileName1 = $_FILES["Filename1"]["tmp_name"];
	
	$result = move_uploaded_file($tempFileName,$fileTarget);
	$result1 = move_uploaded_file($tempFileName1,$fileTarget1);
	$imageurl="https://panobooking.com/AndroidFiles/TourismArticles";	
	$imageurl1="https://panobooking.com/AndroidFiles/TourismArticleThumbNail";	
	require_once('../../connect/connect.php');
	
	$query2 = "INSERT INTO `tourismarticles` (ArticleTitle,PostedBy,Details,Attachment,ArticleThumbNail) VALUES('$articletitle','$usernames','$articledetails','$imageurl','$imageurl1')";
	$result2=mysqli_query($link,$query2);
	
			if($result2)
			{
				echo '<script type="application/javascript">';
				echo'alert("Tourism Article successfully registered");';
				echo'window.location.href="../forms/AddTourismArticles.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Tourism Article registration Failed");';
				echo'window.location.href="../forms/AddTourismArticles.php";';
				echo '</script>';
			}
			
}else
{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../forms/AddTourismArticles.php";';
				echo '</script>';
			die;
}
?>