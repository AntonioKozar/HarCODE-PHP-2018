 <?php
    session_start();
    $HostPath = "http://" . $_SERVER["HTTP_HOST"] . rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");

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
        <div class="col table-bordered"></div>
        <div class="col-lg-11">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="http://<?php print($HostPath) ?>/index.php">HarCODE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProducts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownProducts">
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/products/index.php">View</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/products/create.php">Create</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/products/read.php">Read</a>                  
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/products/update.php">Update</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/products/delete.php">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownGroups" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Groups
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownGroups">
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/groups/index.php">View</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/groups/create.php">Create</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/groups/read.php">Read</a>                  
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/groups/update.php">Update</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/groups/delete.php">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSubgroups" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Subgroups
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownSubgroups">
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/subgroups/index.php">View</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/subgroups/create.php">Create</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/subgroups/read.php">Read</a>                  
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/subgroups/update.php">Update</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/subgroups/delete.php">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownManufacturers" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Manufacturers
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownManufacturers">
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/manufacturers/index.php">View</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/manufacturers/create.php">Create</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/manufacturers/read.php">Read</a>                  
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/manufacturers/update.php">Update</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/manufacturers/delete.php">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCitys" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Citys
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownCitys">
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/citys/index.php">View</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/citys/create.php">Create</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/citys/read.php">Read</a>                  
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/citys/update.php">Update</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/citys/delete.php">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCountrys" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Countrys
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownCountrys">
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/countrys/index.php">View</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/countrys/create.php">Create</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/countrys/read.php">Read</a>                  
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/countrys/update.php">Update</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/countrys/delete.php">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUsers" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Users
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownUsers">
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/users/index.php">View</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/users/create.php">Create</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/users/read.php">Read</a>                  
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/users/update.php">Update</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/users/delete.php">Delete</a>
                </div>
              </li>
            </ul>
            <a class="btn btn-outline-success my-2 my-sm-0" href="http://<?php print($_SERVER["HTTP_HOST"]); ?>/HarCODE-PHP-2018/index.php">Logout</a>
          </div>
        </nav>  
        </div>
        <div class="col table-bordered"></div>
      </div>
    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>