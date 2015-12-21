<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <!-- Custom styles for this template -->
    <link href="admin/css/sigin.css" rel="stylesheet">


  </head>

  <body>

    <div class="container-fluid">

      <form class="form-signin" action="login1.php" method="POST">
        <h2 class="form-signin-heading">Connectez-Vous  </h2>
        <label for="inputEmail" class="sr-only">Log in </label>
        <input type="text" id="inputEmail" class="form-control" name="username" placeholder="log-in" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="">
       
        <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->


   

</body></html>