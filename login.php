<?php
session_start();
if(isset($_REQUEST['submit'])){	
// getting inputs from the form		
	$email = $_POST['email'];
	$password = $_POST['password'];
	$encryptedpassword = md5($password);
	require_once('connect/connect.php');
			$newfetch ="SELECT Fullnames,Password,Email FROM `staffregistration` WHERE Email = '".$email."' and ApprovalStatus='Approved'";
			$result=mysqli_query($link,$newfetch);
			$row2=mysqli_fetch_row($result);	
			if(mysqli_num_rows($result)>=1){
				$staffnames= $row2[0];
				$fetchedpassword = $row2[1];
				$email=$row2[2];
			if( $fetchedpassword ==$encryptedpassword){
				$newinsert ="UPDATE `staffregistration` SET Status='Online' where Email='".$email."'";
				mysqli_query($link,$newinsert);
				$_SESSION['panobookingadminuser']=$staffnames;
				$_SESSION['panobookingadminemail']=$email;
				header('Location: DashBoard.php');
				}else{	
				echo '<script type="application/javascript">';
				echo'alert("Password Does Not match Registered Password");';
				echo'window.location.href="index.php";';
				echo '</script>';
				}
			}else{
				
				echo '<script type="application/javascript">';
				echo'alert("UserName Does Not exist OR its not yet Approved");';
				echo'window.location.href="index.php";';
				echo '</script>';
				}
			
	}else{
			header("location:index.php");
			die;
		}
?>