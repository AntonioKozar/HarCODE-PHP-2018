<?php
    session_start();
    require("../../class.php");
    require("../../functions.php");
    require("../../static.php");

    $HostPath = "..";


    
    if(isset($_POST['Update']) and $_POST['Update'] == "1")
    {
        $Products = new Products;
        $Products->harcode = $_POST['Harcode'];
        $Products->barcode = $_POST['Barcode'];
        $Products->title = $_POST['Title'];
        $Products->subtitle = $_POST['Subtitle'];
        $Products->description = $_POST['Description'];
        $Products->information = $_POST['Information'];
        $Products->audio = $_POST['Audio'];
        $Products->audionew = $_FILES['AudioNEW'];
        $Products->video = $_POST['Video'];
        $Products->videonew = $_POST['VideoNEW'];
        $Products->pdf = $_POST['PDF'];
        $Products->pdfnew = $_FILES['PDFNEW'];
        $Products->group = $_POST['Group'];
        $Products->subgroup = $_POST['Subgroup'];
        $Products->id = $_POST['ID'];
        $ID = $Products->id;
        $Result = ProductsUpdate($Products);
        print($Result);
        //header("Location:" . $HostPath . "/products/index.php");
    }
    elseif (isset($_POST['ID']) and $_POST['ID'] != "") {
        $ID = $_POST['ID'];
        $Result = ProductsGet($ID);
        if($Result == 0)
        {
            $Result = '<script>alert("Country you are trying to edit is missing. Contact your administrator.");</script>';
            print($Result);
            //header("Location:" . $HostPath . "/products/index.php");
        }
        $GroupView = GroupView();
        $SubgroupView = SubgroupView();
    }
    else{
        $Result = '<script>alert("You need to select country to edit it.");</script>';
        print($Result);
        //header("Location:" . $HostPath . "/products/index.php");
    }    
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
        <div class="col-lg-11">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="../index.php">HarCODE</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown active">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownProducts" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownProducts">
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/products/index.php">View</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/products/create.php">Create</a>
                  <a class="dropdown-item" href="<?php print($HostPath) ?>/products/read.php">Read</a>                  
                  <a class="dropdown-item active" href="<?php print($HostPath) ?>/products/update.php">Update</a>
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
        <br><hr><br><br>
        <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
                <label for="InputProductsHarcode">Harcode</label>
                <input value="<?php print($Result['harcode']);?>" type="input" class="form-control" id="InputProductsHarcode" placeholder="Product harcode here..." name="Harcode" required maxlength="7">

                <label for="InputProductsBarcode">Barcode</label>
                <input value="<?php print($Result['barcode']);?>" type="input" class="form-control" id="InputProductsBarcode" placeholder="Product barcode here..." name="Barcode" required maxlength="13">

                <label for="InputProductsTitle">Title</label>
                <input value="<?php print($Result['title']);?>" type="input" class="form-control" id="InputProductsTitle" placeholder="Product title here..." name="Title" required maxlength="128">

                <label for="InputProductsSubtitle">Subtitle</label>
                <input value="<?php print($Result['subtitle']);?>" type="input" class="form-control" id="InputProductsSubtitle" placeholder="Product subtitle here..." name="Subtitle" required maxlength="256>

                <label for="InputProductsDescription">Description</label>
                <textarea rows="5" type="input" class="form-control" id="InputProductsDescription" placeholder="Product description here..." name="Description" required>
                <?php print($Result['description']);?>
                </textarea>

                <label for="InputProductsInformation">Information</label>
                <input value="<?php print($Result['information']);?>" type="input" class="form-control" id="InputProductsInformation" placeholder="Product information here..." name="Information" required>

                <label for="InputProductsAudioNEW">Audio</label>
                <br>
                <audio controls>
                    <source src="<?php print($Result["audio"]);?>" type="audio/mpeg">
                    Your browser does not support the audio element.
                    </audio>
                <input type="file" class="form-control btn btn-light btn-sm" id="InputProductsAudioNEW" name="AudioNEW">
                <input value="<?php print($Result['audio']);?>" type="hidden" class="form-control btn btn-light btn-sm" id="InputProductsAudio" name="Audio" required>

                <label for="InputProductsVideoNEW">Video</label>
                <br>
                <iframe width="420" height="315"
                    src="<?php print($Result["video"]);?>">
                    </iframe>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">https://www.youtube.com/watch?v=
                        </div>
                    </div>
                    <input type="text" class="form-control" id="InputProductsVideoNEW" placeholder="Product video here..." name="VideoNEW" maxlength="64">
                    <input value="<?php print($Result['video']);?>" type="hidden" class="form-control btn btn-light btn-sm" id="InputProductsAudio" name="Video" required>
                </div>

                <label for="InputProductsPFDNEW">PDF</label>
                <a target="_blank" class="form-control btn btn-light btn-sm" href="<?php print($Result["pdf"]);?>">PDF</a>
                <input type="file" class="form-control btn btn-light btn-sm" id="InputProductsPFDNEW" name="PDFNEW">
                <input value="<?php print($Result['pdf']);?>" type="hidden" class="form-control btn btn-light btn-sm" id="InputProductsAudio" name="PDF" required>

                <label for="InputProductsGroup">Group</label>
                <select class="form-control" id="InputProductsGroup" name="Group" required>
                    <option selected value="<?php print($Result['groups']);?>"><?php print($Result['groups']);?></option>
                <?php 
                foreach ($GroupView as $Row) {
                    if($Row[1] == $Result['groups']){continue;}
                ?>
                    <option value="<?php print($Row[1]);?>"><?php print($Row[1]);?></option>
                <?php
                }
                ?>                    
                </select>

                <label for="InputProductsSubgroup">Subgroup</label>
                <select class="form-control" id="InputProductsSubgroup" name="Subgroup" required>
                    <option selected value="<?php print($Result['subgroups']);?>"><?php print($Result['subgroups']);?></option>
                <?php 
                foreach ($SubgroupView as $Row) {
                    if($Row[1] == $Result['subgroups']){continue;}
                ?>
                    <option value="<?php print($Row[1]);?>"><?php print($Row[1]);?></option>
                <?php
                }
                ?>                    
                </select>
            </div>
            <input type="hidden" class="form-control" id="ProductID" name="ID" value="<?php print($ID);?>">
            <button type="submit" class="btn btn-primary" name="Update" value="1">Update</button>
        </form>
        <br><br><hr><br>

        </div>
        <div class="col"></div>
      </div>
    </div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>