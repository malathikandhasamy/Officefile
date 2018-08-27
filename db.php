<?php
       $hostname="172.17.2.92";
       $username="malathi";
       $password="malathi!@#";
       $database="Transaction";
       $conn= mysqli_connect($hostname,$username,$password,$database);
if ($conn->connect_error)
{
   die("Connection failed: " . $conn->connect_error);
}
print_r($conn);
echo "Connected successfully";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password =$_POST['confirm_password'];
// echo $username , $email ,$password, $confirm_password;

$sql = "INSERT INTO userdetails (username,email,password,confirm_password) VALUES('$username','$email',md5('$password'),md5('$confirm_password'))";
    if($conn->query($sql) === true)
    {
        echo "Records inserted successfully";
    }
    else
    {
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
$conn->close();
?>