<?php
/**
 * function short summary.
 *
 * function description.
 *
 * @version 1.0
 * @author Antonio Kožar
 */

 function DatabaseConnection(){
    $ConnectionInformation = new DatabaseInformation();
    $Connection = mysqli_connect($ConnectionInformation->hostname,$ConnectionInformation->username,$ConnectionInformation->password,$ConnectionInformation->database);
    unset($ConnectionInformation);
    return $Connection;
 }

?>