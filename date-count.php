<?php       
       $hostname="172.17.2.92";
       $username="malathi";
       $password="malathi!@#";
       $database="Transaction";
       $conn= mysqli_connect($hostname,$username,$password,$database);
       $count1 ='';
       $date1 ='';
       $count2 ='';
       $date2 ='';
       $value ='';
       $card ='';
       $net ='';
	$account_id = $_POST['ac_id'];
	$sql = "SELECT txn_count,created_date from sorted where account_id = '$account_id' AND date(created_date) ='2018-08-23' ";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$count1 = $row["txn_count"];
	    	$date1  = $row["created_date"];
	    	//echo "count :" .$row["txn_count"]."date :" .$row["created_date"];
	    }
	 } 
	 else {
	    echo "0 results";
	}
	$sql ="SELECT count(txn_id) from txndetails";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$value = $row["count(txn_id)"];
	    }
	 } 
	else {
	    echo "0 results";
	}
	$sql = "SELECT txn_count,created_date from sorted where account_id = '$account_id' AND date(created_date) ='2018-08-24' ";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$count2 = $row["txn_count"];
	    	$date2  = $row["created_date"];
	    	//echo "count :" .$row["txn_count"]."date :" .$row["created_date"];
	    }
	 } 
	 else {
	    echo "0 results";
	}
	$sql = "SELECT count(card_number_hash) from txndetails where card_number_hash  LIKE '%_%'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$card = $row["count(card_number_hash)"];
	    }
	 } 
	 else {
	    echo "0 results";
	}
	$sql = "SELECT count(card_number_hash) from txndetails where card_number_hash = ''";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$net = $row["count(card_number_hash)"];
	    }
	 } 
	 else {
	    echo "0 results";
	}
 $data = [];
 $data['count'] = $count1;
 $data['date'] = $date1;
 $data['count2'] = $count2;
 $data['date2'] = $date2;
 $data['value'] = $value;
 $data['card'] = $card;
 $data['net'] = $net;
 $response=json_encode($data);
 echo $response;
$conn->close();
?>