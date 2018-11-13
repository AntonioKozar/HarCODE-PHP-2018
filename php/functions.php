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
    $Result = mysqli_query($DatabaseConnection,"SELECT username, password, name, lastname, role FROM users WHERE username='{$username}' AND password='{$password}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
 }
//#############################################################################################################################
//                  COUNTRY FUNCTIONS
//#############################################################################################################################
 function CountryView(){
    $DatabaseConnection = DatabaseConnection();
    $Result = mysqli_query($DatabaseConnection, "SELECT * FROM country;") or die('Error: ' . mysqli_error($DatabaseConnection));
    $Result = mysqli_fetch_all($Result, MYSQLI_NUM);
    mysqli_close($DatabaseConnection);
    return $Result;
}
function CountryCreate($Country){
    $DatabaseConnection = DatabaseConnection();
    $Country->name = mysqli_real_escape_string($DatabaseConnection, trim($Country->name));
    $MysqliResult = mysqli_query($DatabaseConnection, "SELECT name FROM country WHERE name='{$Country->name}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    if(mysqli_num_rows($MysqliResult) == 0){
        mysqli_query($DatabaseConnection, "INSERT INTO country (name) VALUES ('{$Country->name}');") or die('Error: ' . mysqli_error($DatabaseConnection));
        $Result = '<script>alert("Country name you have enterd: ' . $Country->name . ' has been successfully added to the database.");</script>';
    }
    else{
        $Result = '<script>alert("Country name you have enterd: ' . $Country->name . ' already exists.");</script>';
    }    
    mysqli_close($DatabaseConnection);
    return $Result;
 }
 function CountryRead(){
    $DatabaseConnection = DatabaseConnection();
    $Result = mysqli_query($DatabaseConnection, "SELECT name FROM country;") or die('Error: ' . mysqli_error($DatabaseConnection));
    $Result = mysqli_fetch_all($Result, MYSQLI_NUM);
    mysqli_close($DatabaseConnection);
    return $Result;
}
function CountryUpdate($Country, $ID){
    $DatabaseConnection = DatabaseConnection();
    $ID = mysqli_real_escape_string($DatabaseConnection,trim($ID));
    $Country->name = mysqli_real_escape_string($DatabaseConnection,trim($Country->name));
    $Result = mysqli_query($DatabaseConnection, "UPDATE country SET name='{$Country->name}' WHERE id='{$ID}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
}
function CountryDelete($ID){
    $DatabaseConnection = DatabaseConnection();
    $ID = mysqli_real_escape_string($DatabaseConnection,trim($ID));
    $Result = mysqli_query($DatabaseConnection, "DELETE FROM country WHERE id='{$ID}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
}
function CountryGet($ID){
    $DatabaseConnection = DatabaseConnection();
    $ID = mysqli_real_escape_string($DatabaseConnection,trim($ID));
    $Result = mysqli_query($DatabaseConnection, "SELECT name FROM country WHERE id='{$ID}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    if(mysqli_num_rows($Result) == 1){
        $Result = mysqli_fetch_assoc($Result);
    }
    else{
        $Result = 0;
    }
    mysqli_close($DatabaseConnection);
    return $Result;
}

//#############################################################################################################################
//                  CITY FUNCTIONS
//#############################################################################################################################
function CityView(){
    $DatabaseConnection = DatabaseConnection();
    $Result = mysqli_query($DatabaseConnection, "SELECT * FROM city;") or die('Error: ' . mysqli_error($DatabaseConnection));
    $Result = mysqli_fetch_all($Result, MYSQLI_NUM);
    mysqli_close($DatabaseConnection);
    return $Result;
}
function CityCreate($City){
    $DatabaseConnection = DatabaseConnection();
    $City->name = mysqli_real_escape_string($DatabaseConnection, trim($City->name));
    $City->zipcode = mysqli_real_escape_string($DatabaseConnection, trim($City->zipcode));
    $City->country = mysqli_real_escape_string($DatabaseConnection, trim($City->country));
    $MysqliResult = mysqli_query($DatabaseConnection, "SELECT name FROM city WHERE name='{$City->name}' AND country='{$City->country}' AND zipcode='{$City->zipcode}';") or die('Error on SELECT: ' . mysqli_error($DatabaseConnection));
    if(mysqli_num_rows($MysqliResult) == 0){
        mysqli_query($DatabaseConnection, "INSERT INTO city (name, zipcode, country) VALUES ('{$City->name}', '{$City->zipcode}', '{$City->country}');") or die('Error on INSERT: ' . mysqli_error($DatabaseConnection));
        $Result = '<script>alert("City name you have enterd: ' . $City->name . ' has been successfully added to the database.");</script>';
    }
    else{
        $Result = '<script>alert("City name you have enterd: ' . $City->name . ' already exists within country you selected.");</script>';
    }    
    mysqli_close($DatabaseConnection);
    return $Result;
 }
 function CityRead(){
    $DatabaseConnection = DatabaseConnection();
    $Result = mysqli_query($DatabaseConnection, "SELECT name, zipcode, country FROM city;") or die('Error: ' . mysqli_error($DatabaseConnection));
    $Result = mysqli_fetch_all($Result, MYSQLI_NUM);
    mysqli_close($DatabaseConnection);
    return $Result;
}
function CityUpdate($City){
    $DatabaseConnection = DatabaseConnection();
    $City->id = mysqli_real_escape_string($DatabaseConnection,trim($City->id));
    $City->name = mysqli_real_escape_string($DatabaseConnection,trim($City->name));
    $City->country = mysqli_real_escape_string($DatabaseConnection,trim($City->country));
    $Result = mysqli_query($DatabaseConnection, "UPDATE city SET name='{$City->name}', zipcode='{$City->zipcode}', country='{$City->country}' WHERE id='{$City->id}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
}
function CityDelete($ID){
    $DatabaseConnection = DatabaseConnection();
    $ID = mysqli_real_escape_string($DatabaseConnection,trim($ID));
    $Result = mysqli_query($DatabaseConnection, "DELETE FROM city WHERE id='{$ID}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
}
function CityGet($ID){
    $DatabaseConnection = DatabaseConnection();
    $ID = mysqli_real_escape_string($DatabaseConnection,trim($ID));
    $Result = mysqli_query($DatabaseConnection, "SELECT name, zipcode, country FROM city WHERE id='{$ID}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    if(mysqli_num_rows($Result) == 1){
        $Result = mysqli_fetch_assoc($Result);
    }
    else{
        $Result = 0;
    }
    mysqli_close($DatabaseConnection);
    return $Result;
}

//#############################################################################################################################
//                  MANUFACURER FUNCTIONS
//#############################################################################################################################
function ManufacturerView(){
    $DatabaseConnection = DatabaseConnection();
    $Result = mysqli_query($DatabaseConnection, "SELECT * FROM manufacturer;") or die('Error: ' . mysqli_error($DatabaseConnection));
    $Result = mysqli_fetch_all($Result, MYSQLI_NUM);
    mysqli_close($DatabaseConnection);
    return $Result;
}
function ManufacturerCreate($Manufacturer){
    $DatabaseConnection = DatabaseConnection();
    $Manufacturer->id = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->id));
    $Manufacturer->name = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->name));
    $Manufacturer->description = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->description));
    $Manufacturer->adress = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->adress));
    $Manufacturer->telephone = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->telephone));
    $Manufacturer->email = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->email));
    $Manufacturer->url = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->url));
    $Manufacturer->city = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->city));

    $MysqliResult = mysqli_query($DatabaseConnection, "SELECT name FROM manufacturer WHERE name='{$Manufacturer->name}' AND email='{$Manufacturer->email}' AND city='{$Manufacturer->city}';") or die('Error on SELECT: ' . mysqli_error($DatabaseConnection));
    if(mysqli_num_rows($MysqliResult) == 0){
        mysqli_query($DatabaseConnection, "INSERT INTO manufacturer (name, description, adress, telephone, email, url, city) VALUES ('{$Manufacturer->name}', '{$Manufacturer->description}', '{$Manufacturer->adress}', '{$Manufacturer->telephone}', '{$Manufacturer->email}', '{$Manufacturer->url}', '{$Manufacturer->city}');") or die('Error on INSERT: ' . mysqli_error($DatabaseConnection));
        $Result = '<script>alert("Manufacturer you have enterd: ' . $Manufacturer->name . ' has been successfully added to the database.");</script>';
    }
    else{
        $Result = '<script>alert("Manufacturer you have enterd: ' . $Manufacturer->name . ' already exists.");</script>';
    }    
    mysqli_close($DatabaseConnection);
    return $Result;
}
function ManufacturerUpdate($Manufacturer){
    $DatabaseConnection = DatabaseConnection();
    $Manufacturer->id = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->id));
    $Manufacturer->name = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->name));
    $Manufacturer->description = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->description));
    $Manufacturer->adress = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->adress));
    $Manufacturer->telephone = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->telephone));
    $Manufacturer->email = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->email));
    $Manufacturer->url = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->url));
    $Manufacturer->city = mysqli_real_escape_string($DatabaseConnection, trim($Manufacturer->city));
    $Result = mysqli_query($DatabaseConnection, "UPDATE manufacturer SET name='{$Manufacturer->name}', description='{$Manufacturer->description}', adress='{$Manufacturer->adress}', telephone='{$Manufacturer->telephone}', email='{$Manufacturer->email}', url='{$Manufacturer->url}', city='{$Manufacturer->city}' WHERE id='{$Manufacturer->id}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
}
function ManufacturerDelete($ID){
    $DatabaseConnection = DatabaseConnection();
    $ID = mysqli_real_escape_string($DatabaseConnection,trim($ID));
    $Result = mysqli_query($DatabaseConnection, "DELETE FROM manufacturer WHERE id='{$ID}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
}
function ManufacturerGet($ID){
    $DatabaseConnection = DatabaseConnection();
    $ID = mysqli_real_escape_string($DatabaseConnection,trim($ID));
    $Result = mysqli_query($DatabaseConnection, "SELECT name, description, adress, telephone, email, url, city FROM manufacturer WHERE id='{$ID}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    if(mysqli_num_rows($Result) == 1){
        $Result = mysqli_fetch_assoc($Result);
    }
    else{
        $Result = 0;
    }
    mysqli_close($DatabaseConnection);
    return $Result;
}

?>