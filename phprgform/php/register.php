<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <!--  <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
  			<form action="insert.php" method="POST" autocomplete="off">
	 			<div class="form-group">
	    			<label for="name">Name:</label>
	   				<input type="name" class="form-control" id="name" name="name">
	   				<span id="nameError"></span>
	  			</div>
				<div class="form-group">
				    <label for="username">Username:</label>
				    <input type="name" class="form-control" id="username" name="username">
				    <span id="usernameError"></span>
				</div>
				<div class="form-group">
				    <label for="email">Email:</label>
				    <input type="text" class="form-control" id="email" name="email">
				     <span id="emailError"></span>
				</div>
				<div class="form-group">
				    <label for="phone-no">Phonenumber:</label>
				    <input type="name" class="form-control" id="phonenumber" maxlength="10" name="phonenumber">
				     <span id="phoneError"></span>
				</div>
				<div class="form-group">
				  	<label for="gender">Gender:</label>
					<div class="radio">
				   	<label><input type="radio" name="optradio" value="male">Male</label>
					</div>
				<div class="radio">
				  	<label><input type="radio" name="optradio" value="female">Female</label>
				</div>
	    		<label for="country">Country</label>
	    		<select class="form-control" id="country" name="country">
	    			<option></option>
			      <option>Afghanistan</option>
			      <option>Canada</option>
			      <option>India</option>
			      <option>Singapore</option>
			      <option>China</option>
			    </select>
				<div class="form-group">
				   <label for="pwd">Password:</label>
				   <input type="password" class="form-control" id="password" name="password">
				   <span id="passwordError"></span>
				</div>
				<div class="form-group">
				   <label for="confirm-pwd">Confirm Password:</label>
				   <input type="password" class="form-control" id="confirm-pwd" name="confirm-pwd">
				    <span id="confirmpasswordError"></span>
				</div>
				<input type="submit" class="btn btn-info" value="submit" id="regfo">
			</form>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>

