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
			 <a href="../forms/NewMessages.php" class="dropdown-item">
              <i class="fas fa-ambulance mr-2"></i><?php require('../../includes/Allnewmessages.php') ?> new Messages Registration
            </a>
			<div class="dropdown-divider"></div>
            <a href="../forms/NewMessages.php" class="dropdown-item">
              <i class="fas fa-ambulance mr-2"></i><?php require('../../includes/Allnewfeedback.php') ?> new Client Feedback
            </a>
			<div class="dropdown-divider"></div>
            <a href="../forms/NewMessages.php" class="dropdown-item">
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
                  <a href="../forms/AddDestination.php" class="nav-link">
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
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
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
                  <a href="../tables/destinations.php" class="nav-link active">
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
                  <a href="ambulances.php" class="nav-link">
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
                  <a href="Blogs.php" class="nav-link">
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
                  <a href="serviceusers.php" class="nav-link">
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
              <h1>More Details For <?php echo $_GET['detailsplace'] ?></h1>
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
            <div class="col-md-6">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add More Details for <?php echo $_GET['detailsplace'] ?></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="../formsinsert/insertdestinationdetails.php">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Exact Location</label>
                      <input type="text" class="form-control" id="exactlocation" name="exactlocation" placeholder="Enter Exact Location of Facility" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Coordinates</label>
                      <input type="text" class="form-control" id="coordinates" name="coordinates" placeholder="Enter Facility Coordinates" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Credit Card Needed</label>
                      <select class="form-control" id="creditcard" name="creditcard" required>
                        <option Value="Credit Card Needed">Credit Card Needed</option>
                        <option Value="No Credit Card Needed">No Credit Card Needed</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Facilities</label>
                      <textarea class="form-control" rows="3" id="facilities" name="facilities" placeholder="Add All the facilities at hotel..."></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bed and BreakFast</label>
                      <select class="form-control" id="bedbreakfast" name="bedbreakfast" required>
                        <option Value="Inclusive">Inclusive</option>
                        <option Value="Not Inclusive">Not Inclusive</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Policies</label>
                      <textarea class="form-control" rows="3" id="policies" name="policies" placeholder="Enter Policies ..."></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Sustainability Initiatives</label>
                      <textarea class="form-control" rows="3" id="sustainabilityinitiatives" name="sustainabilityinitiatives" placeholder="Add All Sustainability Initiatives at hotel..."></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Checkout Time</label>
                      <select class="form-control" id="checkouttime" name="checkouttime" required>
                        <option Value="Ckeckout from 6:00AM-7:00AM">Ckeckout from 6:00AM-7:00AM</option>
                        <option Value="Ckeckout from 7:00AM-8:00AM">Ckeckout from 7:00AM-8:00AM</option>
                        <option Value="Ckeckout from 8:00AM-9:00AM">Ckeckout from 8:00AM-9:00AM</option>
                        <option Value="Ckeckout from 9:00AM-10:00AM">Ckeckout from 9:00AM-10:00AM</option>
                        <option Value="Ckeckout from 10:00AM-11:00AM">Ckeckout from 10:00AM-11:00AM</option>
                        <option Value="Ckeckout from 11:00AM-12:00PM">Ckeckout from 11:00am-12:00PM</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Transportation</label>
                      <input type="text" class="form-control" id="transportation" name="transportation" placeholder="Enter Transport Means " required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Transport to Airport</label>
                      <input type="text" class="form-control" id="airporttransport" name="airporttransport" placeholder="Enter Airport Transport" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Parking</label>
                      <select class="form-control" id="parking" name="parking" required>
                        <option Value="Parking is Free">Parking is Free</option>
                        <option Value="Parking is Paid For">Parking is Paid For</option>
                        <option Value="No Parking">No Parking</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Market</label>
                      <input type="text" class="form-control" id="market" name="market" placeholder="Enter Market Text to Facility" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Supermarket</label>
                      <input type="text" class="form-control" id="supermarket" name="supermarket" placeholder="Enter Supermarket Text to Facility" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Cafe & Bar</label>
                      <input type="text" class="form-control" id="cafeandbar" name="cafeandbar" placeholder="Enter Cafe and Bar" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Restaurant</label>
                      <input type="text" class="form-control" id="restaurant" name="restaurant" placeholder="Enter Available Next Restaurant" required>
                    </div>
                    <input type="hidden" class="form-control" id="moredetails" name="moredetails" value="<?php echo $_GET['moredetails'] ?>">
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" id="destinationupdate" name="destinationupdate" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->


            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
              <!-- Form Element sizes -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title"><?php echo $_GET['detailsplace'] ?> Rooms Summary</h3>
                </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Room Name</th>
                        <th>Room Size</th>
                        <th>Price</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $dates = date("Y-m-d");
                      $hotelnames = $_GET['detailsplace'];
                      require_once('../../connect/connect.php');
                      $sales7 = "SELECT * FROM `rooms` where HotelName='$hotelnames' order by IDs DESC";
                      $result7 = mysqli_query($link, $sales7);
                      $counter3 = 1;
                      $totalstock = 0;

                      while ($row7 = mysqli_fetch_assoc($result7)) {
                        echo " <tr>";
                        $id = $row7['IDs'];
                        echo  "<td>" . $counter3 . "</td>";
                        echo  "<td>" . $row7['RoomName'] . "</td>";
                        echo  "<td>" . $row7['RoomSize'] . "</td>";
                        echo  "<td>" . $row7['Cost'] . "</td>";
                        echo " </tr>";
                        $counter3++;
                      }
                      ?>
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