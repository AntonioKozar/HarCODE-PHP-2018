<?php

/**
 * Class short summary.
 *
 * Class description.
 *  
 * @version 1.0
 * @author Antonio Kožar, mag.ing.el.
 */

class User{
    public $username;
    public $password;
    public $name;
    public $lastname;
    public $email;
}
class Country{
    public $name;
    public $description;
}
class City{
    public $zipcode;
    public $name;
    public $country;
}
class Manufacturer{
    public $name;
    public $description;
    public $adress;
    public $telephone;
    public $email;
    public $url;
    public $city;
}
class Group{
    public $name;
    public $description;
}
class SubGroup{
    public $name;
    public $group;
    public $description;
}
class Gallery{
    public $harcode;
    public $image;
}
class Item{
    public $harcode;
    public $barcode;
    public $title;
    public $subtitle;
    public $description;
    public $information;
    public $audio;
    public $video;
    public $pdf;
    public $group;
    public $subgroup;
}
class DisplayItem{
   public $name;
   public $shortdescription;
   public $group;
   public $subgroup;
   public $images;
   public $manufacturename;
   public $manufactureadress;
   public $manufacturetelephone;
   public $manufactureurl;
   public $manufactureemail;
   public $description;
   public $audio;
   public $video;
   public $pdf;
}
 ?>