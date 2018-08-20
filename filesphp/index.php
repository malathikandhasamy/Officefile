<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href=""> 
    <title>Php File</title>
  </head>
  <body>
    <!-- <section class="button-list">
    	<div class="container">
    <div class="row">
    	<div class="col-sm-4"></div>
    	<div class="col-sm-8">
    		<button type="button" class="btn btn-primary" id="create">Create</button>
			<button type="button" class="btn btn-secondary" id="write">Write</button>
			<button type="button" class="btn btn-success" id="view">View</button>
    	</div>
    </div> 
    </div>
    </section> -->
    <header>
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-4"></div>
    			<div class="col-sm-8">
    				<div class="filename-detail">
    					<form method="POST" action="php/create.php">
    					<label>Filename</label>
    					<input type="text" name="filename" class="filename">
    					<button type="submit" class="btn btn-primary" id="create">Create</button>
    					</form>
    				</div>
    			</div>
    		</div>   		
    	</div>
    </header>
    <section class="content">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-4"></div>
    			<div class="col-sm-8">
    				<div class="content-detail">
    					<form method="POST" method="php/write.php">
    					<label>Data</label>
    					<textarea name="data" class="data"></textarea>
    					<button type="submit" class="btn btn-secondary" id="write">Write</button>
    					</form>
    				</div>	
    			</div>
    		</div>
    	</div> 	
    </section>
    <section class="view-file">
    	<div class="container">
    		<div class="row">
    		<div class="col-sm-4"></div>
    		<div class="col-sm-8">
    			<div class="view-detail">
    				<form method="POST" action="php/view.php">
    				<select>
    					<option></option>
    				</select>
    				<button type="submit" class="btn btn-success" id="view">View</button>
    				</form>
    			</div>
    		</div>			
    		</div>
    	</div>	
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/script.js"></script>
  </body>
</html>
