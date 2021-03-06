<?php include 'header-2.php';
session_start();
?>

<?php
//session_start();
include 'database.php';
$email  = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking History</title>
</head>

<body>
<div class="container">
<h2> Booking History </h2>
<br>

<h3>Pending Booking</h3>
<div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
        <th scope="col">Booking ID</th>
		<th scope="col">Payment ID</th>	
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Room Type</th>   
        <th scope="col">Check-In Date</th>   
        <th scope="col">Check-Out Date</th>   
		<th scope="col">Status</th> 

        </tr>
        </thead>
        <tbody>

<?php
   include 'database.php';
   $email = $_SESSION['email'];
   $sql=mysqli_query($connection, "SELECT * from bookings WHERE email='$email' AND status = '0'");
   while($row=mysqli_fetch_array($sql))
   {
?>

<tr>

    <td> <?php echo $row['bookingID']; ?></td>
	<td> <?php echo $row['paymentID']; ?></td>
    <td> <?php echo $row['lastname']; ?></td>
    <td> <?php echo $row['phone']; ?></td>
    <td> <?php echo $row['roomtype']; ?></td>
    <td> <?php echo $row['checkin']; ?></td>
    <td> <?php echo $row['checkout']; ?></td>
	<?php
	if ($row['status']  == 0) {
											        echo "<td style='color:#FFB900'>Pending</td>";
                                                } elseif ($row['status']  == 1) { 
                                                    echo "<td style='color:#00D100'>Accepted</td>";
                                                } elseif ($row['status']  == 2){
													echo "<td style='color:#D10000'>Rejected</td>";
												} elseif ($row['status']  == 3){
													echo "<td style='color:#6495ED'>Finished</td>";
												} else {
													echo "ERROR 404";
												}
	?>
	

</tr>
<?php } ?>
</tbody>
                                       
</table>
</div>
</div>
	
<h3>Accepted Booking</h3>	
<div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
        <th scope="col">Booking ID</th>
		<th scope="col">Payment ID</th>	
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Room Type</th>   
        <th scope="col">Check-In Date</th>   
        <th scope="col">Check-Out Date</th>   
		<th scope="col">Status</th> 

        </tr>
        </thead>
        <tbody>

<?php
   include 'database.php';
   $email = $_SESSION['email'];
   $sql=mysqli_query($connection, "SELECT * from bookings WHERE email='$email' AND status = '1'");
   while($row=mysqli_fetch_array($sql))
   {
?>

<tr>

    <td> <?php echo $row['bookingID']; ?></td>
	<td> <?php echo $row['paymentID']; ?></td>
    <td> <?php echo $row['lastname']; ?></td>
    <td> <?php echo $row['phone']; ?></td>
    <td> <?php echo $row['roomtype']; ?></td>
    <td> <?php echo $row['checkin']; ?></td>
    <td> <?php echo $row['checkout']; ?></td>
	<?php
	if ($row['status']  == 0) {
											        echo "<td style='color:#FFB900'>Pending</td>";
                                                } elseif ($row['status']  == 1) { 
                                                    echo "<td style='color:#00D100'>Accepted</td>";
                                                } elseif ($row['status']  == 2){
													echo "<td style='color:#D10000'>Rejected</td>";
												} elseif ($row['status']  == 3){
													echo "<td style='color:#6495ED'>Finished</td>";
												} else {
													echo "ERROR 404";
												}
	?>
	

</tr>
<?php } ?>
</tbody>
                                       
</table>
</div>
</div>
	
<h3>Rejected Booking</h3>	
<div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
        <th scope="col">Booking ID</th>
		<th scope="col">Payment ID</th>	
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Room Type</th>   
        <th scope="col">Check-In Date</th>   
        <th scope="col">Check-Out Date</th>   
		<th scope="col">Status</th> 

        </tr>
        </thead>
        <tbody>

<?php
   include 'database.php';
   $email = $_SESSION['email'];
   $sql=mysqli_query($connection, "SELECT * from bookings WHERE email='$email' AND status = '2'");
   while($row=mysqli_fetch_array($sql))
   {
?>

<tr>

    <td> <?php echo $row['bookingID']; ?></td>
	<td> <?php echo $row['paymentID']; ?></td>
    <td> <?php echo $row['lastname']; ?></td>
    <td> <?php echo $row['phone']; ?></td>
    <td> <?php echo $row['roomtype']; ?></td>
    <td> <?php echo $row['checkin']; ?></td>
    <td> <?php echo $row['checkout']; ?></td>
	<?php
	if ($row['status']  == 0) {
											        echo "<td style='color:#FFB900'>Pending</td>";
                                                } elseif ($row['status']  == 1) { 
                                                    echo "<td style='color:#00D100'>Accepted</td>";
                                                } elseif ($row['status']  == 2){
													echo "<td style='color:#D10000'>Rejected</td>";
												} elseif ($row['status']  == 3){
													echo "<td style='color:#6495ED'>Finished</td>";
												} else {
													echo "ERROR 404";
												}
	?>

</tr>
<?php } ?>
</tbody>
                                       
</table>
</div>
</div>	
	
<h3>Finished Booking</h3>	
<div class="card-body">
<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
        <tr>
        <th scope="col">Booking ID</th>
		<th scope="col">Payment ID</th>	
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Room Type</th>   
        <th scope="col">Check-In Date</th>   
        <th scope="col">Check-Out Date</th>   
		<th scope="col">Status</th> 

        </tr>
        </thead>
        <tbody>

<?php
   include 'database.php';
   $email = $_SESSION['email'];
   $sql=mysqli_query($connection, "SELECT * from bookings WHERE email='$email' AND status = '3'");
   while($row=mysqli_fetch_array($sql))
   {
?>

<tr>

    <td> <?php echo $row['bookingID']; ?></td>
	<td> <?php echo $row['paymentID']; ?></td>
    <td> <?php echo $row['lastname']; ?></td>
    <td> <?php echo $row['phone']; ?></td>
    <td> <?php echo $row['roomtype']; ?></td>
    <td> <?php echo $row['checkin']; ?></td>
    <td> <?php echo $row['checkout']; ?></td>
	<?php
	if ($row['status']  == 0) {
											        echo "<td style='color:#FFB900'>Pending</td>";
                                                } elseif ($row['status']  == 1) { 
                                                    echo "<td style='color:#00D100'>Accepted</td>";
                                                } elseif ($row['status']  == 2){
													echo "<td style='color:#D10000'>Rejected</td>";
												} elseif ($row['status']  == 3){
													echo "<td style='color:#6495ED'>Finished</td>";
												} else {
													echo "ERROR 404";
												}
	?>

</tr>
<?php } ?>
</tbody>
                                       
</table>
</div>
</div>
</div>
</body>
</html>


<?php include 'footer-2.php';?>




















             