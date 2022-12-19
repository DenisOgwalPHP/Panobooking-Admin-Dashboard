<?php session_start();
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
  <title>PANOBOOKING | Invoice</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../dist/img/AdminLTELogo.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
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
	<Script type="text/javascript">
          function loadproperties(SelectType) {
            var html = $.ajax({
              type: "POST",
              url: "AJAXs.php",
              data: "SelectType=" + encodeURIComponent(SelectType),
              async: false
            }).responseText;
            if (html) {
              $("#selectproperty").html(html);
            }
          }
        </Script>
      <!-- SEARCH FORM -->
      <form class="form-inline ml-3" method="GET">
        <div class="input-group input-group-sm">
        
          <div class="input-group-append">
		   <div class="form-group">
			  <select class="form-control" id="SelectType" name="SelectType" onchange="loadproperties(this.value)" required>
				<option Value="">Select Property Type</option>
				<option Value="Stays">Stays</option>
				<option Value="Rental Cars">Rental Cars</option>
				<option Value="Airport Taxis">Airport Taxis</option>
				<option Value="Ambulances">Ambulances</option>
			  </select>
			</div>
			 <div class="form-group">
			  <select class="form-control" id="selectproperty" name="selectproperty" required>
				<option value="">Select Property</option> 
			  </select>
			</div>
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>

     <ul class="navbar-nav ml-auto">  
		<li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge"><?php require('../../includes/AllnewMessageFeed.php') ?></span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
             <div class="dropdown-divider"></div>
			 <a href="../forms/NewMessages.php" class="dropdown-item">
              <i class="fas fa-ambulance mr-2"></i><?php require('../../includes/Allnewmessages.php') ?> new Messages Registration
            </a>
			<div class="dropdown-divider"></div>
            <a href="../forms/NewFeedback.php" class="dropdown-item">
              <i class="fas fa-ambulance mr-2"></i><?php require('../../includes/Allnewfeedback.php') ?> new Client Feedback
            </a>
			<div class="dropdown-divider"></div>
            <a href="../forms/NewBlogComments.php" class="dropdown-item">
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
            <a href="../forms/NewCarRegistration.php" class="dropdown-item">
              <i class="fas fa-car mr-2"></i> <?php require('../../includes/AllnewCarrentalRegistration.php') ?> new Car Rental Registration
              <!--<span class="float-right text-muted text-sm">0 mins</span>-->
            </a>
		
            <div class="dropdown-divider"></div>
            <a href="../forms/NewAmbulanceRegistration.php" class="dropdown-item">
              <i class="fas fa-ambulance mr-2"></i><?php require('../../includes/AllnewAmbulanceRegistration.php') ?> new Ambulance Registration
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
			<div class="dropdown-divider"></div>
            <a href="../forms/NewStaysRegistration.php" class="dropdown-item">
              <i class="fas fa-hotel mr-2"></i><?php require('../../includes/AllnewStaysRegistration.php') ?> new Stays Registration
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
			<div class="dropdown-divider"></div>
            <a href="../forms/NewHomeguestHouseRegistration.php" class="dropdown-item">
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
            <a href="../forms/NewCarRequests.php" class="dropdown-item">
              <i class="fas fa-car mr-2"></i> <?php require('../../includes/Allnewcarrequests.php') ?> new Car Rental Requests
              <!--<span class="float-right text-muted text-sm">0 mins</span>-->
            </a>
			<div class="dropdown-divider"></div>
            <a href="../forms/NewAirportTaxiRequests.php" class="dropdown-item">
              <i class="fas fa-taxi mr-2"></i> <?php require('../../includes/Allnewairporttaxirequests.php') ?> new Airport Taxis Requests
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
            <div class="dropdown-divider"></div>
            <a href="../forms/NewAmbulanceRequests.php" class="dropdown-item">
              <i class="fas fa-ambulance mr-2"></i><?php require('../../includes/Allnewambulancerequests.php') ?> new Ambulance Requests
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
			<div class="dropdown-divider"></div>
            <a href="../forms/NewStaysRequests.php" class="dropdown-item">
              <i class="fas fa-hotel mr-2"></i><?php require('../../includes/Allnewstaysrequests.php') ?> new Stays Requests
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
			<div class="dropdown-divider"></div>
            <a href="../forms/NewHomeguestHouseRequests.php" class="dropdown-item">
              <i class="fas fa-home mr-2"></i> <?php require('../../includes/Allnewhomeguesthouserequests.php') ?> new Tour Package Requests
              <!--<span class="float-right text-muted text-sm">2 days</span>-->
            </a>
            <div class="dropdown-divider"></div>
            <a href="../forms/NewRequests.php" class="dropdown-item dropdown-footer">See All Requests</a>
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
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Forms
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../forms/AddDestination.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Destinations</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../forms/AddCars.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Cars</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../forms/AddTaxis.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Airport Taxi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../forms/AddAmbulance.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Ambulance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../forms/AddGuestHouses.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home Guest Houses</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../forms/AddTourismArticles.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Tourism Articles</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../forms/AddTravelArticles.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Travel Articles</p>
                  </a>
                </li>
				<li class="nav-item">
                  <a href="../forms/AddBlog.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Blog</p>
                  </a>
                </li>
				 <li class="nav-item">
                  <a href="../forms/AddCurrency.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit Currency</p>
                  </a>
                </li>
				 <li class="nav-item">
                  <a href="../forms/AddTourismSite.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Tourism Site</p>
                  </a>
                </li>
				 <li class="nav-item">
                  <a href="../forms/AddEvents.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Events</p>
                  </a>
                </li>
				 <li class="nav-item">
                  <a href="../forms/AddTourismPackage.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Tour Package</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                <p>
                  Records
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                
                <li class="nav-item">
                  <a href="../tables/cart.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Cart</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tables/destinations.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registered Destinations</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tables/cars.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registered Cars</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tables/taxis.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registered Airport Taxi</p>
                  </a>
                </li>
				<li class="nav-item">
                  <a href="../tables/ambulances.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registered Ambulances</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tables/guesthouses.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home Guest Houses</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tables/rooms.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registered Rooms</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="../tables/tourismarticles.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tourism Articles</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tables/travelarticles.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>TravelArticles</p>
                  </a>
                </li>
				 <li class="nav-item">
                  <a href="../tables/Blogs.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Blogs</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tables/registeredusers.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registered Users</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../tables/adminusers.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Admin Users</p>
                  </a>
                </li>
				<li class="nav-item">
                  <a href="../tables/serviceusers.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Service Providers Logins</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">Others</li>
            <li class="nav-item">
              <a href="../calendar.php" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Calendar
                  <span class="badge badge-info right">1</span>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="../gallery.php" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                  Gallery
                </p>
              </a>
            </li>
            <li class="nav-item  menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Pages
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="invoice.php" class="nav-link  active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Invoice</p>
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
              <h1>Invoice</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Invoice</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> Note:</h5>
                This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
              </div>


              <!-- Main content -->
              <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-12">
                    <h4>
                      <img src="../../dist/img/AdminLTELogo.png" style="Height:40px;"> PANOBOOKING
                      <small class="float-right">Date: <?php echo date("d/M/Y") ?></small>
                    </h4>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">
                    From
                    <address>
                      <strong>Panobooking LTD</strong><br>
                      UMF House, 3rd Floor<br>
                      Sir Apollo Kagwa Rd, Plot 160, Kampala <br>
                      Phone: (256) 741822377<br>
                      Email: info@panobooking.email
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    To
                    <address>
					  <?php require_once('../../connect/connect.php');
						   if(isset($_GET['SelectType'])){
							   $placetype=$_GET['SelectType'];
							   $placename=$_GET['selectproperty'];
							   if($placetype=="Stays"){
						$sales9 ="SELECT Place,City,Country,ExactLocation,EmailAddress,ContactNo  FROM `pickuplocations` where Place='$placename' LIMIT 1";
						$result9=mysqli_query($link,$sales9);
						while($row9=mysqli_fetch_assoc($result9))
						{
						echo '<strong>'.$placename.'</strong><br>';
						  echo $row9['ExactLocation'].'<br>';
						  echo $row9['City'].', '.$row9['Country'].'<br>';
						  echo 'Phone: '.$row9['ContactNo'].'<br>';
						  echo 'Email: '.$row9['EmailAddress'];
						}
							   }else if($placetype=="Rental Cars"){
						$sales9 ="SELECT CurrentLocation,City,EmailAddress,TelephoneNumber  FROM `carrentals` where DriverName='$placename'LIMIT 1";
						$result9=mysqli_query($link,$sales9);
						while($row9=mysqli_fetch_assoc($result9))
						{
						  echo '<strong>'.$placename.'</strong><br>';
						  echo $row9['CurrentLocation'].'<br>';
						  echo $row9['City'].',Uganda<br>';
						  echo 'Phone: '.$row9['TelephoneNumber'].'<br>';
						  echo 'Email: '.$row9['EmailAddress'];
						}
							   }
						   
						else if($placetype=="Airport Taxis"){
						$sales9 ="SELECT TelephoneNumber,EmailAddress  FROM `airporttaxi` where TaxiNo='$placename' LIMIT 1";
						$result9=mysqli_query($link,$sales9);
						while($row9=mysqli_fetch_assoc($result9))
						{
						echo '<strong>'.$placename.'</strong><br>';
						  echo 'Entebbe<br>';
						  echo 'Wakiso,Uganda<br>';
						  echo 'Phone: '.$row9['TelephoneNumber'].'<br>';
						  echo 'Email: '.$row9['EmailAddress'];
						}
							   }
							   else if($placetype=="Ambulances"){
						$sales9 ="SELECT CurrentLocation,City,EmailAddress,TelephoneNumber  FROM `ambulances` where TaxiNo='$placename' LIMIT 1";
						$result9=mysqli_query($link,$sales9);
						while($row9=mysqli_fetch_assoc($result9))
						{
						echo '<strong>'.$placename.'</strong><br>';
						  echo $row9['CurrentLocation'].'<br>';
						  echo $row9['City'].',Uganda<br>';
						  echo 'Phone: '.$row9['TelephoneNumber'].'<br>';
						  echo 'Email: '.$row9['EmailAddress'];
						}
							   }
						   }									   
						   ?>		
                      
                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <b>Invoice #0002</b><br>
                    <br>
                    <!--<b>Order ID:</b> 4F3S8J<br>-->
                    <b>Payment Due:</b><?php echo date("d/M/Y") ?><br>
                    <b>Account:</b> 968-34567
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                  <div class="col-12 table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
						 <th>Date</th>
                          <th>Qty</th>
                          <th>Item</th>
                          <!--<th>Description</th>-->
                          <th>Subtotal</th>
                        </tr>
                      </thead>
                      <tbody>
                       
						<?php
						 if(isset($_GET['SelectType'])){
						 $placetype=$_GET['SelectType'];
						 $placename=$_GET['selectproperty'];
						require_once('../../connect/connect.php');
						if($placetype=="Airport Taxis" || $placetype=="Ambulances"){
							 $sales7 = "SELECT * FROM `cart` where ProductName='$placename' order by IDs Desc";
                        $result7 = mysqli_query($link, $sales7);
                        $counter3 = 1;
                        $totalstock = 0;
                        while ($row7 = mysqli_fetch_assoc($result7)) {
							echo'<tr>';
                          echo'<td>'.$row7['created_at'].'</td>';
                           echo'<td>'. $row7['Quantity'] .'</td>';
                           echo'<td>'. $row7['ProductName'] .'</td>';
                           //echo'<td>'.$row7['Descriptions'] .'</td>';
                           echo'<td>UGX '.(0.05*$row7['Cost']) .'</td>';
                         echo'</tr>';
						}
						 }
						else{
                        $sales7 = "SELECT * FROM `cart` where Facility='$placename' order by IDs Desc";
                        $result7 = mysqli_query($link, $sales7);
                        $counter3 = 1;
                        $totalstock = 0;
                        while ($row7 = mysqli_fetch_assoc($result7)) {
							echo'<tr>';
                          echo'<td>'.$row7['created_at'].'</td>';
                           echo'<td>'. $row7['Quantity'] .'</td>';
                           echo'<td>'. $row7['ProductName'] .'</td>';
                           //echo'<td>'.$row7['Descriptions'] .'</td>';
                           echo'<td>UGX '.(0.05*$row7['Cost']) .'</td>';
                         echo'</tr>';
						}
						 }
						 }
						 ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                  <!-- accepted payments column -->
                  <div class="col-6">
                    <p class="lead">Payment Methods:</p>
                    <img src="../../dist/img/credit/visa.png" alt="Visa">
                    <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                    <!--<img src="../../dist/img/credit/american-express.png" alt="American Express">-->
                    <!--<img src="../../dist/img/credit/paypal2.png" alt="Paypal">-->

                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                      <strong>Note:</strong>
					  Please payments can be made to the account number provided above through a direct bank deposit or using these cards.
                    </p>
                  </div>
                  <!-- /.col -->
                  <div class="col-6">
                    <p class="lead">Amount Due on <?php echo " ".date("d/M/Y") ?></p>

                    <div class="table-responsive">
                      <table class="table">
                        <tr>
                          <th style="width:50%">Total:</th>
						  <?php
							 if(isset($_GET['SelectType'])){
						 $placetype=$_GET['SelectType'];
						 $placename=$_GET['selectproperty'];
						require_once('../../connect/connect.php');
						if($placetype=="Airport Taxis" || $placetype=="Ambulances"){
							$sales ="SELECT SUM(Cost) as Sales FROM `cart` where ProductName='$placename'";
							$result=mysqli_query($link,$sales);
							$row=mysqli_fetch_assoc($result);
							$totalsales=$row['Sales'];

							$totals=$totalsales;
							if($totals>=1){
							echo "<td>UGX ".(0.05*$totals)."</td>";
							}else{
							echo "0";
								}
							 }
						else{
							$sales ="SELECT SUM(Cost) as Sales FROM `cart` where Facility='$placename'";
							$result=mysqli_query($link,$sales);
							$row=mysqli_fetch_assoc($result);
							$totalsales=$row['Sales'];

							$totals=$totalsales;
							if($totals>=1){
							echo "<td>UGX ".(0.05*$totals)."</td>";
							}else{
							echo "0";
								}
							 }
							 } 
							?>
                          
                        </tr>
                        <!--<tr>
                          <th>Tax (9.3%)</th>
                          <td>$10.34</td>
                        </tr>
						
                        <tr>
                          <th>Total:</th>
                          <td>$265.24</td>
                        </tr>-->
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class="col-12">
				    <?php
							 if(isset($_GET['SelectType'])){
						 $placetype=$_GET['SelectType'];
						 $placename=$_GET['selectproperty'];
                    echo'<a href="invoice-print.php?SelectType='.$placetype.'&selectproperty='.$placename.'" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>';
							 }
							 ?>
                    <!--<button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                      Payment
                    </button>
                    <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                      <i class="fas fa-download"></i> Generate PDF
                    </button>-->
                  </div>
                </div>
              </div>
              <!-- /.invoice -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
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
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
</body>

</html>