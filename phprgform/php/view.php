<?php
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
<table id="example" style="width:100%">
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
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</head>
<body>
</body>
</html>