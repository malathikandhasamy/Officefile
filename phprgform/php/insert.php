<?php 
$servername = "localhost";
$username = "root";
$password = "root";
$database = "registerDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $_POST['name'];
echo $name;
$uname = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$gender = $_POST['optradio'];
$country = $_POST['country'];
$psw = $_POST['password'];
$confirmpassword = $_POST['confirm-pwd'];
$sql=" INSERT INTO register_form (name,uname,email,phonenumber,gender,country,psw,confirmpassword) VALUES('$name', '$uname', '$email', '$phonenumber', '$gender', '$country', '$psw', 
'$confirmpassword')";
 if ($conn->query($sql) === TRUE) {
 	header("Location:../index.php");
 	exit();
 } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
$sql= "SELECT * from register_form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         "Name: " . $row["name"]. " - Username: " . $row["uname"]. "Email:" .$row["email"]. "phonenumber:" .$row["phonenumber"]. "Gender:" .$row["gender"]. "Country:" .$row['country']. "password:" .$row['psw']. "confirmpassword:" .$row['confirmpassword'];
    }
} else {
    echo "0 results";
}
$conn->close();
?>