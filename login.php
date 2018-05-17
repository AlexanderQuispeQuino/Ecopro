
<!DOCTYPE html>
<html lang="en">
	
  <head>
	 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <link href="signin.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="panel.php" name="login" method="post">
        <h2 class="form-signin-heading">Login</h2>
        <label for="inputEmail" class="sr-only" >Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email"  name="usu"required autofocus>
        <label for="inputPassword" class="sr-only"  >Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password"  name="pw"required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">Recordar Contraseña
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
  </body>
</html>
