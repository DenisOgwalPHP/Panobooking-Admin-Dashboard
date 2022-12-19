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
              <h1>More Details</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../../DashBoard.php">Home</a></li>
                <li class="breadcrumb-item active">More Details Form</li>
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
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add More Details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
				
                <form method="POST" action="../formsinsert/insertdestinationdetails2.php">
				
                  <div class="card-body">
                    <div class="input-group">
					<div class="col-md-6">
					<label for="exampleInputEmail1">Property Name</label>
					<select class="form-control" id="moredetails" name="moredetails" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct Place  FROM `pickuplocations`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Place</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['Place'].'">'.$row9['Place'].'</option>';
						}	?>			
					 </select>
					 </div>
					<div class="col-md-6">
                      <label for="exampleInputEmail1">Exact Location</label>
                      <input type="text" class="form-control" id="exactlocation" name="exactlocation" placeholder="Enter Exact Location of Facility" required>
					  </div>
					 
					</div>
					
					
					 <div class="input-group">
					  <div class="col-md-6">
					<label for="exampleInputEmail1">Credit Card Needed</label>
                      <select class="form-control" id="creditcard" name="creditcard" required>
                        <option Value="Credit Card Needed">Credit Card Needed</option>
                        <option Value="No Credit Card Needed">No Credit Card Needed</option>
                      </select>
                    </div>
					<div class="col-md-6">
					 <label for="exampleInputEmail1">Bed and BreakFast Info</label>
					 <input type="text" class="form-control" id="bedbreakfast" name="bedbreakfast" required>
					 </div>
					
                    </div>
                    
                  <!-- /.card-body -->
				</div>
                  <div class="card-footer">
                    <button type="submit" id="destinationupdate" name="destinationupdate" class="btn btn-primary">Submit</button>
				   </div>
                </form>
			    </div>
              <!-- /.card -->
            </div>
			
			  <div class="col-md-12">
			 <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Extra Details</h3>
                </div>
                <div class="card-body">
			
			   <div class="row">  
			    <div class="col-md-2 col-sm-6">
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-accessibility">Accessibility</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-businessfacility">Business Facilities</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-childpolicy">Children Policy</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-childextrabed">Children Extra Bed</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-cleaningservices">Cleaning Services</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-closestairport">Closest Airport</button>
				</div>
			  </div>
			  
			  	<div class="row">
			    <div class="col-md-2 col-sm-6">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-foodanddrink">Food & Drink</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-houserules">House Rules</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-kitchen">Kitchen</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-mediaandtechnology">Media & Tech</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-naturalbeauty">Natural Beauty</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-nearbyplaces">Near By Places</button>
				</div>
				</div>
			 
			  
			  <div class="row">
			    <div class="col-md-2 col-sm-6">
				<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-outdoor">Outdoor</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-parking">Parking</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-popularamenities">Popular Amenities</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-publictransport">Public Transport</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-stayreasons">Reasons For Stay</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-onsiterestaurants">Onsite Restaurants</button>
				</div>
			  </div>
			    
			   <div class="row">
			    <div class="col-md-2 col-sm-6">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-security">Security</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-spa">Spa</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-topattractions">Top Attractions</button>
				</div>
				 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-transportation">Transporttaion</button>
				</div>
				<div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-view">View</button>
				</div>	
				<div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-markets">Markets</button>
				</div>
								
			  </div>
			 <div class="row">
			 <div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-supermarkets">SuperMarkets</button>
			</div>
			<div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-nearbyrestaurants">Nearby Restaurants</button>
			</div>			
			<div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-bathroom">Bathrooom</button>
			</div>		
			<div class="col-md-2 col-sm-6">
				 <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-bedroom">Bedroom</button>
			</div>		
				
			</div> 
			   </div>
			   </div>
			   
		<div class="modal fade" id="modal-bedroom">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Bedroom Amenity</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
			<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Bedroom Amenity" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savebedroomamenity" value="savebedroomamenity" class="btn btn-danger">Save Amenity</button>
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
	 <?php
		  		  
		   if (isset($_REQUEST['savebedroomamenity'] )=="savebedroomamenity") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `bedroom`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
		  
		<div class="modal fade" id="modal-bathroom">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Bathroom Amenity</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
			<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Bathroom Amenity" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savebathroomamenity" value="savebathroomamenity" class="btn btn-danger">Save Amenity</button>
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
	 <?php
		  		  
		   if (isset($_REQUEST['savebathroomamenity'] )=="savebathroomamenity") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `bathroom`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
		<div class="modal fade" id="modal-nearbyrestaurants">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Add Near by Restaurants</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
			<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Nearby Restaurants Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="distance" placeholder="Input Distance from Property" name="distance">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savenearbyrestaurants" value="savenearbyrestaurants" class="btn btn-danger">Save Nearby Restaurants</button>
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
	 <?php
		  		  
		   if (isset($_REQUEST['savenearbyrestaurants'] )=="savenearbyrestaurants") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			$distance = mysqli_real_escape_string($link,$_POST['distance']);
			
			$sql="INSERT INTO  `nearbyrestaurants`(PropertyName,Place,Distance) VALUES('$place','$amenity','$distance')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
			   
		<div class="modal fade" id="modal-supermarkets">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Add Near by Supermarkets</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Nearby Supermarkets Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="distance" placeholder="Input Distance from Property" name="distance">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savenearbysupermarkets" value="savenearbysupermarkets" class="btn btn-danger">Save Nearby SuperMarkets</button>
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
	 <?php
		  		  
		   if (isset($_REQUEST['savenearbysupermarkets'] )=="savenearbysupermarkets") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			$distance = mysqli_real_escape_string($link,$_POST['distance']);
			
			$sql="INSERT INTO  `nearbysupermarkets`(PropertyName,Place,Distance) VALUES('$place','$amenity','$distance')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
			   
			   
		<div class="modal fade" id="modal-markets">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Add Near by Markets</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Nearby Markets Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="distance" placeholder="Input Distance from Property" name="distance">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savenearbymarkets" value="savenearbymarkets" class="btn btn-danger">Save Nearby Markets</button>
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
	 <?php
		  		  
		   if (isset($_REQUEST['savenearbymarkets'] )=="savenearbymarkets") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			$distance = mysqli_real_escape_string($link,$_POST['distance']);
			
			$sql="INSERT INTO  `nearbymarkets`(PropertyName,Place,Distance) VALUES('$place','$amenity','$distance')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
			   
		<div class="modal fade" id="modal-accessibility">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Accessibility</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Accessbility Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="saveaccessibility" value="saveaccessibility" class="btn btn-danger">Save Accessibility</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['saveaccessibility'] )=="saveaccessibility") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `accessibility`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
			   
		<div class="modal fade" id="modal-businessfacility">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Business Facilities</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Business Facility Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savebusinessfacility" value="savebusinessfacility" class="btn btn-danger">Save Business Facility</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savebusinessfacility'] )=="savebusinessfacility") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `businessfacilities`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
			   
		<div class="modal fade" id="modal-childpolicy">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Children Policy</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
			 	<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			  <textarea class="form-control" id="policy" rows="3" placeholder="Input Policy Here" name="policy"> </textarea>
			</div> 			
		    </div>
			
						
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savepolicy" value="savepolicy" class="btn btn-danger">Save Policy</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savepolicy'] )=="savepolicy") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$policy = mysqli_real_escape_string($link,$_POST['policy']);
			$sql="INSERT INTO  `childrenpolicies`(PropertyName,Policy) VALUES('$place','$policy')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
			   
		<div class="modal fade" id="modal-childextrabed">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Child Extra Bed Rule</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			 <div class="custom-file">
			  <select class="form-control" id="yearsrange" name="yearsrange" required>
						<option Value="">Select Age Range Option</optionn>
                        <option Value="0-10yrs">0-10yrs</option>
                        <option Value="11-18Yrs">11-18Yrs</option>
              </select>
			  </div> 						  
		    </div>
			
			<p>&nbsp;</p>	
			 <div class="input-group"> 	
			<div class="custom-file">
			  <input type="text" class="form-control" id="extracondition" placeholder="Input Condition Here" name="extracondition">
			</div> 			
		    </div>
			
						
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="saveextrabedcondition" value="saveextrabedcondition" class="btn btn-danger">Save Child Extra Bed Condition</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['saveextrabedcondition'] )=="saveextrabedcondition") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$yearsrange = mysqli_real_escape_string($link,$_POST['yearsrange']);
			$extracondition = mysqli_real_escape_string($link,$_POST['extracondition']);
			$sql="INSERT INTO  `childandextrabed`(PropertyName,YearsRange,ExtraCondition) VALUES('$place','$yearsrange','$extracondition')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
			   
		<div class="modal fade" id="modal-cleaningservices">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Cleaning Services</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
			 	<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Cleaning Services Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savecleaningservices" value="savecleaningservices" class="btn btn-danger">Save Cleaning Service</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savecleaningservices'] )=="savecleaningservices") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			$sql="INSERT INTO  `cleaning`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
			   
		<div class="modal fade" id="modal-closestairport">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Closest Airport</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Closest Airport" name="realvalues">
			</div> 		
		    </div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="distance" placeholder="Input Distance from Property" name="distance">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="closestairport" value="closestairport" class="btn btn-danger">Save Closest Airport</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['closestairport'] )=="closestairport") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			$distance = mysqli_real_escape_string($link,$_POST['distance']);
			
			$sql="INSERT INTO  `closestairport`(PropertyName,Airport,Distance) VALUES('$place','$amenity','$distance')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
			   
		<div class="modal fade" id="modal-foodanddrink">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add Food and Drink Amenities</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Food And Drink Amenity Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savefooddrink" value="savefooddrink" class="btn btn-danger">Save Food & Drink Amenity</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savefooddrink'] )=="savefooddrink") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `foodanddrink`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
			   
		<div class="modal fade" id="modal-houserules">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add House Rules</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			 <div class="custom-file">
			  <select class="form-control" id="cardacceptability" name="cardacceptability" required>
						<option Value="">Select Card Acceptability Option</option>
                        <option Value="Yes">Acceptable</option>
                        <option Value="No">Not Acceptability</option>
              </select>
			  </div> 		
			<div class="custom-file">
			    <select class="form-control" id="pets" name="pets" required>
						<option Value="">Select Pets Option</option>
                        <option Value="Yes">Allowed</option>
                        <option Value="No">Not Allowed</option>
              </select>
			  </div> 				  
		    </div>
			
			<p>&nbsp;</p>	
			 <div class="input-group">
			 <div class="custom-file">			
			    <select class="form-control" id="paymentcancelation" name="paymentcancelation" required>
						<option Value="">Select Payment Cancelation Option</option>
                        <option Value="Yes">Allowed</option>
                        <option Value="No">Not Allowed</option>
              </select>
			  </div> 	
			<div class="custom-file">
			  <select class="form-control" id="agerestriction" name="agerestriction" required>
						<option Value="">Select Age Restriction Option</option>
                        <option Value="Yes">Restricted</option>
                        <option Value="No">Not Restricted</option>
              </select>
			</div>
							
		    </div>
			
			<p>&nbsp;</p>	
			 <div class="input-group">
			 <div class="custom-file">
			   <input type="text" class="form-control" id="checkin" placeholder="Input Check In Hours Here" name="checkin">
			</div> 	
			<div class="custom-file">
			  <input type="text" class="form-control" id="checkout" placeholder="Input Check Out Hours Here" name="checkout">
              </select>
			</div> 			
		    </div>
			
						
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savehouserules" value="savehouserules" class="btn btn-danger">Save House Rules</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savehouserules'] )=="savehouserules") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$checkout = mysqli_real_escape_string($link,$_POST['checkout']);
			$checkin = mysqli_real_escape_string($link,$_POST['checkin']);
			$agerestriction = mysqli_real_escape_string($link,$_POST['agerestriction']);
			$paymentcancelation = mysqli_real_escape_string($link,$_POST['paymentcancelation']);
			$cardacceptability = mysqli_real_escape_string($link,$_POST['cardacceptability']);
			$pets = mysqli_real_escape_string($link,$_POST['pets']);
			
			$sql="INSERT INTO  `houserules`(PropertyName,CheckIn,CheckOut,PaymentCancelation,AgeRestriction,Pets,CardAcceptability) VALUES('$place','$checkin','$checkout','$paymentcancelation','$agerestriction','$pets','$cardacceptability')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
			   
		<div class="modal fade" id="modal-kitchen">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add Kitchen Amenities</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Kitchen Amenity Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savekitchen" value="savekitchen" class="btn btn-danger">Save Kitchen Amenity</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savekitchen'] )=="savekitchen") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `kitchen`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
			   
		<div class="modal fade" id="modal-mediaandtechnology">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add Media and Technology Amenities</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Madia and Technology Amenity Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savemediatech" value="savemediatech" class="btn btn-danger">Save Media & Technology Amenity</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savemediatech'] )=="savemediatech") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `mediaandtechnology`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
			   
		<div class="modal fade" id="modal-naturalbeauty">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add Natural Beautiful Places</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Natural Beauty Place Here" name="realvalues">
			</div> 		
		    </div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="distance" placeholder="Input Distance from Place" name="distance">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="naturalbeauty" value="naturalbeauty" class="btn btn-danger">Save Natural Beautiful Places</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['naturalbeauty'] )=="naturalbeauty") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			$distance = mysqli_real_escape_string($link,$_POST['distance']);
			
			$sql="INSERT INTO  `naturalbeauty`(PropertyName,Place,Distance) VALUES('$place','$amenity','$distance')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
			   
		<div class="modal fade" id="modal-nearbyplaces">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add Near By Places</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Near By Place Here" name="realvalues">
			</div> 		
		    </div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="distance" placeholder="Input Distance from Place" name="distance">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="nearbyplace" value="nearbyplace" class="btn btn-danger">Save Near By Place</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['nearbyplace'] )=="nearbyplace") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			$distance = mysqli_real_escape_string($link,$_POST['distance']);
			
			$sql="INSERT INTO  `nearbyplaces`(PropertyName,Place,Distance) VALUES('$place','$amenity','$distance')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
			   
		<div class="modal fade" id="modal-outdoor">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Add Outdoor Amenities</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Outdoor Amenity Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="saveoutdoor" value="saveoutdoor" class="btn btn-primary">Save Outdoor Amenity</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['saveoutdoor'] )=="saveoutdoor") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `outdoor`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
			   
		<div class="modal fade" id="modal-parking">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Add parking Amenities</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Parking Amenity Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="saveparking" value="saveparking" class="btn btn-primary">Save Parking Amenity</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['saveparking'] )=="saveparking") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `parking`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
			   
		<div class="modal fade" id="modal-popularamenities">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Select Popular Amenities</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
			 	<select class="form-control" id="Places" name="Places" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct Place  FROM `pickuplocations`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Place</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['Place'].'">'.$row9['Place'].'</option>';
						}	?>			
					 </select>
			</div> 
			<div class="custom-file">
			  <select class="form-control" id="swimmingpool" name="swimmingpool" required>
						<option Value="">Select Swimming Pool Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			  </div> 				
		    </div>

			<p>&nbsp;</p>	
			 <div class="input-group">
			<div class="custom-file">
			    <select class="form-control" id="shuttle" name="shuttle" required>
						<option Value="">Select Shuttle Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			  </div> 
			<div class="custom-file">			
			    <select class="form-control" id="wifi" name="wifi" required>
						<option Value="">Select Wifi Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			  </div> 					  
		    </div>
			
			<p>&nbsp;</p>	
			 <div class="input-group">
			<div class="custom-file">
			  <select class="form-control" id="nosmokingroom" name="nosmokingroom" required>
						<option Value="">Select No Smoking Room Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div>
			<div class="custom-file">
			  <select class="form-control" id="fitnesscenter" name="fitnesscenter" required>
						<option Value="">Select Fitness Center Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 					
		    </div>
			
			<p>&nbsp;</p>	
			 <div class="input-group">
			<div class="custom-file">
			  <select class="form-control" id="spa" name="spa" required>
						<option Value="">Select Spa Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 
			<div class="custom-file">
			  <select class="form-control" id="restaurant" name="restaurant" required>
						<option Value="">Select Restaurant Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 					
		    </div>
			
			<p>&nbsp;</p>	
			 <div class="input-group">
			<div class="custom-file">
			  <select class="form-control" id="teamaker" name="teamaker" required>
						<option Value="">Select Tea Maker Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 
			<div class="custom-file">
			  <select class="form-control" id="bar" name="bar" required>
						<option Value="">Select Bar Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 					
		    </div>
			
			<p>&nbsp;</p>	
			 <div class="input-group">
			<div class="custom-file">
			  <select class="form-control" id="breakfast" name="breakfast" required>
						<option Value="">Select Breakfast Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div>
			<div class="custom-file">
			  <select class="form-control" id="forex" name="forex" required>
						<option Value="">Select Forex Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 				
		    </div>
			
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savepopularamenities" value="savepopularamenities" class="btn btn-primary">Save Popular Amenities</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savepopularamenities'] )=="savepopularamenities") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$swimmingpool = $_POST['swimmingpool'];
			$shuttle = $_POST['shuttle'];
			$wifi = $_POST['wifi'];
			$nosmokingroom = $_POST['nosmokingroom'];
			$fitnesscenter = $_POST['fitnesscenter'];
			$spa = $_POST['spa'];
			$restaurant = $_POST['restaurant'];
			$teamaker = $_POST['teamaker'];
			$bar = $_POST['bar'];
			$breakfast = $_POST['breakfast'];
			$forex = $_POST['forex'];
			
			$sql="INSERT INTO  `popularamenities`(PropertyName,SwimmingPool,Shuttle,Wifi,NoSmokingRoom,FitnessCenter,Spa,Restaurant,TeaMaker,Bar,BreakFast,	Forex) VALUES('$place','$swimmingpool','$shuttle','$wifi','$nosmokingroom','$fitnesscenter','$spa','$restaurant','$teamaker','$bar','$breakfast','$forex')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>	   
			   
			   
		<div class="modal fade" id="modal-publictransport">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Add Public Transport Means Available</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			  <select class="form-control" id="transporttype" name="transporttype" required>
						<option Value="">Select Transport Type Option</option>
                        <option Value="Railway">Railway</option>
                        <option Value="Road">Road</option>
						 <option Value="Air">Air</option>
						  <option Value="Water">Water</option>
              </select>
			  </div> 		
		    </div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="transportname" placeholder="Input Transport Name Here" name="transportname">
			</div> 		
		    </div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="distance" placeholder="Input Distance from facility" name="distance">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="publictransport" value="publictransport" class="btn btn-primary">Save Public Transport</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['publictransport'] )=="publictransport") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$transporttype = mysqli_real_escape_string($link,$_POST['transporttype']);
			$transportname = mysqli_real_escape_string($link,$_POST['transportname']);
			$distance = mysqli_real_escape_string($link,$_POST['distance']);
			
			$sql="INSERT INTO  `publictransport`(PropertyName,TransportType,TransportName,Distance) VALUES('$place','$transporttype','$transportname','$distance')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
			   		 			 
		<div class="modal fade" id="modal-stayreasons">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Add Reasons For Stay</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="reason" placeholder="Input Reason Here" name="reason">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savereason" value="savereason" class="btn btn-primary">Save Reason</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savereason'] )=="savereason") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$reason = mysqli_real_escape_string($link,$_POST['reason']);
			
			$sql="INSERT INTO  `reasonstostayatproperty`(PropertyName,Reason) VALUES('$place','$reason')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
				 
				 			 
		<div class="modal fade" id="modal-onsiterestaurants">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Add On Site Restaurants</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="restauratname" placeholder="Input Restaurant Name Here" name="restauratname">
			</div> 		
		    </div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="food" placeholder="Input Food Prepared Here" name="food">
			</div> 		
		    </div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="openfor" placeholder="Input Hours it opens for Here" name="openfor">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="saverestaurant" value="saverestaurant" class="btn btn-primary">Save Restaurant</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['saverestaurant'] )=="saverestaurant") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$restauratname = mysqli_real_escape_string($link,$_POST['restauratname']);
			$food = mysqli_real_escape_string($link,$_POST['food']);
			$openfor = mysqli_real_escape_string($link,$_POST['openfor']);
			
			$sql="INSERT INTO  `restaurantsonsite`(PropertyName,RestaurantName,OpenFor,Food) VALUES('$place','$restauratname','$openfor','$food')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
				 
		<div class="modal fade" id="modal-view">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Select Available Views</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
			 	<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			  <select class="form-control" id="cityview" name="cityview" required>
						<option Value="">Select City View Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 
			<div class="custom-file">
			    <select class="form-control" id="poolview" name="poolview" required>
						<option Value="">Select Pool View Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 				
		    </div>
			<p>&nbsp;</p>
			<div class="input-group">
			<div class="custom-file">			
			    <select class="form-control" id="lakeview" name="lakeview" required>
						<option Value="">Select Lake View Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			  </div> 
			<div class="custom-file">
			  <select class="form-control" id="gardenview" name="gardenview" required>
						<option Value="">Select Garden View Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 					  
		    </div>
			
			<p>&nbsp;</p>	
			<div class="input-group">
			<div class="custom-file">
			  <select class="form-control" id="terraceview" name="terraceview" required>
						<option Value="">Select Terrace View Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 
			<div class="custom-file">
			  <select class="form-control" id="landmarkview" name="landmarkview" required>
						<option Value="">Select Land Mark View Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 			
		    </div>
			
			<p>&nbsp;</p>	
			<div class="input-group">
			<div class="custom-file">
			  <select class="form-control" id="mountainview" name="mountainview" required>
						<option Value="">Select Mountain View Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 
			<div class="custom-file">
			  <select class="form-control" id="streenview" name="streenview" required>
						<option Value="">Select Street View Option</option>
                        <option Value="Yes">Available</option>
                        <option Value="No">Not Available</option>
              </select>
			</div> 				
		    </div>
			
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="saveview" value="saveview" class="btn btn-primary">Save View</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['saveview'] )=="saveview") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$cityview = $_POST['cityview'];
			$poolview = $_POST['poolview'];
			$lakeview = $_POST['lakeview'];
			$gardenview = $_POST['gardenview'];
			
			$terraceview = $_POST['terraceview'];
			$landmarkview = $_POST['landmarkview'];
			$mountainview = $_POST['mountainview'];
			$streenview = $_POST['streenview'];
			
			$sql="INSERT INTO  `roomswith`(PropertyName,CityView,PoolView,LakeView,GardenView,TerraceView,LandMarkView,MountainView,StreetView) VALUES('$place','$cityview','$poolview','$lakeview','$gardenview','$terraceview','$landmarkview','$mountainview','$streenview')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
				 
		<div class="modal fade" id="modal-security">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Add Security Amenities</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Security Amenity Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savesecurity" value="savesecurity" class="btn btn-primary">Save Security Amenity</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savesecurity'] )=="savesecurity") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `security`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
				 
		<div class="modal fade" id="modal-spa">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Add Spa Amenities</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Spa Amenity Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savespa" value="savespa" class="btn btn-primary">Save Spa Amenity</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savespa'] )=="savespa") {
			require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `spa`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
				 
				 
		<div class="modal fade" id="modal-topattractions">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Add Top Attractions</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Top Attraction Here" name="realvalues">
			</div> 		
		    </div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="distance" placeholder="Input Distance from facility" name="distance">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="topattractions" value="topattractions" class="btn btn-primary">Save Top Attraction</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['topattractions'] )=="topattractions") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			$distance = mysqli_real_escape_string($link,$_POST['distance']);
			
			$sql="INSERT INTO  `topattractions`(PropertyName,Place,Distance) VALUES('$place','$amenity','$distance')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
				 
		<div class="modal fade" id="modal-transportation">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Add Transportation</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddDestination2.php" method="post">
            <div class="modal-body">
			 <div class="input-group">
			<div class="custom-file">
				<select class="form-control" id="Places" name="Places" required>
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
			<div class="custom-file">
			 <input type="text" class="form-control" id="realvalues" placeholder="Input Transport Amenity Here" name="realvalues">
			</div> 		
		    </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savetransport" value="savetransport" class="btn btn-primary">Save Transport</button>
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
	  <?php
		  		  
		   if (isset($_REQUEST['savetransport'] )=="savetransport") {
			   require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$amenity = mysqli_real_escape_string($link,$_POST['realvalues']);
			
			$sql="INSERT INTO  `transportation`(PropertyName,Amenity) VALUES('$place','$amenity')";
			mysqli_query($link,$sql);
			
			echo '<script type="application/javascript">';
			echo"alert('Successful Added');";
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
		  }
		  ?>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-12">
              <!-- Form Element sizes -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title"> Rooms Summary</h3>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
						<th>Property Name</th>
                        <th>Room Name</th>
                        <th>Room Size</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $dates = date("Y-m-d");
                      //$hotelnames =  $_SESSION['panobookingadminplace']; 
                      require_once('../../connect/connect.php');
                      $sales7 = "SELECT * FROM `rooms`  order by IDs DESC LIMIT 20";
                      $result7 = mysqli_query($link, $sales7);
                      $counter3 = 1;
                      $totalstock = 0;

                      while ($row7 = mysqli_fetch_assoc($result7)) {
                        echo " <tr>";
                        $id = $row7['IDs'];
                        echo  "<td>" . $counter3 . "</td>";
						 echo  "<td>" . $row7['HotelName'] . "</td>";
                        echo  "<td>" . $row7['RoomName'] . "</td>";
                        echo  "<td>" . $row7['RoomSize'] . "</td>";
                        echo  "<td>" . $row7['Cost'] . "</td>";
                        echo " </tr>";
                        $counter3++;
                      }
                      ?>
					   </tbody>
					 <tfoot>
				<tr>
				  <th>X</th>
                   <th>X</th>
				    <th>X</th>
				    <th><form action="../tables/addroom.php" method="POST"><button type="submit"  class="btn btn-primary" >Add Room</button></form></th>
					<th>X</th>
                </tr>
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
      </section>
      <!-- /.content -->
    </div>
	
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
			 <div class="input-group">
			<div class="custom-file">
			 <input type="text" class="form-control" id="Places" name="Places" Value="" readonly>
			</div> 		
		    </div>
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
			$place = $_POST['Places'];
			$realvalue=$_POST['realvalues']; 
			$fileName = $_FILES['Filenames']['name'];
			$temp = explode(".", $_FILES["Filenames"]["name"]);
			$newfilename = $place.$realvalue.'.' .'jpg';
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
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
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
			 <div class="input-group">
					<div class="custom-file">
					 <input type="text" class="form-control" id="Place" value="" name="Place" required readonly>
					</div>
            </div>
             <p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="PlaceOption" name="PlaceOption" required>
					 <option value="">--Select what you want to change--</option>
						<option value="Exact Location">Exact Location</option>
						<option value="Coordinates">Coordinates</option>	
						<option value="Credit Card Needed">Credit Card Needed</option>	
						<option value="Facilities">Facilities</option>	
						<option value="Bed and Breakfast">Bed and Breakfast</option>	
						<option value="Policies">Policies</option>	
						<option value="Checkout Time">Checkout Time</option>	
						<option value="Transportation">Transportation</option>	
						<option value="Transportation to Airport">Transportation to Airport</option>	
						<option value="Parking">Parking</option>	
						<option value="Market">Market</option>	
						<option value="Supermarket">Supermarket</option>	
						<option value="Cafe & Bar">Cafe & Bar</option>	
						<option value="Restaurant">Restaurant</option>							
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
			
			if($PlaceOption=="Exact Location"){
			 $query = "UPDATE `pickuplocations` SET ExactLocation='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Coordinates"){
			 $query = "UPDATE `pickuplocations` SET coordinates ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Credit Card Needed"){
			 $query = "UPDATE `pickuplocations` SET CreditCard ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Facilities"){
			 $query = "UPDATE `pickuplocations` SET Facilities ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Bed and Breakfast"){
			 $query = "UPDATE `pickuplocations` SET BedBreakFast ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Policies"){
			 $query = "UPDATE `pickuplocations` SET Policies ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Checkout Time"){
			 $query = "UPDATE `pickuplocations` SET Checkout ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Transportation"){
			 $query = "UPDATE `pickuplocations` SET Transportation ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Transportation to Airport"){
			 $query = "UPDATE `pickuplocations` SET TransportAir ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Parking"){
			 $query = "UPDATE `pickuplocations` SET TransportPark ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Market"){
			 $query = "UPDATE `pickuplocations` SET Market ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Supermarket"){
			 $query = "UPDATE `pickuplocations` SET SuperMarket ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Cafe & Bar"){
			 $query = "UPDATE `pickuplocations` SET CafeandBar ='".$realvalue."' WHERE Place='".$place."'";
			}else if($PlaceOption=="Restaurant"){
			 $query = "UPDATE `pickuplocations` SET Restaurant ='".$realvalue."' WHERE Place='".$place."'";
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
			echo'window.location.href="AddDestination2.php";';
			echo '</script>';
			}
			
		  }
		  ?>
		<!-- /.modal -->
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