<?php session_start();
if(isset($_SESSION['panobookingadminuser'])){
	}
	else{
		echo '<script type="application/javascript">';
		echo'alert("Login First");';
				echo'window.location.href="../../index.php";';
				echo '</script>';
		}
if(isset($_REQUEST['currencysubmit']))
{	
// getting inputs from the form	
	$currencyrate=$_POST['currencyrate'];
	$currency = $_POST['currency'];
	require_once('../../connect/connect.php');
	
	$query2 = "UPDATE `currency` SET CurrencyValue='$currencyrate' Where CurrencyName='$currency'";
	$result2=mysqli_query($link,$query2);
	
			if($result2)
			{
				echo '<script type="application/javascript">';
				echo'alert("successfully registered");';
				echo'window.location.href="../forms/AddCurrency.php";';
				echo '</script>';
			}else{
				echo '<script type="application/javascript">';
				echo'alert("Update Failed");';
				echo'window.location.href="../forms/AddCurrency.php";';
				echo '</script>';
			}
			
}else
{
				echo '<script type="application/javascript">';
				echo'alert("Error occured and i am un able to correct it");';
				echo'window.location.href="../forms/AddCurrency.php";';
				echo '</script>';
			die;
}
?>