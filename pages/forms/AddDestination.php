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
  <title>PANOBOOKING | Destinations</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../dist/img/AdminLTELogo.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
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

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
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
              <i class="fas fa-home mr-2"></i> <?php require('../../includes/Allnewhomeguesthouserequests.php') ?> new Homeguest Houses Requests
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
        <!-- Sidebar user panel (optional) -->
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
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Forms
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="AddDestination.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Destinations</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="AddCars.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Cars</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="AddTaxis.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Airport Taxi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="AddAmbulance.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Ambulance</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="AddGuestHouses.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Home Guest Houses</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="AddTourismArticles.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Tourism Articles</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="AddTravelArticles.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Travel Articles</p>
                  </a>
                </li>
				<li class="nav-item">
                  <a href="AddBlog.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Blog</p>
                  </a>
                </li>
				<li class="nav-item">
                  <a href="AddCurrency.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Edit Currency</p>
                  </a>
                </li>
				 <li class="nav-item">
                  <a href="AddTourismSite.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Tourism Site</p>
                  </a>
                </li>
				 <li class="nav-item">
                  <a href="AddEvents.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Events</p>
                  </a>
                </li>
				 <li class="nav-item">
                  <a href="AddTourismPackage.php" class="nav-link">
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
                  <a href="../tables/ambulances.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registered Ambulances</p>
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
                  <a href="../tables/registeredusers.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Registered Users</p>
                  </a>
                </li>
				 <li class="nav-item">
                  <a href="../tables/Blogs.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Blogs</p>
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

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Pages
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../examples/invoice.php" class="nav-link">
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
              <h1>Destinations Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../../DashBoard.php">Home</a></li>
                <li class="breadcrumb-item active">Destinations Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add Destinations</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="../formsinsert/insertdestination.php" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Country</label>
                      <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">City</label>
                      <input type="text" class="form-control" id="city" name="city" placeholder="Enter City" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Region</label>
                      <input type="text" class="form-control" id="region" name="region" placeholder="Enter Region" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Destination Place</label>
                      <input type="text" class="form-control" id="place" name="place" placeholder="Enter Place" required>
                    </div>
					  <div class="form-group">
                      <label for="exampleInputEmail1">Place Type</label>
                      <select class="form-control" id="placetype" name="placetype" required>
                        <option Value="Hotel">Hotel</option>
                        <option Value="Home Stays">Home Stays</option>
						<option Value="Guest Houses">Guest Houses</option>
						<option Value="Apartments">Apartments</option>
						<option Value="Country Homes">Country Homes</option>
						<option Value="Villas">Villas</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Place Ratings</label>
                      <input type="number" class="form-control" id="ratings" name="ratings" placeholder="Enter Rating" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Least Price</label>
                      <input type="number" class="form-control" id="leastprice" name="leastprice" placeholder="Enter the Least price for the place facilities" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Taxes Inclusive</label>
                      <select class="form-control" id="taxesinclusive" name="taxesinclusive" required>
                        <option Value="Tax Inclusive">Tax Inclusive</option>
                        <option Value="Not Inclusive">Not Inclusive</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Least Price Short Description</label>
                      <input type="text" class="form-control" id="leastpricedes" name="leastpricedes" placeholder="Enter Least Price Short Description" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Comment</label>
                      <input type="text" class="form-control" id="leastpricecom" name="leastpricecom" placeholder="Enter 30 character Comment" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Payment Options</label>
                      <select class="form-control" id="paymentoption" name="paymentoption" required>
                        <option Value="Pay at Facility">Pay at Facility</option>
                        <option Value="E-Payment">E-Payment</option>
                        <option Value="Pay In the Bank">Pay In the Bank</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" id="emailaddress" name="emailaddress" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Telephone No.</label>
                      <input type="tel" class="form-control" id="phone" name="phone" placeholder="Telephone Number" required>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputPassword1">Map</label>
                      <textarea class="form-control" rows="4" id="maps" name="maps" placeholder="Paste Map Script here" required></textarea>
                    </div>
                    <!--pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"-->
                    <div class="form-group">
                      <label for="exampleInputFile">Facility Main Photo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="Filename" name="Filename">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" id="destinationssubmit" name="destinationssubmit" class="btn btn-primary">Submit</button>
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-maps">Add Map</button>
					   <a href="AddDestination2.php"><button type="button" class="btn btn-success" >Add Details</button></a>
					   <a href="../tables/addroom.php"><button type="button" class="btn btn-success" >Add Rooms</button></a>
					     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-description">Description</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
			  
		<div class="modal fade" id="modal-description">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Add Description</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           <form action="AddDestination.php" method="post" >
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
			<select class="form-control" id="Place" name="Place" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct Place  FROM `pickuplocations`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Place</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['Place'].'">'.$row9['Place'].'</option>';
						}	?>			
             </select>
			 </div>
            </div>
             <p>&nbsp;</p>			
			 <div class="input-group">
					
			<textarea class="form-control" rows="5" id="realvalue" placeholder="Add Details Here" name="realvalue" required></textarea>
					
            </div>
			<p>&nbsp;</p>
			<div class="input-group">
			   <button type="submit" name="savedesc" Value="savedesc" class="btn btn-danger">Save Description</button>
			</div>
            </div>
			</form>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
	   <?php
		  if (isset($_REQUEST['savedesc'])=="savedesc") {
			  require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Place']);	
			$realvalue=mysqli_real_escape_string($link,$_POST['realvalue']); 
			
			 $query = "INSERT INTO `propertydescription`(PropertyName,Description) VALUES('$place','$realvalue')";
			$result4=mysqli_query($link,$query);
			if($result4){
			echo '<script type="application/javascript">';
			echo'alert("Successful");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Failed");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
			}
			
		  }
		  ?>


            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Form Element sizes -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Destinations Summary</h3>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>City/Town</th>
                        <th>Region</th>
                        <th>Country</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $dates = date("Y-m-d");;
                      require_once('../../connect/connect.php');
                      $sales7 = "SELECT * FROM `destinations` order by City ASC LIMIT 10";
                      $result7 = mysqli_query($link, $sales7);
                      $counter3 = 1;
                      while ($row7 = mysqli_fetch_assoc($result7)) {
                        echo "<tr>";
                        $id = $row7['City'];
                        echo  "<td>" . $counter3 . "</td>";
                        echo  "<td>" . $row7['City'] . "</td>";
                        echo  "<td>" . $row7['Region'] . "</td>";
                        echo  "<td>" . $row7['Country'] . "</td>";
                        echo  "<td><form method='get' action='../tables/destinations.php'><button type='submit' name='adddetails'  value='" . $id . "' class='btn btn-block btn-primary'>+Place</button></form></td>";
                        echo "</tr>";
                        $counter3++;
                      }
                      ?>
                    </tbody>
					 <tfoot>
				
				  
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Destination City Image</button>
                   <button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">Edit City Details</button>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">Place Image</button>
                  <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#modal-success">Edit Place Details</button>
				   <button type="button"  class="btn btn-info" data-toggle="modal" data-target="#modal-search">Search Terms</button>
               
                </tfoot>
                  </table>

                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->


            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
		<!-- /.modal -->
		
		<div class="modal fade" id="modal-search">
        <div class="modal-dialog">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">Search Terms</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           <form action="AddDestination.php" method="post" >
            <div class="modal-body">
			<select class="form-control" id="Place" name="Place" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct Place  FROM `pickuplocations`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Place</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['Place'].'">'.$row9['Place'].'</option>';
						}	?>			
             </select>
			 <p>&nbsp;</p>
			 <div class="input-group">		
					  <textarea class="form-control" rows="4" id="terms" name="terms" placeholder="Please add key words here" required></textarea>		
            </div>
			<p>&nbsp;</p>
			<div class="input-group">
			   <button type="submit" name="savesearchterm" class="btn btn-primary">Add Search Terms</button>
			</div>
            </div>
			</form>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
		 <?php
		  if (isset($_REQUEST['savesearchterm'])) {
			  require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Place']);	
			$realvalue=mysqli_real_escape_string($link,$_POST['terms']); 
			$query = "UPDATE `pickuplocations` SET SearchTerms='".$realvalue."' WHERE Place='".$place."'";
			$result4=mysqli_query($link,$query);
			
			if($result4){
			echo '<script type="application/javascript">';
			echo'alert("Addition Done");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Addition Failed");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
			}
			
		  }
		  ?>
		<!-- /.modal -->

		
		<div class="modal fade" id="modal-maps">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Update Maps</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           <form action="AddDestination.php" method="post" >
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
			<select class="form-control" id="Place" name="Place" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct Place  FROM `pickuplocations`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Place</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['Place'].'">'.$row9['Place'].'</option>';
						}	?>			
             </select>
			 </div>
            </div>
             <p>&nbsp;</p>			
			 <div class="input-group">
					
			<textarea class="form-control" rows="5" id="realvalue" placeholder="Add the Updated Details Here" name="realvalue" required></textarea>
					
            </div>
			<p>&nbsp;</p>
			<div class="input-group">
			   <button type="submit" name="mapupdate" Value="mapupdate" class="btn btn-danger">Update Maps</button>
			</div>
            </div>
			</form>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
	   <?php
		  if (isset($_REQUEST['mapupdate'])=="mapupdate") {
			  require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Place']);	
			$realvalue=mysqli_real_escape_string($link,$_POST['realvalue']); 
			
			 $query = "UPDATE `pickuplocations` SET coordinates='".$realvalue."' WHERE Place='".$place."'";
			$result4=mysqli_query($link,$query);
			
			if($result4){
			echo '<script type="application/javascript">';
			echo'alert("Update Done");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Update Failed");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
			}
			
		  }
		  ?>
		
		<div class="modal fade" id="modal-success">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Update Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           <form action="AddDestination.php" method="post" >
            <div class="modal-body">
			<select class="form-control" id="Place" name="Place" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct Place  FROM `pickuplocations`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Place</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['Place'].'">'.$row9['Place'].'</option>';
						}	?>			
             </select>
             <p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="PlaceOption" name="PlaceOption" required>
					 <option value="">--Select what you want to change--</option>
						<option value="Country">Country</option>
						<option value="City">City</option>		
						<option value="Ratings">Ratings</option>	
						<option value="Least Price">Least Price</option>	
						<option value="Taxes Inclusive">Taxes Inclusive</option>	
						<option value="Least Price Short Description">Least Price Short Description</option>	
						<option value="Comment">Comment</option>	
						<option value="Payment Options">Payment Options</option>	
						<option value="Email">Email</option>
						<option value="Telephone">Telephone</option>	
                        </select>
					</div>
            </div>
			 <p>&nbsp;</p>
			 <div class="input-group">
					<div class="custom-file">
					 <input type="text" class="form-control" id="realvalue" placeholder="Add the Updated Details Here" name="realvalue" required>
					</div>
            </div>
			<p>&nbsp;</p>
			<div class="input-group">
			   <button type="submit" name="placeupdate" class="btn btn-danger">Update Details</button>
			</div>
            </div>
			</form>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
	   <?php
		  if (isset($_REQUEST['placeupdate'])) {
			
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Place']);	
			$realvalue=mysqli_real_escape_string($link,$_POST['realvalue']); 
			$PlaceOption=mysqli_real_escape_string($link,$_POST['PlaceOption']);
			if($PlaceOption=="Country"){
			 $query = "UPDATE `pickuplocations` SET Country='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="City"){
			 $query = "UPDATE `pickuplocations` SET City ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Ratings"){
			 $query = "UPDATE `pickuplocations` SET Rating ='".$realvalue."' WHERE Place='".$place."'";
			}
			else if($PlaceOption=="Least Price"){
			 $query = "UPDATE `pickuplocations` SET Prices ='".$realvalue."' WHERE Place='".$place."'";
			}
			else if($PlaceOption=="Taxes Inclusive"){
			 $query = "UPDATE `pickuplocations` SET TaxesInclusive ='".$realvalue."' WHERE Place='".$place."'";
			}
			else if($PlaceOption=="Least Price Short Description"){
			 $query = "UPDATE `pickuplocations` SET PriceSpecifications ='".$realvalue."' WHERE Place='".$place."'";
			}
			else if($PlaceOption=="Comment"){
			 $query = "UPDATE `pickuplocations` SET Comment ='".$realvalue."' WHERE Place='".$place."'";
			}
			else if($PlaceOption=="Payment Options"){
			 $query = "UPDATE `pickuplocations` SET CreditCard ='".$realvalue."' WHERE Place='".$place."'";
			}
			else if($PlaceOption=="Email"){
			 $query = "UPDATE `pickuplocations` SET EmailAddress ='".$realvalue."' WHERE Place='".$place."'";
			}
			else if($PlaceOption=="Telephone"){
			 $query = "UPDATE `pickuplocations` SET ContactNo ='".$realvalue."' WHERE Place='".$place."'";
			}
			$result4=mysqli_query($link,$query);
			
			if($result4){
			echo '<script type="application/javascript">';
			echo'alert("Update Done");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Update Failed");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
			}
			
		  }
		  ?>
	  
	  
	  
		
		 <div class="modal fade" id="modal-warning">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Place Image</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
			<select class="form-control" id="Places" name="Places" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct Place  FROM `pickuplocations`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Place</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['Place'].'">'.$row9['Place'].'</option>';
						}	?>			
             </select>
             <p>&nbsp;</p>			
			<div class="input-group">
			<div class="custom-file">
			  <input type="file" class="custom-file-input" id="Filenames" name="Filenames">
			  <label class="custom-file-label" for="exampleInputFile">Place Image(Dimensions should be 850x850 pixels)</label>
			</div>
			 </div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="number" class="form-control" id="realvalues" placeholder="Input Image Number if you want to update Image" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
		   <button type="submit" name="updateplaceimage" value="updateima" class="btn btn-danger">Update Image</button>
			<button type="submit" name="saveplaceimage" value="saveima" class="btn btn-primary">Save Image</button>
		   </div>
            </div>
			</form>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
	   <?php
		  if (isset($_REQUEST['updateplaceimage'])=="updateima") {
			  require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$realvalue=mysqli_real_escape_string($link,$_POST['realvalues']); 
			$place2=$_POST['Places'];
			$fileName = $_FILES['Filenames']['name'];
			$temp = explode(".", $_FILES["Filenames"]["name"]);
			$newfilename = $place2.$realvalue.'.' .'jpg';
			$target = '../../../AndroidFiles/DestinationImages/';
			$fileTarget = $target . $newfilename;
			$tempFileName = $_FILES["Filenames"]["tmp_name"];
			$result = move_uploaded_file($tempFileName, $fileTarget);
			echo '<script type="application/javascript">';
			echo'alert("Update of Place Image Done");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
		  }
		  
		   if (isset($_REQUEST['saveplaceimage'] )=="saveima") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$place2=$_POST['Places'];
			$sql1="SELECT PhotoUrl FROM pickuplocations where Place like '".$place."%'";
			$result1=mysqli_query($link,$sql1);
			if (mysqli_num_rows($result1) == 1)
			{
			$row = mysqli_fetch_array($result1);
			$imageurl=$row['PhotoUrl']+1;
			$sql="UPDATE pickuplocations SET PhotoUrl='$imageurl' where Place like '".$place."%'";
			mysqli_query($link,$sql);
			}
			$fileName = $_FILES['Filenames']['name'];
			$temp = explode(".", $_FILES["Filenames"]["name"]);
			$newfilename = $place2 .$imageurl.'.' .'jpg';
			$target = '../../../AndroidFiles/DestinationImages/';
			$fileTarget = $target . $newfilename;
			$tempFileName = $_FILES["Filenames"]["tmp_name"];
			$result = move_uploaded_file($tempFileName, $fileTarget);
			echo '<script type="application/javascript">';
			echo"alert('Successful Uploaded Photo No.$imageurl');";
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
		  }
		  ?>

      <div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Update Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           <form action="AddDestination.php" method="post" >
            <div class="modal-body">
			<select class="form-control" id="Place" name="Place" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct City FROM `destinations`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Destination City</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['City'].'">'.$row9['City'].'</option>';
						}	?>			
             </select>
             <p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="PlaceOption" name="PlaceOption" required>
					 <option value="">--Select what you want to change--</option>
						<option value="Country">Country</option>
						<option value="Region">Region</option>						
                        </select>
					</div>
            </div>
			 <p>&nbsp;</p>
			 <div class="input-group">
					<div class="custom-file">
					 <input type="text" class="form-control" id="realvalue" placeholder="Add the Update Details Here" name="realvalue" required>
					</div>
            </div>
			<p>&nbsp;</p>
			<div class="input-group">
			   <button type="submit" name="saveupdate" class="btn btn-primary">Update Details</button>
			</div>
            </div>
			</form>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
		 <?php
		  if (isset($_REQUEST['saveupdate'])) {
			  require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Place']);	
			$realvalue=mysqli_real_escape_string($link,$_POST['realvalue']); 
			$PlaceOption=mysqli_real_escape_string($link,$_POST['PlaceOption']);
			
			if($PlaceOption=="Country"){
			 $query = "UPDATE `destinations` SET Country='".$realvalue."' WHERE City='".$place."'";
			}else if($PlaceOption=="Region"){
			 $query = "UPDATE `destinations` SET Region ='".$realvalue."' WHERE City='".$place."'";
			}
			$result4=mysqli_query($link,$query);
			
			if($result4){
			echo '<script type="application/javascript">';
			echo'alert("Update Done");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Update Failed");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
			}
			
		  }
		  ?>
		<!-- /.modal -->

      <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add Image</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form action="AddDestination.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
			<select class="form-control" id="Place" name="Place" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct City FROM `destinations`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Destination City</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['City'].'">'.$row9['City'].'</option>';
						}	?>			
             </select>
             <p>&nbsp;</p>			
			<div class="input-group">
			<div class="custom-file">
			 <input type="file" class="custom-file-input" id="Filename" name="Filename">
			  <label class="custom-file-label" for="exampleInputFile">City Image(Dimensions should be 850x850 pixels)</label>
			</div>
			 <p>&nbsp;</p>			
		    </div>
			<div class="input-group">
			   <button type="submit" name="saveimage" class="btn btn-danger">Save Image</button>
			   </div>
            </div>
			</form>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
            
            </div>
			
          </div>
		  <?php
		  if (isset($_REQUEST['saveimage'])) {
			  require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Place']);
			$fileName = $_FILES['Filename']['name'];
			$temp = explode(".", $_FILES["Filename"]["name"]);
			$newfilename = $place . '.' .'jpg';
			$target = '../../../AndroidFiles/CityImages/';
			$fileTarget = $target . $newfilename;
			$tempFileName = $_FILES["Filename"]["tmp_name"];
			$result = move_uploaded_file($tempFileName, $fileTarget);
			echo '<script type="application/javascript">';
			echo'alert("Upload of City Image Done");';
			echo'window.location.href="AddDestination.php";';
			echo '</script>';
		  }
		  ?>
		  
		  
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
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
  <!-- SweetAlert2 -->
  <script src="../../plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="../../plugins/toastr/toastr.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  

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
  <!-- Page specific script -->
  <script>
    $(function() {
      bsCustomFileInput.init();
    });
  </script>
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