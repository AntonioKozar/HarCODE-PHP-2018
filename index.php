<?php

/**
 * Class short summary.
 *
 * Class description.
 *  
 * @version 1.0
 * @author Antonio Kožar, mag.ing.el.
 */

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Antonio Kožar">
    <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>HarCODE-PHP-2018</title>
  </head>
  <body>
    <div class="container">
      <div class="row align-items-center">
        <div class="col"></div>
        <div style="margin-top:15%;" class="col-6">
          <h2 class="text-center">HarCODE</h2>
          <hr>
          <form method="POST" action="display.php">
          <div class="form-group">
            <input style="width:50%; margin-left:25%;" type="text" class="form-control" name="InputCode" placeholder="HarCODE">
          </div>
          <button style="width:50%; margin-left:25%;" type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="col"></div>
      </div>
    </div>

    <nav class="navbar fixed-bottom navbar-light bg-light">
    <div class="col-9"></div>
    <div class="col">
    <!-- Default dropup button -->
      <div class="btn-group dropup">
        <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Sign in
        </button>
        <div class="dropdown-menu">
          <!-- Dropdown menu links -->
          <form class="p-3" method="POST" action="php/index.php">
            <div class="form-group">
              <input type="text" class="form-control" name="InputUsername" placeholder="Username" required autofocus>
            </div>   
            <div class="form-group">
              <input type="password" class="form-control" name="InputPassword" placeholder="Password" required>
            </div>          
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    
      </div>
      </div>
      
    </nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>