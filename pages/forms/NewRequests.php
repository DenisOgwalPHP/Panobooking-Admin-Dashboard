<?php session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
if (isset($_SESSION['panobookingadminuser'])) {
} else {
  echo '<script type="application/javascript">';
  echo 'alert("Login First");';
  echo 'window.location.href="../../index.php";';
  echo '</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PANOBOOKING | New Requests</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../dist/img/AdminLTELogo.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-blue navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../DashBoard.php" class="nav-link">Home</a>
        </li>

      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">  
		<li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge"><?php require('../../includes/AllnewMessageFeed.php') ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <div class="dropdown-divider"></div>
			 <a href="NewMessages.php" class="dropdown-item">
              <i class="fas fa-ambulance mr-2"></i><?php require('../../includes/Allnewmessages.php') ?> new Messages Registration
            </a>
			<div class="dropdown-divider"></div>
            <a href="NewFeedback.php" class="dropdown-item">
              <i class="fas fa-ambulance mr-2"></i><?php require('../../includes/Allnewfeedback.php') ?> new Client Feedback
            </a>
			<div class="dropdown-divider"></div>
            <a href="NewBlogComments.php" class="dropdown-item">
              <i class="fas fa-hotel mr-2"></i><?php require('../../includes/AllnewComments.php') ?> new Blog Comments
            </a>
          </div>
        </li>
		
		
		   <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-file"></i>
            <span class="badge badge-danger navbar-badge"><?php require('../../includes/AllnewRegistration.php') ?></span>
          </a>
           <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header"><?php require('../../includes/AllnewRegistration.php') ?> Registrations</span>
            <div class="dropdown-divider"></div>
            <a href="NewCarRegistration.php" class="dropdown-item">
              <i class="fas fa-car mr-2"></i> <?php require('../../includes/AllnewCarrentalRegistration.php') ?> new Car Rental Registration
              <!--<span class="float-right text-muted text-sm">0 mins</span>-->
            </a>
		
            <div class="dropdown-divider"></div>
            <a href="NewAmbulanceRegistration.php" class="dropdown-item">
              <i class="fas fa-ambulance mr-2"></i><?php require('../../includes/AllnewAmbulanceRegistration.php') ?> new Ambulance Registration
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
			<div class="dropdown-divider"></div>
            <a href="NewStaysRegistration.php" class="dropdown-item">
              <i class="fas fa-hotel mr-2"></i><?php require('../../includes/AllnewStaysRegistration.php') ?> new Stays Registration
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
			<div class="dropdown-divider"></div>
            <a href="NewHomeguestHouseRegistration.php" class="dropdown-item">
              <i class="fas fa-home mr-2"></i> <?php require('../../includes/AllnewHomeguesthouseRegistration.php') ?> new Homeguest Houses Registration
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
            
          </div>
        </li>
		
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge"><?php require('../../includes/Allnew.php') ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header"><?php require('../../includes/Allnew.php') ?> Bookings</span>
            <div class="dropdown-divider"></div>
            <a href="NewCarRequests.php" class="dropdown-item">
              <i class="fas fa-car mr-2"></i> <?php require('../../includes/Allnewcarrequests.php') ?> new Car Rental Requests
              <!--<span class="float-right text-muted text-sm">0 mins</span>-->
            </a>
			<div class="dropdown-divider"></div>
            <a href="NewAirportTaxiRequests.php" class="dropdown-item">
              <i class="fas fa-taxi mr-2"></i> <?php require('../../includes/Allnewairporttaxirequests.php') ?> new Airport Taxis Requests
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
            <div class="dropdown-divider"></div>
            <a href="NewAmbulanceRequests.php" class="dropdown-item">
              <i class="fas fa-ambulance mr-2"></i><?php require('../../includes/Allnewambulancerequests.php') ?> new Ambulance Requests
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
			<div class="dropdown-divider"></div>
            <a href="NewStaysRequests.php" class="dropdown-item">
              <i class="fas fa-hotel mr-2"></i><?php require('../../includes/Allnewstaysrequests.php') ?> new Stays Requests
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
			<div class="dropdown-divider"></div>
            <a href="NewHomeguestHouseRequests.php" class="dropdown-item">
              <i class="fas fa-home mr-2"></i> <?php require('../../includes/Allnewhomeguesthouserequests.php') ?> new Tour Package Requests
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
            <div class="dropdown-divider"></div>
            <a href="NewRequests.php" class="dropdown-item dropdown-footer">See All Requests</a>
          </div>
        </li>	  
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../../DashBoard.php" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">PANOBOOKING</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['panobookingadminuser']; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../../DashBoard.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  New Messages
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                   <a href='NewMessages.php' class='nav-link'>
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Messages</p>
                  </a>
                </li>
				<li class="nav-item">
                   <a href='NewFeedback.php' class='nav-link'>
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Client Feedback</p>
                  </a>
                </li>
				 <li class="nav-item">
                   <a href='NewBlogComments.php' class='nav-link'>
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Blog Comment</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  New Self Registrations
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="NewAmbulanceRegistration.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ambulance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="NewCarRegistration.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Car Rentals</p>
                  </a>
                </li>
                  <li class='nav-item'>
                  <a href='NewStaysRegistration.php' class='nav-link'>
                  <i class='far fa-circle nav-icon'></i>
                  <p>Stays</p>
                  </a>
                  </li>
                  <li class='nav-item'>
                  <a href='NewHomeguestHouseRegistration.php' class='nav-link'>
                  <i class='far fa-circle nav-icon'></i>
                  <p>Home Guest Houses</p>
                  </a>
                  </li>
              </ul>
            </li>
			
			  <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  New Bookings
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="NewAmbulanceRequests.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ambulance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="NewCarRequests.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Car Rentals</p>
                  </a>
                </li>
				<li class="nav-item">
                  <a href="NewAirportTaxiRequests.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Airport Taxis</p>
                  </a>
                </li>
                  <li class='nav-item'>
                  <a href='NewStaysRequests.php' class='nav-link'>
                  <i class='far fa-circle nav-icon'></i>
                  <p>Stays</p>
                  </a>
                  </li>
                  <li class='nav-item'>
                  <a href='NewHomeguestHouseRequests.php' class='nav-link'>
                  <i class='far fa-circle nav-icon'></i>
                  <p>Home Guest Houses</p>
                  </a>
                  </li>
              </ul>
            </li>
          </ul>

        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>New Requests</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../../DashBoard.php">Home</a></li>
                <li class="breadcrumb-item active">New Requests List</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <!-- /.card -->

              <div class="card" style='overflow:auto'>
                <div class="card-header">
                  <h3 class="card-title">New Requests List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Facility</th>
                        <th>Item</th>
                        <th>No. Of Items</th>
                        <th>Cost</th>
                        <th>Client Email</th>
                        <th>Booked From</th>
                        <th>Booked To</th>
						<th>Booking Date</th>
                        <th>Description</th>
						<th>Status</th>
						<th>Confirmation</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        require_once('../../connect/connect.php');
                        $sales7 = "SELECT * FROM `cart` where Status='New' order by IDs Desc";
                        $result7 = mysqli_query($link, $sales7);
                        $counter3 = 1;
                        while ($row7 = mysqli_fetch_assoc($result7)) {
                          echo " <tr>";
                          $id = $row7['IDs'];
						   $bookt = $row7['BookingType'];
                          echo  "<td>" . $counter3 . "</td>";
                          echo  "<td style='overflow-x:scroll;'>" . $row7['Facility'] . "</td>";
                          echo  "<td style='overflow-x:scroll;'>" . $row7['ProductName'] . "</td>";
                          echo  "<td style='overflow-x:scroll;'>" . $row7['Quantity'] . "</td>";
                          echo  "<td style='overflow-x:scroll;'>" . $row7['Cost'] . "</td>";
                          echo  "<td style='overflow-x:scroll;'>" . $row7['User'] . "</td>";
                          echo  "<td style='overflow-x:scroll;'>" . $row7['DatesFrom'] . "</td>";
                          echo  "<td style='overflow-x:scroll;'>" . $row7['DatesTo'] . "</td>";
						  echo  "<td style='overflow-x:scroll;'>" . $row7['created_at'] . "</td>";
                          echo  "<td style='overflow-x:scroll;'>" . $row7['Descriptions'] . "</td>";
						   if($row7['Status']=="New"){
                          echo  "<td><form method='get'><button type='submit' name='changestatus'  value='". $id ."' class='btn btn-block btn-danger'>New</button></form></td>";
                           }else{
							 echo  "<td style='overflow-x:scroll;'>".$row7['Status']."</td>";  
						  }
						  $booktypes=$row7['BookingType'];
						   if($row7['Confirmed']=="Pending"){
                          echo  "<td><form method='get'><button type='button' data-toggle='modal'  data-target='#modal-success". $id ."' class='btn btn-success'>Confirm</button></form></td>";
                         if($booktypes=="Ambulance"){
							echo "<div class='modal fade' id='modal-success". $id ."'>";
						 echo "<div class='modal-dialog'>";
						   echo "<div class='modal-content bg-success'>";
							 echo "<div class='modal-header'>";
							   echo "<h4 class='modal-title'>Confirmation Details</h4>";
							   echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
								 echo "<span aria-hidden='true'>&times;</span>";
							   echo "</button>";
							 echo "</div>";
							 echo "<form action='NewRequests.php' method='post'>";
							 echo "<div class='modal-body'>";
							  echo "<input type='hidden' class='form-control' id='booktypess' Value='". $bookt ."'  placeholder='Booked Item' name='booktypess'>";
							 echo "<input type='hidden' class='form-control' id='bookeditem' Value='". $id ."'  placeholder='Booked Item' name='bookeditem'>";
							 echo "<p>&nbsp;</p>";
							  echo "<div class='input-group'>";
							 echo "<div class='custom-file'>";
							 echo "<input type='number' class='form-control' id='cost'   placeholder='Ambulance Cost' name='cost'>";
							 echo "</div>"; 		
							 echo "</div>";	
							 echo "<p>&nbsp;</p>";	
							 echo "<div class='input-group'>";
							 echo "<div class='custom-file'>";
							 echo "<textarea  class='form-control' id='reason' placeholder='Please Add Reason' name='reason'></textarea>";
							 echo "</div>"; 		
							 echo "</div>";	
							 echo "<p>&nbsp;</p>";			
							 echo "<div class='input-group'>";
						    echo "<button type='submit' name='confirmbooking' value='confirmbooking' class='btn btn-primary'>Confirm</button>";
							 echo "<button type='submit' name='rejectbooking' value='rejectbooking' class='btn btn-danger'>Reject</button>";
						    echo "</div>";
							 echo "</div>";
							 echo "</form>";
							 echo "<div class='modal-footer justify-content-between'>";
							   echo "<button type='button' class='btn btn-outline-dark' data-dismiss='modal'>Close</button>";
							 echo "</div>";
						   echo "</div>";
						 echo "</div>";
						echo "</div>"; 
							 
						 }else{
							 echo "<div class='modal fade' id='modal-success". $id ."'>";
						 echo "<div class='modal-dialog'>";
						   echo "<div class='modal-content bg-success'>";
							 echo "<div class='modal-header'>";
							   echo "<h4 class='modal-title'>Confirmation Details</h4>";
							   echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
								 echo "<span aria-hidden='true'>&times;</span>";
							   echo "</button>";
							 echo "</div>";
							 echo "<form action='NewRequests.php' method='post'>";
							 echo "<div class='modal-body'>";
							  echo "<input type='hidden' class='form-control' id='booktypess' Value='". $bookt ."'  placeholder='Booked Item' name='booktypess'>";
							 echo "<input type='hidden' class='form-control' id='bookeditem' Value='". $id ."'  placeholder='Booked Item' name='bookeditem'>";
							 echo "<p>&nbsp;</p>";
							 echo "<div class='input-group'>";
							 echo "<div class='custom-file'>";
							 echo "<textarea  class='form-control' id='reason' placeholder='Please Add Reason' name='reason'></textarea>";
							 echo "</div>"; 		
							 echo "</div>";	
							 echo "<p>&nbsp;</p>";			
							 echo "<div class='input-group'>";
						    echo "<button type='submit' name='confirmbooking' value='confirmbooking' class='btn btn-primary'>Confirm</button>";
							 echo "<button type='submit' name='rejectbooking' value='rejectbooking' class='btn btn-danger'>Reject</button>";
						    echo "</div>";
							 echo "</div>";
							 echo "</form>";
							 echo "<div class='modal-footer justify-content-between'>";
							   echo "<button type='button' class='btn btn-outline-dark' data-dismiss='modal'>Close</button>";
							 echo "</div>";
						   echo "</div>";
						 echo "</div>";
						echo "</div>";
						 }
						   }else{
							 echo  "<td style='overflow-x:scroll;'>".$row7['Confirmed']. "</td>";  
						  }
						  echo " </tr>";
                          $counter3++;
                        }
                      ?>
                    </tbody>
						
						
                    <?php
                    if (isset($_GET['changestatus'])) {
                      $id = $_GET['changestatus'];
					  $sales11 = "UPDATE  cart SET Status='Opened'  WHERE IDs='$id'";
                      $result11 = mysqli_query($link, $sales11);
                      if ($result11) {
                        echo '<script type="application/javascript">';
                        echo 'alert("Status Updated");';
                        echo 'window.location.href="NewRequests.php";';
                        echo '</script>';
                      } else {
                        echo '<script type="application/javascript">';
                        echo 'alert("Status Update Failed");';
                        echo 'window.location.href="NewRequests.php";';
                        echo '</script>';
                      }
                    }
                    ?>
					
					 <?php
					
			if (isset($_REQUEST['confirmbooking'])) {
				 if($_POST['booktypess']=="Ambulance"){
					 require_once('../../connect/connect.php');
			$reason = mysqli_real_escape_string($link,$_POST['reason']);	
			$bookeditem=mysqli_real_escape_string($link,$_POST['bookeditem']); 
			$bookcost=mysqli_real_escape_string($link,$_POST['cost']); 
			$query = "UPDATE `cart` SET ConfirmReason='".$reason."',Cost='$bookcost', Confirmed='Confirmed' WHERE IDs='".$bookeditem."'";
			$result4=mysqli_query($link,$query);
			
			if($result4){
				require_once('../../connect/connect.php');
				$sales8 = "SELECT * FROM `cart` WHERE IDs='$bookeditem'";
				$result8 = mysqli_query($link, $sales8);
				while ($row8 = mysqli_fetch_assoc($result8)) {
					$facilityname=$row8['Facility'];
					$productname=$row8['ProductName'];
					$useremail=$row8['User'];

			require 'PHPMailer/src/Exception.php';
			require 'PHPMailer/src/PHPMailer.php';
			require 'PHPMailer/src/SMTP.php';	
			$emails='sales.panobooking@gmail.com';
			$to = $useremail;
				$subject = "Booking Confirmation for ".$productname;
				$message = 'Your Call has been confirmed by '.$facilityname.' for a reason: '.$reason.'. Panobooking may further contact you. Please it will just be Follow up.';
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
				$headers = 'From:'.$emails. "\r\n" .'Reply-To: '.$emails . "\r\n" .'X-Mailer: PHP/' . phpversion();
				echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
				}			
			echo '<script type="application/javascript">';
			echo'alert("Confirmation Done");';
			echo'window.location.href="NewRequests.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Confirmation Failed");';
			echo'window.location.href="NewRequests.php";';
			echo '</script>';
			}

					
				 }else{
			 require_once('../../connect/connect.php');
			$reason = mysqli_real_escape_string($link,$_POST['reason']);	
			$bookeditem=mysqli_real_escape_string($link,$_POST['bookeditem']); 
			$query = "UPDATE `cart` SET ConfirmReason='".$reason."', Confirmed='Confirmed' WHERE IDs='".$bookeditem."'";
			$result4=mysqli_query($link,$query);
			
			if($result4){
				require_once('../../connect/connect.php');
				$sales8 = "SELECT * FROM `cart` WHERE IDs='$bookeditem'";
				$result8 = mysqli_query($link, $sales8);
				while ($row8 = mysqli_fetch_assoc($result8)) {
					$facilityname=$row8['Facility'];
					$productname=$row8['ProductName'];
					$useremail=$row8['User'];

			require 'PHPMailer/src/Exception.php';
			require 'PHPMailer/src/PHPMailer.php';
			require 'PHPMailer/src/SMTP.php';	
			$emails='sales.panobooking@gmail.com';
			$to = $useremail;
				$subject = "Booking Confirmation for ".$productname;
				$message = 'Your Booking has been confirmed by '.$facilityname.' for a reason: '.$reason.'. Panobooking may further contact you. Please it will just be Follow up.';
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
				$headers = 'From:'.$emails. "\r\n" .'Reply-To: '.$emails . "\r\n" .'X-Mailer: PHP/' . phpversion();
				echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
				}			
			echo '<script type="application/javascript">';
			echo'alert("Confirmation Done");';
			echo'window.location.href="NewRequests.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Confirmation Failed");';
			echo'window.location.href="NewRequests.php";';
			echo '</script>';
			}
				 }
			}
		  if (isset($_REQUEST['rejectbooking'])) {
			  
			   if($_POST['booktypess']=="Ambulance"){
				 require_once('../../connect/connect.php');
			$reason = mysqli_real_escape_string($link,$_POST['reason']);	
			$bookeditem=mysqli_real_escape_string($link,$_POST['bookeditem']); 
			
			 $query = "UPDATE `cart` SET ConfirmReason='".$reason."', Confirmed='Rejected' WHERE IDs='".$bookeditem."'";
			$result4=mysqli_query($link,$query);
			
			if($result4){
				require_once('../../connect/connect.php');
				$sales8 = "SELECT * FROM `cart` WHERE IDs='$bookeditem'";
				$result8 = mysqli_query($link, $sales8);
				while ($row8 = mysqli_fetch_assoc($result8)) {
					$facilityname=$row8['Facility'];
					$productname=$row8['ProductName'];
					$useremail=$row8['User'];

			require 'PHPMailer/src/Exception.php';
			require 'PHPMailer/src/PHPMailer.php';
			require 'PHPMailer/src/SMTP.php';	
			$emails='sales.panobooking@gmail.com';
			$to = $useremail;
				$subject = "Booking Rejected for ".$productname;
				$message = 'Your Call has been Rejected by '.$facilityname.' for a reason: '.$reason.'. Panobooking may further contact you. Please it will just be Follow up. But please feel free to place another Call.';
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
				$headers = 'From:'.$emails. "\r\n" .'Reply-To: '.$emails . "\r\n" .'X-Mailer: PHP/' . phpversion();
				echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
				}			
			echo '<script type="application/javascript">';
			echo'alert("Rejection Done");';
			echo'window.location.href="NewRequests.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Rejection Failed");';
			echo'window.location.href="NewRequests.php";';
			echo '</script>';
			}   
				   
			   }else{
			 require_once('../../connect/connect.php');
			$reason = mysqli_real_escape_string($link,$_POST['reason']);	
			$bookeditem=mysqli_real_escape_string($link,$_POST['bookeditem']); 
			
			 $query = "UPDATE `cart` SET ConfirmReason='".$reason."', Confirmed='Rejected' WHERE IDs='".$bookeditem."'";
			$result4=mysqli_query($link,$query);
			
			if($result4){
				require_once('../../connect/connect.php');
				$sales8 = "SELECT * FROM `cart` WHERE IDs='$bookeditem'";
				$result8 = mysqli_query($link, $sales8);
				while ($row8 = mysqli_fetch_assoc($result8)) {
					$facilityname=$row8['Facility'];
					$productname=$row8['ProductName'];
					$useremail=$row8['User'];

			require 'PHPMailer/src/Exception.php';
			require 'PHPMailer/src/PHPMailer.php';
			require 'PHPMailer/src/SMTP.php';	
			$emails='sales.panobooking@gmail.com';
			$to = $useremail;
				$subject = "Booking Rejected for ".$productname;
				$message = 'Your Booking has been Rejected by '.$facilityname.' for a reason: '.$reason.'. Panobooking may further contact you. Please it will just be Follow up. But please feel free to place another booking.';
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
				$headers = 'From:'.$emails. "\r\n" .'Reply-To: '.$emails . "\r\n" .'X-Mailer: PHP/' . phpversion();
				echo (mail($to, $subject, $message, $headers)) ? 'Message sent!' : 'Message not sent!';
				}			
			echo '<script type="application/javascript">';
			echo'alert("Rejection Done");';
			echo'window.location.href="NewRequests.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Rejection Failed");';
			echo'window.location.href="NewRequests.php";';
			echo '</script>';
			}
			   }
		  }
		  ?>
                  
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020-<script>
          document.write(new Date().getFullYear());
        </script> <a href="https://panobooking.com">panobooking.com</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="../../plugins/jszip/jszip.min.js"></script>
  <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
  <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>