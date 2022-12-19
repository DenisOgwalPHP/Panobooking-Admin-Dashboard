<?php session_start();
if(isset($_SESSION['panobookingadminuser'])){
	}
	else{
		echo '<script type="application/javascript">';
		echo'alert("Login First");';
				echo'window.location.href="../../index.php";';
				echo '</script>';
		}
if(isset($_REQUEST['taxissubmit']))
{	
// getting inputs from the form	
	$carregno=$_POST['carregno'];
	$carspec = $_POST['carspec'];
	$ratings = $_POST['ratings'];
	$drivername = $_POST['drivername'];
	$driverage=$_POST['driverage'];
	$CarCategory=$_POST['CarCategory'];
	$noofpassengers=$_POST['noofpassengers'];
	$noofdoors=$_POST['noofdoors'];
	$automaticoption=$_POST['automaticoption'];
	$Laggagesoption=$_POST['Laggagesoption'];
	$description=$_POST['description'];
	//$rentalprice = $_POST['rentalprice']+(0.05*$_POST['rentalprice']);
	//$rentalpriceperday = $_POST['rentalpriceperday']+(0.05*$_POST['rentalpriceperday']);
	//$rentalpriceperweek = $_POST['rentalpriceperweek']+(0.05*$_POST['rentalpriceperweek']);
	$address=$_POST['address'];
	$paymentoption = $_POST['paymentoption'];
	$emailaddress = $_POST['emailaddress'];
	$phone = $_POST['phone'];
    $fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
    $newfilename =$drivername.$carregno. '.' . 'jpg';
	$target = '../../../AndroidDriver/FileUpload/';
	$fileTarget = $target.$newfilename; 
    $tempFileName = $_FILES["Filename"]["tmp_name"];
	$result = move_uploaded_file($tempFileName,$fileTarget);
	$imageurl="https://panobooking.com/AndroidDriver/UploadFiles";	
	require_once('../../connect/connect.php');
	
	$query2 = "INSERT INTO `airporttaxi` (DriverName,DriverAge,TaxiNo,Ratings,CarSpec,Repayments,CurrentLocation,EmailAddress,TelephoneNumber,PhotoUri,Passengers,Laggages,Automatic,Doors,Description,CarCategory) VALUES('$drivername','$driverage','$carregno','$ratings','$carspec','$paymentoption','$address','$emailaddress','$phone','1','$noofpassengers','$Laggagesoption','$automaticoption','$noofdoors','$description','$CarCategory')";
	$result2=mysqli_query($link,$query2);
	
			if($result2)
			{
				echo '<script type="application/javascript">';
				echo'alert("Airport Taxi successfully registered");';
				echo'window.location.href="../forms/AddTaxis.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Airport Taxi registration Failed");';
				echo'window.location.href="../forms/AddTaxis.php";';
				echo '</script>';
			}
			
}else
{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../forms/AddTaxis.php";';
				echo '</script>';
			die;
}
?>