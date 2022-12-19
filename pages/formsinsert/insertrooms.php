<?php session_start();
if(isset($_SESSION['panobookingadminuser'])){
	}
	else{
		echo '<script type="application/javascript">';
		echo'alert("Login First");';
		echo'window.location.href="../../index.php";';
		echo '</script>';
		}
if(isset($_REQUEST['roomsubmit']))
{	
	require_once('../../connect/connect.php');
	$roomname=mysqli_real_escape_string($link,$_POST['roomname']);
	$roomsize = $_POST['roomsize'];
	$noofrooms = $_POST['noofrooms'];
	$bedspecification = $_POST['bedspecification'];
	$costs = $_POST['costs'];
	$fivepercent= $_POST['fivepercent'];
	if($fivepercent=="No"){
	$prices =$costs;
	}else{
	$prices =$costs+(0.05*$_POST['costs']);
	}
	$bedbreakfast=$_POST['bedbreakfast'];
	$refundpolicy = $_POST['refundpolicy'];
	$roomno=mysqli_real_escape_string($link,$_POST['roomno']);
    $roomdesc=$_POST['roomdesc'];
    $fileName = $_FILES['Filename']['name'];
	$temp = explode(".", $_FILES["Filename"]["name"]);
    $newfilename =$roomno.$roomname. '.' . 'jpg';
	$target = '../../../AndroidFiles/RoomImages/';
	$fileTarget = $target.$newfilename; 
    $tempFileName = $_FILES["Filename"]["tmp_name"];
	$result = move_uploaded_file($tempFileName,$fileTarget); 
	$imageurl="https://panobooking.com/AndroidFiles/RoomImages";
	$sql1="SELECT LeftRooms FROM pickuplocations where Place='$roomno'";
			$result1=mysqli_query($link,$sql1);
			if (mysqli_num_rows($result1) == 1)
			{
				$row = mysqli_fetch_array($result1);
				$newnumberofrooms=$row['LeftRooms']+$noofrooms;
				$query3 = "UPDATE `pickuplocations` SET LeftRooms='$newnumberofrooms' WHERE Place='$roomno'";
				$result3=mysqli_query($link,$query3);
			}
	$query2 = "INSERT INTO `rooms` (HotelName,RoomName,RefundPolicy,BedSpec,RoomSize,BreakFast,Cost,RoomDesc,PhotoUrl,Price,NoOfRooms) VALUES('$roomno','$roomname','$refundpolicy','$bedspecification','$roomsize','$bedbreakfast','$costs','$roomdesc','1','$prices','$noofrooms')";
	$result2=mysqli_query($link,$query2);
			if($result2)
			{
				echo '<script type="application/javascript">';
				echo'alert("Rooms successfully registered");';
				echo'window.location.href="../tables/rooms.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Rooms registration Failed");';
				echo'window.location.href="../tables/rooms.php";';
				echo '</script>';
			}
			
}else
{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../tables/rooms.php";';
				echo '</script>';
			die;
}
?>