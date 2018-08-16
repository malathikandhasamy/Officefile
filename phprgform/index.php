<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Home page</title>
  </head>
  <body>
    <header class="attract">
      <div class="container">
        <div class="row">
          <div class="col-sm-9">
          </div>
           <div class="col-sm-3">
            <div class="login-form">
              <h3>Login</h3>
              <div class="form-creation">
              <form action="php/login.php" method="POST" id="form1" autocomplete="off">
                 <div class="form-group">
                   <input type="text" name="username" id="username" class="form-control" placeholder="username">
                   <span id="username-error"></span>
                </div>
                 <div class="form-group">
                  <input type="password" name="password" id="password" class="form-control" placeholder="password">
                  <span id="password-error"></span>
                </div>
                <div class="row">
                  <div class="col-sm-4">
               <div class="form-group">
                <input type="submit" name="submit" value="Login" id="click-button"  class="btn btn-green">
              </div>
              </div>
              <div class="col-sm-4" id= "reg-link">
              <a class="navbar-brand" href= "http://localhost/phprgform/php/register.php ">Register</a>
              </div>
            </div>
            </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/script.js"></script> 
</body>
</html>