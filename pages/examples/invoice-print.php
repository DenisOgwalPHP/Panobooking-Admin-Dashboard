<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PANOBOOKING | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <img src="../../dist/img/AdminLTELogo.png" style="Height:40px;"> PANOBOOKING
                      <small class="float-right">Date: <?php echo date("d/M/Y") ?></small>
        </h2>
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
						$sales9 ="SELECT CurrentLocation,City,EmailAddress,TelephoneNumber  FROM `carrentals` where DriverName='$placename' LIMIT 1";
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
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
