<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <title></title>
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-2"></div>
    			<div class="col-sm-8">
    				<h3>Click Your Country</h3>
    				<form action="view.php" method="POST">
		            <?php
		              if(isset($_POST['Afghanistan'])) {
		                echo '<h3>'.$_POST['Afghanistan'].'</h3>';
		              }
		              ?>		             
    				<input class="btn btn-primary" type="submit" name= "Afghanistan" value="Afghanista">
    				<?php
		               if(isset($_POST['Canada'])) {
		                echo '<h3>'.$_POST['Canada'].'</h3>';
		              }
		              ?>
    				<input class="btn btn-primary" type="submit" name= "Canada" value="Canada"> 
    				<?php
		               if(isset($_POST['India'])) {
		                echo '<h3>'.$_POST['India'].'</h3>';
		              }
		              ?>    		 
    				<input class="btn btn-primary" type="submit"name= "India" value="India">
    				 <?php
		               if(isset($_POST['Singapore'])) {
		                echo '<h3>'.$_POST['Singapore'].'</h3>';
		              }
		              ?>
    				<input class="btn btn-primary" type="submit"name= "Singapore" value="Singapore"> 
    				 <?php
		               if(isset($_POST['China'])) {
		                echo '<h3>'.$_POST['China'].'</h3>';
		              }
		            ?>   				
    				<input class="btn btn-primary" type="submit"name= "China" value="China">

    				<!-- <input class="btn btn-primary" type="submit" data-toggle="button" name= "Canada" value="Canada">
    				<input class="btn btn-primary" type="submit" data-toggle="button" name= "India" value="India">
    				<input class="btn btn-primary" type="submit" data-toggle="button" name= "Singapore" value="Singapore">
    				<input class="btn btn-primary" type="submit" data-toggle="button" name= "China" value="China"> -->
    				<!-- <div>
    				<input type="submit" value="Submit" class="btn btn-primary">
	    			</div> -->
    				</form>
    			</div>
    	</div>    	
    </div>
    <div class="viewdatatable">
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>

  </body>
</html>