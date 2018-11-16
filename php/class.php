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
    public $id;
    public $username;
    public $password;
    public $name;
    public $lastname;
    public $email;
}
class Country{
    public $id;
    public $name;
}
class City{
    public $id;
    public $zipcode;
    public $name;
    public $country;
}
class Manufacturer{
    public $id;
    public $name;
    public $description;
    public $adress;
    public $telephone;
    public $email;
    public $url;
    public $city;
}
class Group{
    public $id;
    public $name;
    public $description;
}
class SubGroup{
    public $id;
    public $name;
    public $group;
    public $description;
}
class Gallery{
    public $id;
    public $harcode;
    public $image;
}
class Products{
    public $id;
    public $harcode;
    public $barcode;
    public $title;
    public $subtitle;
    public $description;
    public $information;
    public $audio;
    public $audionew;
    public $video;
    public $videonew;
    public $pdf;
    public $pdfnew;
    public $group;
    public $subgroup;
}
class DisplayProducts{
    public $id;
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