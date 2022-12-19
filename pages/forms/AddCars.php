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
  <title>PANOBOOKING | Rental Cars</title>
  <link rel="shortcut icon" type="image/x-icon" href="../../dist/img/AdminLTELogo.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
<!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
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
                  <a href="AddDestination.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Destinations</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="AddCars.php" class="nav-link active">
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
                <li class="nav-item">
                  <a href="../examples/profile.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Profile</p>
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
              <h1>Rental Cars Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../../DashBoard.php">Home</a></li>
                <li class="breadcrumb-item active">Rental Cars Form</li>
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
                  <h3 class="card-title">Add Rental Car</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="../formsinsert/insertcars.php" enctype="multipart/form-data">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Car Name</label>
                      <input type="text" class="form-control" id="carregno" name="carregno" placeholder="Enter Rental Car Name.." required>
                    </div>
					  <div class="form-group">
                      <label for="exampleInputEmail1">Category</label>
                      <select class="form-control" id="CarCategory" name="CarCategory" required>
                        <option Value="Van">Van</option>
                        <option Value="Land Cruiser">Land Cruiser</option>
                        <option Value="Coaster">Coaster</option>
						 <option Value="Convertible">Convertible</option>
						  <option Value="Budget RoofTop Tent Truck">Budget RoofTop Tent Truck</option>
						   <option Value="Wedding Car">Wedding Car</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Car Specifications</label>
                      <input type="text" class="form-control" id="carspec" name="carspec" placeholder="Enter car Specifications e.g (Model)" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Ratings</label>
                      <input type="text" class="form-control" id="ratings" name="ratings" placeholder="Rate this Car" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Company</label>
                      <input type="text" class="form-control" id="drivername" name="drivername" placeholder="Enter Company Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Driver Age</label>
                      <input type="number" class="form-control" id="driverage" name="driverage" placeholder="Enter Drivers Age" required>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Rental Price Per Day/Kampala</label>
                      <input type="number" class="form-control" id="rentalprice" name="rentalprice" placeholder="Enter Rental Price Per Day Kampala.." required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Rental Price Per Day/Upcountry</label>
                      <input type="number" class="form-control" id="rentalpriceperday" name="rentalpriceperday" placeholder="Enter Rental Price Per Day Upcountry ..." required>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">No Of Passengers</label>
                      <input type="number" class="form-control" id="noofpassengers" name="noofpassengers" placeholder="No. of Passengers" required>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">No Of Doors</label>
                      <input type="number" class="form-control" id="noofdoors" name="noofdoors" placeholder="No. of Doors" required>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Automatic</label>
                      <select class="form-control" id="automaticoption" name="automaticoption" required>
                        <option Value="Yes">Yes</option>
                        <option Value="No">No</option>
                      </select>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Laggages</label>
                      <select class="form-control" id="Laggagesoption" name="Laggagesoption" required>
                        <option Value="Yes">Yes</option>
                        <option Value="No">No</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Address</label>
                      <input type="text" class="form-control" id="address" name="address" placeholder="Enter Parking Address of Car" required>
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
                      <label for="exampleInputEmail1">Description</label>
                      <textarea class="form-control" rows="3" id="description" name="description" placeholder="Enter car Description..."></textarea>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Include 5%</label>
                      <select class="form-control" id="fivepercent" name="fivepercent" required>
                        <option Value="Yes">Yes</option>
                        <option Value="No">No</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Car Photo</label>
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
                    <button type="submit" id="carssubmit" name="carssubmit" class="btn btn-primary">Submit</button>
					<th><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-category">Category Images</button></th>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
			
			
		<div class="modal fade" id="modal-category">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Rental Car Category Image</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddCars.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
			<select class="form-control" id="CarCategory" name="CarCategory" required>
                        <option Value="Van">Van</option>
                        <option Value="Land Cruiser">Land Cruiser</option>
                        <option Value="Coaster">Coaster</option>
						 <option Value="Convertible">Convertible</option>
						  <option Value="Budget RoofTop Tent Truck">Budget RoofTop Tent Truck</option>
						   <option Value="Wedding Car">Wedding Car</option>
            </select>
             <p>&nbsp;</p>			
			<div class="input-group">
			<div class="custom-file">
			  <input type="file" class="custom-file-input" id="Filenames" name="Filenames">
			  <label class="custom-file-label" for="exampleInputFile">Car Category Image(Dimensions should be 850x850 pixels)</label>
			</div>
			 </div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savecategory" value="savecategory" class="btn btn-primary">Save Image</button>
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
		 
		   if (isset($_REQUEST['savecategory'] )=="savecategory") {
			$CarCategory = $_POST['CarCategory'];
			$fileName = $_FILES['Filenames']['name'];
			$temp = explode(".", $_FILES["Filenames"]["name"]);
			$newfilename = $CarCategory.'.' .'jpg';
			$target = '../../../AndroidDriver/FileUpload/CarCategory/';
			$fileTarget = $target . $newfilename;
			$tempFileName = $_FILES["Filenames"]["tmp_name"];
			$result = move_uploaded_file($tempFileName, $fileTarget);
			echo '<script type="application/javascript">';
			echo"alert('Successful Uploaded Photo');";
			echo'window.location.href="AddCars.php";';
			echo '</script>';
		  }
		  ?>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Form Element sizes -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Most Recently Registered Cars</h3>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Car Reg No.</th>
                        <th>Car Spec</th>
                        <th>Driver Name</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $dates = date("Y-m-d");;
                      require_once('../../connect/connect.php');
                      $sales7 = "SELECT * FROM `carrentals` order by IDs Desc LIMIT 50";
                      $result7 = mysqli_query($link, $sales7);
                      $counter3 = 1;
                      while ($row7 = mysqli_fetch_assoc($result7)) {
                        echo "<tr>";
                        $id = $row7['IDs'];
                        echo  "<td>" . $counter3 . "</td>";
                        echo  "<td>" . $row7['TaxiNo'] . "</td>";
                        echo  "<td>" . $row7['CarSpec'] . "</td>";
                        echo  "<td>" . $row7['DriverName'] . "</td>";
                        echo "</tr>";
                        $counter3++;
                      }
                      ?>
                    </tbody>
                    <tfoot>
                     
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">Rental Car Image</button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Edit Rental Car Details</button>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">Other Car Details</button>
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
      </section>
      <!-- /.content -->
    </div>
			<div class="modal fade" id="modal-search">
        <div class="modal-dialog">
          <div class="modal-content bg-info">
            <div class="modal-header">
              <h4 class="modal-title">Search Terms</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           <form action="AddCars.php" method="post" >
            <div class="modal-body">
			<div class="input-group">
			<div class="custom-file">
			<select class="form-control" id="CompanyName" name="CompanyName" onchange="loadcarsx(this.value)" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct DriverName FROM `carrentals`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Company</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['DriverName'].'">'.$row9['DriverName'].'</option>';
						}	?>			
             </select>
			<select class="form-control" id="carnames" name="carnames"  required>
						<option value="">Select car</option>'
             </select>	
			</div></div>			
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
	   <Script type="text/javascript">
          function loadcarsx(CompanyName) {
            var html = $.ajax({
              type: "POST",
              url: "AJAX.php",
              data: "CompanyName=" + CompanyName,
              async: false
            }).responseText;
            if (html) {
              $("#carnames").html(html);
            }
          }
        </Script>
		 <?php
		  if (isset($_REQUEST['savesearchterm'])) {
			  require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['CompanyName']);
			$carno=mysqli_real_escape_string($link,$_POST['carname']); 			
			$realvalue=mysqli_real_escape_string($link,$_POST['terms']); 
			$query = "UPDATE `carrentals` SET SearchTerms='".$realvalue."' WHERE DriverName='".$place."' and TaxiNo='".$carno."'";
			$result4=mysqli_query($link,$query);
			
			if($result4){
			echo '<script type="application/javascript">';
			echo'alert("Addition Done");';
			echo'window.location.href="AddCars.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Addition Failed");';
			echo'window.location.href="AddCars.php";';
			echo '</script>';
			}
			
		  }
		  ?>
	
	<div class="modal fade" id="modal-warning">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Other Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddCars.php" method="post">
            <div class="modal-body">
			<div class="input-group">
			<div class="custom-file">
			<select class="form-control" id="CompanyName" name="CompanyName" onchange="loadcars(this.value)" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct DriverName FROM `carrentals`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Company</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['DriverName'].'">'.$row9['DriverName'].'</option>';
						}	?>			
             </select>
			<select class="form-control" id="carname" name="carname"  required>
						<option value="">Select car</option>'
             </select>	
			</div></div>			 
			
			 <p>&nbsp;</p>
			<div class="input-group">
			<div class="custom-file">
			 <select class="form-control" id="popup" name="popup"  required>
						<option value=''>Includes pop up Roof</option>;	
						<option value='Yes'>Yes</option>;	
						<option value='No'>No</option>';								
             </select>
			 <select class="form-control" id="audioinput" name="audioinput"  required>
						<option value=''>Includes Audio Input</option>;	
						<option value='Yes'>Yes</option>;	
						<option value='No'>No</option>';								
             </select>
			 </div></div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <select class="form-control" id="allwheeldrive" name="allwheeldrive"  required>
						<option value=''>Includes All Wheel Drive</option>;	
						<option value='Yes'>Yes</option>;	
						<option value='No'>No</option>';								
             </select>
			 <select class="form-control" id="bluetooth" name="bluetooth"  required>
						<option value=''>Includes Bluetooth</option>;	
						<option value='Yes'>Yes</option>;	
						<option value='No'>No</option>';								
             </select>
			 </div></div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <select class="form-control" id="usbinput" name="usbinput"  required>
						<option value=''>Includes USB Input</option>;	
						<option value='Yes'>Yes</option>;	
						<option value='No'>No</option>';								
             </select>
			 <select class="form-control" id="fmradio" name="fmradio"  required>
						<option value=''>Includes FM radio</option>;	
						<option value='Yes'>Yes</option>;	
						<option value='No'>No</option>';								
             </select>
			 </div></div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <select class="form-control" id="gpsnavigation" name="gpsnavigation"  required>
						<option value=''>Includes GPS Navigation</option>;	
						<option value='Yes'>Yes</option>;	
						<option value='No'>No</option>';								
             </select>
			 <select class="form-control" id="sunroof" name="sunroof"  required>
						<option value=''>Includes Sun Roof</option>;	
						<option value='Yes'>Yes</option>;	
						<option value='No'>No</option>';								
             </select>
			 </div></div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <select class="form-control" id="backcamera" name="backcamera"  required>
						<option value=''>Includes Back Camera</option>;	
						<option value='Yes'>Yes</option>;	
						<option value='No'>No</option>';								
             </select>
			 <select class="form-control" id="tv" name="tv"  required>
						<option value=''>Includes TV</option>;	
						<option value='Yes'>Yes</option>;	
						<option value='No'>No</option>';								
             </select>
			 </div></div>
			 <p>&nbsp;</p>
			 <div class="input-group">
			<div class="custom-file">
			 <select class="form-control" id="alldegreecamera" name="alldegreecamera"  required>
						<option value=''>Includes All Degree Camera</option>;	
						<option value='Yes'>Yes</option>;	
						<option value='No'>No</option>';								
             </select>
			</div></div>
			<p>&nbsp;</p>	
			<div class="input-group">
			<button type="submit" name="savedetails" value="savedetails" class="btn btn-primary">Save Details</button>
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
		   if (isset($_REQUEST['savedetails'] )=="savedetails") {
			$CompanyName = $_POST['CompanyName'];
			$carname = $_POST['carname'];
			$popup = $_POST['popup'];
			$audioinput = $_POST['audioinput'];
			$allwheeldrive = $_POST['allwheeldrive'];
			$bluetooth = $_POST['bluetooth'];
			$usbinput = $_POST['usbinput'];
			$fmradio = $_POST['fmradio'];
			$gpsnavigation = $_POST['gpsnavigation'];
			$sunroof = $_POST['sunroof'];
			$backcamera = $_POST['backcamera'];
			$tv = $_POST['tv'];
			$alldegreecamera = $_POST['alldegreecamera'];
			require_once('../../connect/connect.php');
			$sql="INSERT INTO `carincludes` (Company,Car,PopupRoof,AudioInput,AllWheelDrive,Bluetooth,USBInput,FMRadio,GPSNavigation,SunRoof,BackCamera,TV,AllDegreeCamera) VALUES('$CompanyName','$carname','$popup','$audioinput','$allwheeldrive','$bluetooth','$usbinput','$fmradio','$gpsnavigation','$sunroof','$backcamera','$tv','$alldegreecamera')";
			mysqli_query($link,$sql);

			echo '<script type="application/javascript">';
			echo"alert('Successful Added Details');";
			echo'window.location.href="AddCars.php";';
			echo '</script>';
		  }
		  ?>
	   <Script type="text/javascript">
          function loadcars(CompanyName) {
            var html = $.ajax({
              type: "POST",
              url: "AJAX.php",
              data: "CompanyName=" + CompanyName,
              async: false
            }).responseText;
            if (html) {
              $("#carname").html(html);
            }
          }
        </Script>
		
	
		<div class="modal fade" id="modal-success">
        <div class="modal-dialog">
          <div class="modal-content bg-success">
            <div class="modal-header">
              <h4 class="modal-title">Add Rental Car Image</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="AddCars.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
			<select class="form-control" id="CompanyName" name="CompanyName" onchange="loadcarss(this.value)" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct DriverName FROM `carrentals`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Company</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['DriverName'].'">'.$row9['DriverName'].'</option>';
						}	?>			
             </select>
             <p>&nbsp;</p>
			<select class="form-control" id="Place" name="Place" required>
						<option value="">Select Car</option>			
             </select>
             <p>&nbsp;</p>			
			<div class="input-group">
			<div class="custom-file">
			  <input type="file" class="custom-file-input" id="Filenames" name="Filenames">
			  <label class="custom-file-label" for="exampleInputFile">Car Image(Dimensions should be 850x850 pixels)</label>
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
		   <button type="submit" name="updateplaceimages" value="updateima" class="btn btn-danger">Update Image</button>
			<button type="submit" name="saveplaceimages" value="saveima" class="btn btn-primary">Save Image</button>
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
	   <Script type="text/javascript">
          function loadcarss(CompanyName) {
            var html = $.ajax({
              type: "POST",
              url: "AJAXs.php",
              data: "CompanyName=" + CompanyName,
              async: false
            }).responseText;
            if (html) {
              $("#Place").html(html);
            }
          }
        </Script>
	   <?php
		  if (isset($_REQUEST['updateplaceimages'])=="updateima") {
			$place = $_POST['Place'];
			$CompanyName = $_POST['CompanyName'];
			$realvalue=$_POST['realvalues']; 
			$fileName = $_FILES['Filenames']['name'];
			$temp = explode(".", $_FILES["Filenames"]["name"]);
			$newfilename = $CompanyName.$place.$realvalue.'.' .'jpg';
			$target = '../../../AndroidDriver/FileUpload/';
			$fileTarget = $target . $newfilename;
			$tempFileName = $_FILES["Filenames"]["tmp_name"];
			$result = move_uploaded_file($tempFileName, $fileTarget);
			echo '<script type="application/javascript">';
			echo'alert("Update of Car Image Done");';
			echo'window.location.href="AddCars.php";';
			echo '</script>';
		  }
		  
		   if (isset($_REQUEST['saveplaceimages'] )=="saveima") {
			$place = $_POST['Place'];
			$CompanyName = $_POST['CompanyName'];
			require_once('../../connect/connect.php');
			$sql1="SELECT PhotoUri FROM carrentals where TaxiNo like '".$place."%' and DriverName Like '".$CompanyName."%'";
			$result1=mysqli_query($link,$sql1);
			if (mysqli_num_rows($result1) == 1)
			{
			$row = mysqli_fetch_array($result1);
			$imageurl=$row['PhotoUri']+1;
			$sql="UPDATE carrentals SET PhotoUri='$imageurl' where TaxiNo like '".$place."%' and DriverName Like '".$CompanyName."%'";
			mysqli_query($link,$sql);
			}
			$fileName = $_FILES['Filenames']['name'];
			$temp = explode(".", $_FILES["Filenames"]["name"]);
			$newfilename = $CompanyName.$place .$imageurl.'.' .'jpg';
			$target = '../../../AndroidDriver/FileUpload/';
			$fileTarget = $target . $newfilename;
			$tempFileName = $_FILES["Filenames"]["tmp_name"];
			$result = move_uploaded_file($tempFileName, $fileTarget);
			echo '<script type="application/javascript">';
			echo"alert('Successful Uploaded Photo No.$imageurl');";
			echo'window.location.href="AddCars.php";';
			echo '</script>';
		  }
		  ?>
	  
	  <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Update Rental Car Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
             <form action="../formsinsert/updatetaxidetails.php" method="post">
			 <div class="modal-body">
        <p>&nbsp;</p>
		<div class="input-group">
			<div class="custom-file">
			<select class="form-control" id="CompanyName" name="CompanyName" onchange="loadcarsss(this.value)" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct DriverName FROM `carrentals`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Company</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['DriverName'].'">'.$row9['DriverName'].'</option>';
						}	?>			
             </select>
             <p>&nbsp;</p>
        <select class="form-control" id="taxi" name="taxi" required>
         <option value="Other">Select Car</option>
        </select>
		</div>
		</div>
        <p>&nbsp;</p>
        <div class="input-group">
          <div class="custom-file">
            <select class="form-control" id="taxioption" name="taxioption" required>
              <option value="">--Select what you want to change--</option>
              <option value="Car Specifications">Car Specifications</option>
              <option value="Ratings">Ratings</option>
              <option value="Driver Name">Company</option>
              <option value="Driver Age">Driver Age</option>
              <option value="Rental Price">Rental Price/ Kampala</option>
			  <option value="Rental Price Upcountry">Rental Price/ Upcountry</option>
              <option value="Address">Address</option>
              <option value="Email address">Email address</option>
              <option value="Telephone No">Telephone No</option>
			  <option value="No Of Passengers">No of Passengers</option>
			  <option value="No Of Doors">No Of Doors</option>
			  <option value="Description">Description</option>
			   <option value="Category">Category</option>
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
        <Button type="submit" name="updatedetails" id="updatedetails" class="btn btn-block btn-success">UPDATE</Button>
      </form>
	  </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
	  <Script type="text/javascript">
          function loadcarsss(CompanyName) {
            var html = $.ajax({
              type: "POST",
              url: "AJAXss.php",
              data: "CompanyName=" + CompanyName,
              async: false
            }).responseText;
            if (html) {
              $("#taxi").html(html);
            }
          }
        </Script>
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