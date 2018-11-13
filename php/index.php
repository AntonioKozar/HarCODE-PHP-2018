<?php

/**
 * Class short summary.
 *
 * Class description.
 *  
 * @version 1.0
 * @author Antonio Kožar, mag.ing.el.
 */ 
 session_start();
 if(isset($_SESSION['User']))
 {
  
 }
 require("class.php");
 require("functions.php");
 require("static.php");
 $location = new Location();

  if(!isset($_POST["InputUsername"]) and !isset($_POST["InputPassword"])){
    header("Location:" . $location->home);
  }
  else
  {
    $Result = Login($_POST['InputUsername'],$_POST['InputPassword']);
    if(mysqli_num_rows($Result) == 1)
    {
      $UserInformation = mysqli_fetch_assoc($Result);
      $_SESSION['User'] = $UserInformation['name'] . ' ' . $UserInformation['lastname'];

      switch($UserInformation['role'])
      {
        case 1:
        header("Location:" . $location->userlvl1);
        break;
        case 2:
        header("Location:" . $location->userlvl2);
        break;
        case 3:
        header("Location:" . $location->userlvl3);
        break;
        case 4:
        header("Location:" . $location->userlvl4);
        break;
        case 5:
        header("Location:" . $location->userlvl5);
        break;
      }
    }
    else
    {
      header("Location:" . $location->home);
    }
  }

  ?>