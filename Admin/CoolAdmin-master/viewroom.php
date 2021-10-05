<!DOCTYPE html>
<html>
<head>
<title>KIPASJER.COM</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Room Type</th>
<th>Room Number</th>
<th>Price</th>
<th>Action</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "MHPBS");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, room_number, price FROM rooms";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["name"]. "</td><td>" . $row["room_number"] . "</td><td>"
. $row["price"] . "</td><td>" . "<a href = 'deleteroom.php?rn=$row[room_number]'>Delete" ."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>

