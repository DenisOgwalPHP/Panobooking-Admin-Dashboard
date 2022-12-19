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
  <title>PANOBOOKING | Rooms</title>
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
                  <a href="../forms/AddDestination.php" class="nav-link active">
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
              <h1>Add Rooms</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../../DashBoard.php">Home</a></li>
                <li class="breadcrumb-item active">Add Room Form</li>
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
                  <h3 class="card-title">Add More Rooms </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="POST" action="../formsinsert/insertrooms.php" enctype="multipart/form-data">
                  <div class="card-body">
				  <div class="form-group">
                      <label for="exampleInputEmail1">Property Name</label>
                      <select class="form-control" id="roomno" name="roomno" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct Place  FROM `pickuplocations`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Place</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['Place'].'">'.$row9['Place'].'</option>';
						}	?>			
					 </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Room Name</label>
                      <input type="text" class="form-control" id="roomname" name="roomname" placeholder="Enter Room Name" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Room Size</label>
                      <input type="text" class="form-control" id="roomsize" name="roomsize" placeholder="Enter Room Size" required>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">No. Of Rooms</label>
                      <input type="noofrooms" class="form-control" id="noofrooms" name="noofrooms" placeholder="Enter No. of Rooms of this type" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bed Specifications</label>
                      <input type="text" class="form-control" id="bedspecification" name="bedspecification" placeholder="Enter Bed Specifications" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Cost</label>
                      <input type="text" class="form-control" id="costs" name="costs" placeholder="Enter Room Costs" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Bed and BreakFast</label>
                      <select class="form-control" id="bedbreakfast" name="bedbreakfast" required>
                        <option Value="Inclusive">Inclusive</option>
                        <option Value="Not Inclusive">Not Inclusive</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Refund Policy</label>
                      <select class="form-control" id="refundpolicy" name="refundpolicy" required>
                        <option Value="Refundable">Refundable</option>
                        <option Value="Non refundable">Non refundable</option>
                        <option Value="Refundable on request">Refundable on request</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Room Description</label>
                      <textarea class="form-control" rows="3" id="roomdesc" name="roomdesc" placeholder="Add All Room Decription here..."></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Room Photo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="Filename" name="Filename">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                      </div>
                    </div>
					 <div class="form-group">
                      <label for="exampleInputEmail1">Include 5%</label>
                      <select class="form-control" id="fivepercent" name="fivepercent" required>
                        <option Value="Yes">Yes</option>
                        <option Value="No">No</option>
                      </select>
                    </div>
                   
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" id="roomsubmit" name="roomsubmit" class="btn btn-primary">Submit</button>
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
                  <h3 class="card-title">Rooms Summary</h3>
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
                      //$hotelnames = $_SESSION['panobookingadminplace']; 
                      require_once('../../connect/connect.php');
                      $sales7 = "SELECT * FROM `rooms` order by IDs DESC";
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
					  
					   </tbody>
					 <tfoot>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">Add Room Image</button>
                   <button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">Edit Room Details</button>
				    <button type="button"  class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">Add Room Details</button>
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
	<Script type="text/javascript">
          function loadroomsss(Placesname) {
            var html = $.ajax({
              type: "POST",
              url: "AJAXss.php",
              data: "Placesname=" + encodeURIComponent(Placesname),
              async: false
            }).responseText;
            if (html) {
              $("#Roomname").html(html);
            }
          }
        </Script>
		
		<Script type="text/javascript">
          function loadroomidsss(Roomname) {
            var html = $.ajax({
              type: "POST",
              url: "AJAXsss.php",
              data: "Roomname=" + Roomname+"&Placesname="+  encodeURIComponent($("#Placesname").val()),
              async: false
            }).responseText;
            if (html) {
              $("#roomid").val(html);
            }
          }
        </Script>
	<div class="modal fade" id="modal-warning">
        <div class="modal-dialog modal-xl">
          <div class="modal-content bg-warning">
            <div class="modal-header">
              <h4 class="modal-title">Add Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
           <form action="addroom.php" method="post"  enctype="multipart/form-data">
            <div class="modal-body">
			 <div class="input-group">
			  <select class="form-control" id="Placesname" name="Placesname" onchange="loadroomsss(this.value)" required>
                        <?php require_once('../../connect/connect.php');
						$sales9 ="SELECT Distinct Place  FROM `pickuplocations`";
						$result9=mysqli_query($link,$sales9);
						echo '<option value="">Select Place</option>';
						while($row9=mysqli_fetch_assoc($result9)){
						echo '<option value="'.$row9['Place'].'">'.$row9['Place'].'</option>';
						}	?>			
					 </select>
				
			<select class="form-control" id="Roomname" name="Roomname" onchange="loadroomidsss(this.value)" required>
                  <option value="">Select Room Name</option>  				  
             </select>
			 
			 <input type="hidden" class="form-control" id="roomid" placeholder="roomid"  name="roomid"  required>
			 
			 <div class="custom-file">
					 <input type="text" class="form-control" id="roomsize" placeholder="Add Room size in Feet" name="roomsize" required>
					</div>
			  </div>
			 
             <p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="poolview" name="poolview" required>
					 <option value="">--Select pool View Option--</option>
						<option value="Yes">Pool View</option>
						<option value="No">No Pool View</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="cityview" name="cityview" required>
					 <option value="">--Select City View Option--</option>
						<option value="Yes">City View</option>
						<option value="No">No City View</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="lakeview" name="lakeview" required>
					 <option value="">--Select Lake View Option--</option>
						<option value="Yes">Lake View</option>
						<option value="No">No Lake View</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="gardenview" name="gardenview" required>
					 <option value="">--Select Garden View Option--</option>
						<option value="Yes">Garden View</option>
						<option value="No">No Garden View</option>							
                        </select>
					</div>
            </div>
			
			
			 <p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="bathtub" name="bathtub" required>
					 <option value="">--Select BathTub Option--</option>
						<option value="Yes">Has Bathtub</option>
						<option value="No">No Bathtub</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="airconditioning" name="airconditioning" required>
					 <option value="">--Select Air Conditioner Option--</option>
						<option value="Yes">Has Air Conditioner</option>
						<option value="No">No Air Conditioner</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="attachedbathroom" name="attachedbathroom" required>
					 <option value="">--Select Attached Bathroom Option--</option>
						<option value="Yes">Has Attached Bathroom</option>
						<option value="No">No Attached Bathroom</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="flatscreen" name="flatscreen" required>
					 <option value="">--Select Flat Screen Option--</option>
						<option value="Yes">Has Flat Screen</option>
						<option value="No">No Flat Screen</option>							
                        </select>
					</div>
            </div>
			 
			 <p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="minibar" name="minibar" required>
					 <option value="">--Select Mini bar Option--</option>
						<option value="Yes">Has Mini bar</option>
						<option value="No">No Mini bar</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="freewifi" name="freewifi" required>
					 <option value="">--Select Free Wifi Option--</option>
						<option value="Yes">Has Free Wifi</option>
						<option value="No">No Free Wifi</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="shower" name="shower" required>
					 <option value="">--Select Shower Option--</option>
						<option value="Yes">Has Shower</option>
						<option value="No">No Shower</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="toilet" name="toilet" required>
					 <option value="">--Select Toilet Option--</option>
						<option value="Yes">Has Toilet</option>
						<option value="No">No Toilet</option>							
                        </select>
					</div>
            </div>
			
			<p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="hottub" name="hottub" required>
					 <option value="">--Select Hot Tub Option--</option>
						<option value="Yes">Has Hottub</option>
						<option value="No">No Hottub</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="bathrob" name="bathrob" required>
					 <option value="">--Select Bathrob Option--</option>
						<option value="Yes">Has Bathrob</option>
						<option value="No">No Bathrob</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="safe" name="safe" required>
					 <option value="">--Select Safety Option--</option>
						<option value="Yes">Is Safe</option>
						<option value="No">Not Safe</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="towels" name="towels" required>
					 <option value="">--Select  Option--</option>
						<option value="Yes">Has Towels</option>
						<option value="No">No Towels</option>							
                        </select>
					</div>
            </div>
			
			
			<p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="twinbed" name="twinbed" required>
					 <option value="">--Select Twin Bed Option--</option>
						<option value="Yes">Has Twin Bed</option>
						<option value="No">No Twin bed</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="kingbed" name="kingbed" required>
					 <option value="">--Select King Bed Option--</option>
						<option value="Yes">Has King Bed</option>
						<option value="No">No King Bed</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="queenbed" name="queenbed" required>
					 <option value="">--Select Queen Bed Option--</option>
						<option value="Yes">Has Queen Bed</option>
						<option value="No">No Queen Bed</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="desk" name="desk" required>
					 <option value="">--Select Desk Option--</option>
						<option value="Yes">Has Desk</option>
						<option value="No">No Desk</option>							
                        </select>
					</div>
            </div>
			
			
			<p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="sittingarea" name="sittingarea" required>
					 <option value="">--Select Sitting Area Option--</option>
						<option value="Yes">Has Sitting Area</option>
						<option value="No">No Sitting Area</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="Linens" name="Linens" required>
					 <option value="">--Select Linens Option--</option>
						<option value="Yes">Has Linens Option</option>
						<option value="No">No Linens Option</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="slippers" name="slippers" required>
					 <option value="">--Select Slippers Option--</option>
						<option value="Yes">Has Slippers</option>
						<option value="No">No Slippers</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="telephone" name="telephone" required>
					 <option value="">--Select Telephone Option--</option>
						<option value="Yes">Has Telephone</option>
						<option value="No">No Telephone</option>							
                        </select>
					</div>
            </div>
			
			<p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="ironingfacility" name="ironingfacility" required>
					 <option value="">--Select Ironing Facilities Option--</option>
						<option value="Yes">Has Ironing Facilities</option>
						<option value="No">No Ironing Facilities</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="satelitechannels" name="satelitechannels" required>
					 <option value="">--Select Satelite Channels Option--</option>
						<option value="Yes">Access Satelite Channels</option>
						<option value="No">No Access to Satelite Channels</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="teamaker" name="teamaker" required>
					 <option value="">--Select Tea Maker Option--</option>
						<option value="Yes">Has Tea Maker</option>
						<option value="No">No Tea Maker</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="hairdryer" name="hairdryer" required>
					 <option value="">--Select Hair Dryer Option--</option>
						<option value="Yes">Has Hair Dryer</option>
						<option value="No">No Hair Dryer</option>							
                        </select>
					</div>
            </div>
			
			
			<p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="carpeted" name="carpeted" required>
					 <option value="">--Select Carpet Option--</option>
						<option value="Yes">Has Carpet</option>
						<option value="No">No Carpet</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="electrickettle" name="electrickettle" required>
					 <option value="">--Select Electric Kettle Option--</option>
						<option value="Yes">Has Electric Kettle</option>
						<option value="No">No Electric Kettle</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="wakeupservice" name="wakeupservice" required>
					 <option value="">--Select Wakeup Service Option--</option>
						<option value="Yes">Has Wakeup Service</option>
						<option value="No">No Wakeup Service</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="alarmClock" name="alarmClock" required>
					 <option value="">--Select Alarm Clock Option--</option>
						<option value="Yes">Has Alarm Clock</option>
						<option value="No">No Alarm Clock</option>							
                        </select>
					</div>
            </div>
			
			
			<p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="dryer" name="dryer" required>
					 <option value="">--Select Dryer Option--</option>
						<option value="Yes">Has Dryer</option>
						<option value="No">No Dryer</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="wardrobe" name="wardrobe" required>
					 <option value="">--Select Wardrobe Option--</option>
						<option value="Yes">Has Wardrobe</option>
						<option value="No">No Wardrobe</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="toiletries" name="toiletries" required>
					 <option value="">--Select Toiletries Option--</option>
						<option value="Yes">Has Toiletries</option>
						<option value="No">No Toiletries</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="refrigerator" name="refrigerator" required>
					 <option value="">--Select Refrigerator Option--</option>
						<option value="Yes">Has Refrigerator</option>
						<option value="No">No Refrigerator</option>							
                        </select>
					</div>
            </div>
			
			<p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="socket" name="socket" required>
					 <option value="">--Select Socket Option--</option>
						<option value="Yes">Has Socket</option>
						<option value="No">No Socket</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="mosquitonet" name="mosquitonet" required>
					 <option value="">--Select Mosquito Net Option--</option>
						<option value="Yes">Has Mosquito Net</option>
						<option value="No">No Mosquito Net</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="fan" name="fan" required>
					 <option value="">--Select Fan Option--</option>
						<option value="Yes">Has Fan</option>
						<option value="No">No Fan</option>							
                        </select>
					</div>
					<div class="custom-file">
					 <select class="form-control" id="balcony" name="balcony" required>
					 <option value="">--Select Balcony Option--</option>
						<option value="Yes">With Balcony</option>
						<option value="No">Without Balcony</option>							
                        </select>
					</div>
					</div>
		
			
			<p>&nbsp;</p>
			<div class="input-group">
			   <button type="submit" name="savedat" value="savedat" class="btn btn-primary">Add Details</button>
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
		  if (isset($_REQUEST['savedat'])=="savedat") {
			require_once('../../connect/connect.php');
			$roomname=mysqli_real_escape_string($link,$_POST['Roomname']);$roomid=mysqli_real_escape_string($link,$_POST['roomid']); $poolview=$_POST['poolview'];$cityview=$_POST['cityview'];$lakeview=$_POST['lakeview'];$gardenview=$_POST['gardenview'];
			$hotelname=mysqli_real_escape_string($link,$_POST['Placesname']);$bathtub=$_POST['bathtub'];$airconditioning=$_POST['airconditioning'];$attachedbathroom=$_POST['attachedbathroom'];
			$roomsize = $_POST['roomsize'];$flatscreen=$_POST['flatscreen'];$minibar=$_POST['minibar'];	$freewifi=$_POST['freewifi'];$shower=$_POST['shower'];
			$toilet=$_POST['toilet'];$hottub=$_POST['hottub'];$safe=$_POST['safe'];$bathrob=$_POST['bathrob'];$towels=$_POST['towels'];$twinbed=$_POST['twinbed'];
			$kingbed=$_POST['kingbed'];$queenbed=$_POST['queenbed'];$desk=$_POST['desk'];$sittingarea=$_POST['sittingarea'];$Linens=$_POST['Linens'];$slippers=$_POST['slippers'];
			$telephone=$_POST['telephone'];$ironingfacility=$_POST['ironingfacility'];$satelitechannels=$_POST['satelitechannels'];$teamaker=$_POST['teamaker'];$hairdryer=$_POST['hairdryer'];$carpeted=$_POST['carpeted'];
			$electrickettle=$_POST['electrickettle'];$wakeupservice=$_POST['wakeupservice'];$alarmClock=$_POST['alarmClock'];$dryer=$_POST['dryer'];$wardrobe=$_POST['wardrobe'];$toiletries=$_POST['toiletries'];
			$refrigerator=$_POST['refrigerator'];$socket=$_POST['socket'];$mosquitonet=$_POST['mosquitonet'];$fan=$_POST['fan'];$balcony=$_POST['balcony'];
			
			$query ="INSERT INTO `roomfeatures` (PropertyName,RoomName,Feet,Balcony,PoolView,CityView,LakeView,GardensView,BathTub,AirConditioning,AttachedBathroom,FlatScreen,MiniBar,FreeWifi,Shower,Toilet,HotTub,BathRobe,Safe,Towels,TwinBed,KingBed,Desk,SittingArea,Linens,Slippers,Telephone,IroningFacilities,SateliteChannels,TeaMaker,HairDryer,Carpeted,ElectricKettle,WakeupService,AlarmClock,Dryer,Wardrobe,Toiletries,Refrigerator,Socket,MosquitoNet,Fan,QueenBed,roomid) 
			VALUES('$hotelname','$roomname','$roomsize','$balcony','$poolview','$cityview','$lakeview','$gardenview','$bathtub','$airconditioning','$attachedbathroom','$flatscreen','$minibar','$freewifi','$shower','$toilet','$hottub','$bathrob','$safe','$towels','$twinbed','$kingbed','$desk','$sittingarea','$Linens','$slippers','$telephone','$ironingfacility','$satelitechannels','$teamaker','$hairdryer','$carpeted','$electrickettle','$wakeupservice','$alarmClock','$dryer','$wardrobe','$toiletries','$refrigerator','$socket','$mosquitonet','$fan','$queenbed','$roomid')";;
			$result4=mysqli_query($link,$query);
			
			if($result4){
			echo '<script type="application/javascript">';
			echo'alert("Successfully Done");';
			echo'window.location.href="addroom.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Failed");';
			echo'window.location.href="addroom.php";';
			echo '</script>';
			}
			
		  }
		  ?>
	
	<div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Add Room Image</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="addroom.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
			 <select class="form-control" id="Placesnames" name="Placesnames" onchange="loadroomss(this.value)" required>
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
					<select class="form-control" id="Places" name="Places" required>
                       	<option value="">Select Room Name</option>  
             </select>
			 </div>
			 </div>
             <p>&nbsp;</p>			
			<div class="input-group">
			<div class="custom-file">
			  <input type="file" class="custom-file-input" id="Filenames" name="Filenames">
			  <label class="custom-file-label" for="exampleInputFile">Room Image(Dimensions should be 850x850 pixels)</label>
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
	   <Script type="text/javascript">
          function loadroomss(Placesnames) {
            var html = $.ajax({
              type: "POST",
              url: "AJAXss.php",
              data: "Placesname=" +  encodeURIComponent(Placesnames),
              async: false
            }).responseText;
            if (html) {
              $("#Places").html(html);
            }
          }
        </Script>
      <!-- /.modal -->
	   <?php
		  if (isset($_REQUEST['updateplaceimage'])=="updateima") {
			$place =$_POST['Places'];
			$realvalue=$_POST['realvalues']; 
			$hotelname=$_POST['Placesnames'];
			$fileName =$_FILES['Filenames']['name'];
			$temp = explode(".", $_FILES["Filenames"]["name"]);
			$newfilename = $hotelname.$place.$realvalue.'.' .'jpg';
			$target = '../../../AndroidFiles/RoomImages/';
			$fileTarget = $target . $newfilename;
			$tempFileName = $_FILES["Filenames"]["tmp_name"];
			$result = move_uploaded_file($tempFileName, $fileTarget);
			echo '<script type="application/javascript">';
			echo'alert("Update of Room Image Done");';
			echo'window.location.href="addroom.php";';
			echo '</script>';
		  }
		  
		   if (isset($_REQUEST['saveplaceimage'] )=="saveima") {
			 require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Places']);
			$place2=$_POST['Places'];
      $hotelname=mysqli_real_escape_string($link,$_POST['Placesnames']);
			$sql1="SELECT PhotoUrl FROM rooms where RoomName like '".$place."%' and HotelName Like'".$hotelname."%'";
			$result1=mysqli_query($link,$sql1);
			if (mysqli_num_rows($result1) == 1)
			{
			$row = mysqli_fetch_array($result1);
			$imageurl=$row['PhotoUrl']+1;
			$sql="UPDATE rooms SET PhotoUrl='$imageurl' where RoomName like '".$place."%' and HotelName Like'".$hotelname."%'";
			mysqli_query($link,$sql);
			}
			$hotelname=mysqli_real_escape_string($link,$_POST['Placesnames']);
			$hotelname2=$_POST['Placesnames'];
			$fileName = $_FILES['Filenames']['name'];
			$temp = explode(".", $_FILES["Filenames"]["name"]);
			$newfilename = $hotelname2.$place2 .$imageurl.'.' .'jpg';
			$target = '../../../AndroidFiles/RoomImages/';
			$fileTarget = $target . $newfilename;
			$tempFileName = $_FILES["Filenames"]["tmp_name"];
			$result = move_uploaded_file($tempFileName, $fileTarget);
			echo '<script type="application/javascript">';
			echo"alert('Successful Uploaded Photo No.$imageurl');";
			echo'window.location.href="addroom.php";';
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
           <form action="addroom.php" method="post" >
            <div class="modal-body">
			 <select class="form-control" id="Placesnamess" name="Placesnamess" onchange="loadrooms(this.value)" required>
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
					<select class="form-control" id="Placess" name="Placess" required>
                       <option value="">Select Room Name</option>  
             </select>
			 </div>
			 </div>
             <p>&nbsp;</p>			
			<div class="input-group">
					<div class="custom-file">
					 <select class="form-control" id="PlaceOption" name="PlaceOption" required>
					 <option value="">--Select what you want to change--</option>
						<option value="Room Size">Room Size</option>
						<option value="Bed Specifications">Bed Specifications</option>	
						<option value="Cost">Cost</option>	
						<option value="Bed and BreakFast">Bed and BreakFast</option>	
						<option value="Refund Policy">Refund Policy</option>	
						<option value="Room Description">Room Description</option>							
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
	  <Script type="text/javascript">
          function loadrooms(Placesnamess) {
            var html = $.ajax({
              type: "POST",
              url: "AJAXss.php",
              data: "Placesname=" +  encodeURIComponent(Placesnamess),
              async: false
            }).responseText;
            if (html) {
              $("#Placess").html(html);
            }
          }
        </Script>
		 <?php
		  if (isset($_REQUEST['saveupdate'])) {
			  require_once('../../connect/connect.php');
			$place = mysqli_real_escape_string($link,$_POST['Placess']);	
			$realvalue=mysqli_real_escape_string($link,$_POST['realvalue']); 
			$PlaceOption=mysqli_real_escape_string($link,$_POST['PlaceOption']);
			$hotelname=mysqli_real_escape_string($link,$_POST['Placesnamess']);
			
			if($PlaceOption=="Room Size"){
			 $query = "UPDATE `rooms` SET RoomSize='".$realvalue."' WHERE RoomName='".$place."' and HotelName='".$hotelname."'";
			}else if($PlaceOption=="Bed Specifications"){
			 $query = "UPDATE `rooms` SET BedSpec ='".$realvalue."' WHERE RoomName='".$place."' and HotelName='".$hotelname."'";
			}else if($PlaceOption=="Cost"){
				$pricing=(0.05*$realvalue)+$realvalue;
			 $query = "UPDATE `rooms` SET Cost ='".$realvalue."',Price ='".$pricing."' WHERE RoomName='".$place."' and HotelName='".$hotelname."'";
			}else if($PlaceOption=="Bed and BreakFast"){
			 $query = "UPDATE `rooms` SET BreakFast ='".$realvalue."' WHERE RoomName='".$place."' and HotelName='".$hotelname."'";
			}else if($PlaceOption=="Refund Policy"){
			 $query = "UPDATE `rooms` SET RefundPolicy ='".$realvalue."' WHERE RoomName='".$place."' and HotelName='".$hotelname."'";
			}else if($PlaceOption=="Room Description"){
			 $query = "UPDATE `rooms` SET RoomDesc ='".$realvalue."' WHERE RoomName='".$place."' and HotelName='".$hotelname."'";
			}
			$result4=mysqli_query($link,$query);
			
			if($result4){
			echo '<script type="application/javascript">';
			echo'alert("Update Done");';
			echo'window.location.href="addroom.php";';
			echo '</script>';
			}else{
			echo '<script type="application/javascript">';
			echo'alert("Update Failed");';
			echo'window.location.href="addroom.php";';
			echo '</script>';
			}
			
		  }
		  ?>
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