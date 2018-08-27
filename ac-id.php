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
$sql = "SELECT distinct(account_id) from sorted";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value =" .$row['account_id']. ">" . $row['account_id']. "</option>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>