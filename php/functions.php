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
function ManufacturerRead(){
    $DatabaseConnection = DatabaseConnection();
    $Result = mysqli_query($DatabaseConnection, "SELECT name, description, adress, telephone, email, url, city FROM manufacturer;") or die('Error: ' . mysqli_error($DatabaseConnection));
    $Result = mysqli_fetch_all($Result, MYSQLI_NUM);
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

//#############################################################################################################################
//                  GROUP FUNCTIONS
//#############################################################################################################################
function GroupView(){
    $DatabaseConnection = DatabaseConnection();
    $Result = mysqli_query($DatabaseConnection, "SELECT * FROM groups;") or die('Error: ' . mysqli_error($DatabaseConnection));
    $Result = mysqli_fetch_all($Result, MYSQLI_NUM);
    mysqli_close($DatabaseConnection);
    return $Result;
}
function GroupCreate($Group){
    $DatabaseConnection = DatabaseConnection();
    $Group->id = mysqli_real_escape_string($DatabaseConnection, trim($Group->id));
    $Group->name = mysqli_real_escape_string($DatabaseConnection, trim($Group->name));
    $Group->description = mysqli_real_escape_string($DatabaseConnection, trim($Group->description));
    
    $MysqliResult = mysqli_query($DatabaseConnection, "SELECT name FROM groups WHERE name='{$Group->name}';") or die('Error on SELECT: ' . mysqli_error($DatabaseConnection));
    if(mysqli_num_rows($MysqliResult) == 0){
        mysqli_query($DatabaseConnection, "INSERT INTO groups (name, description) VALUES ('{$Group->name}', '{$Group->description}');") or die('Error on INSERT: ' . mysqli_error($DatabaseConnection));
        $Result = '<script>alert("Group you have enterd: ' . $Group->name . ' has been successfully added to the database.");</script>';
    }
    else{
        $Result = '<script>alert("Group you have enterd: ' . $Group->name . ' already exists.");</script>';
    }    
    mysqli_close($DatabaseConnection);
    return $Result;
}
function GroupUpdate($Group){
    $DatabaseConnection = DatabaseConnection();
    $Group->id = mysqli_real_escape_string($DatabaseConnection, trim($Group->id));
    $Group->name = mysqli_real_escape_string($DatabaseConnection, trim($Group->name));
    $Group->description = mysqli_real_escape_string($DatabaseConnection, trim($Group->description));
    
    $Result = mysqli_query($DatabaseConnection, "UPDATE groups SET name='{$Group->name}', description='{$Group->description}' WHERE id='{$Group->id}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
}
function GroupRead(){
    $DatabaseConnection = DatabaseConnection();
    $Result = mysqli_query($DatabaseConnection, "SELECT name, description FROM groups;") or die('Error: ' . mysqli_error($DatabaseConnection));
    $Result = mysqli_fetch_all($Result, MYSQLI_NUM);
    mysqli_close($DatabaseConnection);
    return $Result;
}
function GroupDelete($ID){
    $DatabaseConnection = DatabaseConnection();
    $ID = mysqli_real_escape_string($DatabaseConnection,trim($ID));
    $Result = mysqli_query($DatabaseConnection, "DELETE FROM groups WHERE id='{$ID}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
}
function GroupGet($ID){
    $DatabaseConnection = DatabaseConnection();
    $ID = mysqli_real_escape_string($DatabaseConnection,trim($ID));
    $Result = mysqli_query($DatabaseConnection, "SELECT name, description FROM groups WHERE id='{$ID}';") or die('Error: ' . mysqli_error($DatabaseConnection));
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
//                  SUBGROUP FUNCTIONS
//#############################################################################################################################
function SubgroupView(){
    $DatabaseConnection = DatabaseConnection();
    $Result = mysqli_query($DatabaseConnection, "SELECT * FROM subgroup;") or die('Error: ' . mysqli_error($DatabaseConnection));
    $Result = mysqli_fetch_all($Result, MYSQLI_NUM);
    mysqli_close($DatabaseConnection);
    return $Result;
}
function SubgroupCreate($SubGroup){
    $DatabaseConnection = DatabaseConnection();
    $SubGroup->id = mysqli_real_escape_string($DatabaseConnection, trim($SubGroup->id));
    $SubGroup->name = mysqli_real_escape_string($DatabaseConnection, trim($SubGroup->name));
    $SubGroup->description = mysqli_real_escape_string($DatabaseConnection, trim($SubGroup->description));
    $SubGroup->group = mysqli_real_escape_string($DatabaseConnection, trim($SubGroup->group));
    
    $MysqliResult = mysqli_query($DatabaseConnection, "SELECT name FROM subgroup WHERE name='{$SubGroup->name}' AND groups='{$SubGroup->group}';") or die('Error on SELECT: ' . mysqli_error($DatabaseConnection));
    if(mysqli_num_rows($MysqliResult) == 0){
        mysqli_query($DatabaseConnection, "INSERT INTO subgroup (name, description, groups) VALUES ('{$SubGroup->name}', '{$SubGroup->description}', '{$SubGroup->group}');") or die('Error on INSERT: ' . mysqli_error($DatabaseConnection));
        $Result = '<script>alert("Subgroup you have enterd: ' . $SubGroup->name . ' has been successfully added to the database.");</script>';
    }
    else{
        $Result = '<script>alert("Subgroup you have enterd: ' . $SubGroup->name . ' already exists within ' . $SubGroup->group . ' group.");</script>';
    }    
    mysqli_close($DatabaseConnection);
    return $Result;
}
function SubgroupUpdate($SubGroup){
    $DatabaseConnection = DatabaseConnection();
    $SubGroup->id = mysqli_real_escape_string($DatabaseConnection, trim($SubGroup->id));
    $SubGroup->name = mysqli_real_escape_string($DatabaseConnection, trim($SubGroup->name));
    $SubGroup->description = mysqli_real_escape_string($DatabaseConnection, trim($SubGroup->description));
    $SubGroup->group = mysqli_real_escape_string($DatabaseConnection, trim($SubGroup->group));
    
    $Result = mysqli_query($DatabaseConnection, "UPDATE subgroup SET name='{$SubGroup->name}', description='{$SubGroup->description}', groups='{$SubGroup->group}' WHERE id='{$SubGroup->id}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
}
function SubgroupRead(){
    $DatabaseConnection = DatabaseConnection();
    $Result = mysqli_query($DatabaseConnection, "SELECT name, description, groups FROM subgroup;") or die('Error: ' . mysqli_error($DatabaseConnection));
    $Result = mysqli_fetch_all($Result, MYSQLI_NUM);
    mysqli_close($DatabaseConnection);
    return $Result;
}
function SubgroupDelete($ID){
    $DatabaseConnection = DatabaseConnection();
    $ID = mysqli_real_escape_string($DatabaseConnection,trim($ID));
    $Result = mysqli_query($DatabaseConnection, "DELETE FROM subgroup WHERE id='{$ID}';") or die('Error: ' . mysqli_error($DatabaseConnection));
    mysqli_close($DatabaseConnection);
    return $Result;
}
function SubgroupGet($ID){
    $DatabaseConnection = DatabaseConnection();
    $ID = mysqli_real_escape_string($DatabaseConnection,trim($ID));
    $Result = mysqli_query($DatabaseConnection, "SELECT name, description, groups FROM subgroup WHERE id='{$ID}';") or die('Error: ' . mysqli_error($DatabaseConnection));
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
//                  PRODUCT FUNCTIONS
//#############################################################################################################################
?>