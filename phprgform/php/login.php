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
$uname = $_POST['username'];
$psw = $_POST['password'];
$SESSION['username'] = $_POST['username'];
$SESSION['password'] = $_POST['password'];
$sql = "SELECT uname,psw FROM register_form WHERE uname = '$uname'AND psw = '$psw'";
$result = $conn->query($sql);
if (!$result) {
    echo "Could not successfully run query ($sql) from DB: " . mysql_error();
    exit;
}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        header("location:http://localhost/phprgform/php/select.php");
    }
}
else {
    $errormsg = "Incorrect Username or Password";
    header("location:../index.php? msg=$errormsg");
    exit();
    echo "0 results";
}
$conn->close();
?>