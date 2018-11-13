<?php

/**
 * Class for static information and object structure.
 *
 * Class description.
 *  
 * @version 1.0
 * @author Antonio Kožar
 */

 class DatabaseInformation{
     public $hostname = "localhost";
     public $username = "root";
     public $password = "";
     public $database = "harcode2018";
 }

 class Location{
    public $home = "../index.php";
    public $userlvl1 = "userlvl1/index.php";
    public $userlvl2 = "userlvl2/index.php";
    public $userlvl3 = "userlvl3/index.php";
    public $userlvl4 = "userlvl4/index.php";
    public $userlvl5 = "userlvl5/index.php";
 }
 class Navbar{
    function NavbarUserlvl5($HostPath, $Destination)
    {
        $NavbarHTML = '
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="http://' . $HostPath . '/index.php">HarCODE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://' . $HostPath . '/index.php" id="navbarDropdownProducts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownProducts">
                  <a class="dropdown-item" href="#">Create</a>
                  <a class="dropdown-item" href="#">Read</a>
                  <!-- <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item" href="#">Update</a>
                  <a class="dropdown-item" href="#">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownGroups" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Groups
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownGroups">
                  <a class="dropdown-item" href="#">Create</a>
                  <a class="dropdown-item" href="#">Read</a>
                  <!-- <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item" href="#">Update</a>
                  <a class="dropdown-item" href="#">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownSubgroups" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Subgroups
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownSubgroups">
                  <a class="dropdown-item" href="#">Create</a>
                  <a class="dropdown-item" href="#">Read</a>
                  <!-- <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item" href="#">Update</a>
                  <a class="dropdown-item" href="#">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownManufacturers" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Manufacturers
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownManufacturers">
                  <a class="dropdown-item" href="#">Create</a>
                  <a class="dropdown-item" href="#">Read</a>
                  <!-- <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item" href="#">Update</a>
                  <a class="dropdown-item" href="#">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCitys" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Citys
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownCitys">
                  <a class="dropdown-item" href="#">Create</a>
                  <a class="dropdown-item" href="#">Read</a>
                  <!-- <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item" href="#">Update</a>
                  <a class="dropdown-item" href="#">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCountrys" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Countrys
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownCountrys">
                  <a class="dropdown-item" href="#">Create</a>
                  <a class="dropdown-item" href="#">Read</a>
                  <!-- <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item" href="#">Update</a>
                  <a class="dropdown-item" href="#">Delete</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUsers" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Users
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownUsers">
                  <a class="dropdown-item" href="#">Create</a>
                  <a class="dropdown-item" href="#">Read</a>
                  <!-- <div class="dropdown-divider"></div> -->
                  <a class="dropdown-item" href="#">Update</a>
                  <a class="dropdown-item" href="#">Delete</a>
                </div>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
          </div>
        </nav>      
        ';
    }
 }

 ?>