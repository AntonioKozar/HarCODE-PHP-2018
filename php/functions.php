<?php
/**
 * function short summary.
 *
 * function description.
 *
 * @version 1.0
 * @author Antonio Kožar
 */

 function DatabaseConnection() // connectin to database with information from static.php
 {
    $ConnectionInformation = new DatabaseInformation();
    $Connection = mysqli_connect($ConnectionInformation->hostname,$ConnectionInformation->username,$ConnectionInformation->password,$ConnectionInformation->database);
    unset($ConnectionInformation);
    return $Connection;
 }
 function Login($username, $password) // verification of user
 {
    $DatabaseConnection = DatabaseConnection();
    $username = mysqli_real_escape_string($DatabaseConnection,trim($username));
    $password = mysqli_real_escape_string($DatabaseConnection,trim($password));
    $Result = mysqli_query($DatabaseConnection,"SELECT username, password, role FROM users WHERE username='{$username}' AND password='{$password}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
 }

?>