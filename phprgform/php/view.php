<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "root";
$database = "registerDB";
$errormsg = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$country = '';
if(isset($_POST['Afghanistan'])) {
//echo '<h3>'.$_POST['Afghanistan'].'</h3>';
$country = $_POST['Afghanistan'];
}
if(isset($_POST['Canada'])) {
	//echo '<h3>'.$_POST['Canada'].'</h3>';
	$country = $_POST['Canada'];
}
if(isset($_POST['India'])) {
	//echo '<h3>'.$_POST['India'].'</h3>';
	$country = $_POST['India'];
}
if(isset($_POST['Singapore'])) {
	//echo '<h3>'.$_POST['Singapore'].'</h3>';
	$country = $_POST['Singapore'];
	}	              
if(isset($_POST['China'])) {
	//echo '<h3>'.$_POST['China'].'</h3>';
	$country = $_POST['China'];
	}
$sql = "SELECT name,uname,email,phonenumber,gender,country FROM register_form WHERE country = '$country'";
$result = $conn->query($sql);
if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}	
// if ($result->num_rows > 0) {
//     // output data of each row
//     //mysqli_fetch_array
//     while($row = $result->fetch_assoc()) {
//     	//print_r($row);
//         echo "Name:".$row['name']. "username:".$row['uname']."email:".$row['email']."<br>";
//          // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
//     }
// }  
$result = mysqli_query($conn , $sql);
echo '
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
	<th>Name</th>
	<th>Username</th>
	<th>Email</th>
	<th>Phonenumber</th>
	<th>Gender</th>
	<th>Country</th>
</tr>
</thead>';
while($row = mysqli_fetch_array($result))
  {
  	echo '
  	<tr>
	<td>' . $row['name'] . '</td>
	<td>' . $row['uname'] . '</td>
	<td>' . $row['email'] . '</td>
	<td>' . $row['phonenumber'] . '</td>
	<td>' . $row['gender'] . '</td>
	<td>' . $row['country'] . '</td>
	</tr>';
	}
 echo'</table>';
?>	
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<section class="exit">
		<div class="logout-button">
		<!-- <button type="button" id="exit-page">Logout</button> -->
		<form action="../index.php" method="post"><button type="submit" class="btn btn-link navbar-btn navbar-link" id="exit-page">Log off</button></form>
	</div>
	<div class="list-icon">
		<li><i class="fab fa-whatsapp"></i></i></li>
		<li><i class="fab fa-facebook-f"></i></li>
		<li><i class="fab fa-twitter"></i></li>
		<li><i class="fab fa-instagram"></i></li>
		<li><i class="fab fa-google-plus-g"></i></li>
	</div>
	</section>
</body>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/script.js"></script>
	
</html>
