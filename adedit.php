<!DOCTYPE html>
<html lang="en">
<head>
  <?php
   session_start();
   if ( $_SESSION['role'] != "Staff" ){
     echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Please login.')
    window.location.href='index.php';
    </SCRIPT>");
   }

   ?>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Edit Cars</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="bs/bootstrap.min.css">
  <link rel="stylesheet" href="js2/bootstrap.min.css">
  <script src="js2/jquery.min.js"></script>
  <script src="js2/bootstrap.min.js"></script>

  <link href="bs/css.css" rel="stylesheet" type="text/css">
  <link href="bs/cssl.css" rel="stylesheet" type="text/css">


  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }
  .jumbotron {
      background-color: white;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #2d2d30;
      font-size: 50px;
  }
  .logo {
      color: #2d2d30;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #2d2d30;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #2d2d30;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

  .carousel-inner img {
      width: 70%; /* Set width to 100% */
      margin: auto;
  }

  .carousel-caption h3 {
      color: #fff !important;
  }

  @media (max-width: 450px) {
      .carousel-caption {
          display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
      }
  }

  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }

  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }

  /* Black buttons with extra padding and without rounded borders */
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }

  /* On hover, the color of .btn will transition to white with black text */
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }

  /* Add a dark gray background color to the modal header and center text */
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }

  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  /* Dropdown */
.open .dropdown-toggle {
    color: #fff ;
    background-color: #555 !important;
}

/* Dropdown links */
.dropdown-menu li a {
    color: #000 !important;
}

/* On hover, the dropdown links will turn red */
.dropdown-menu li a:hover {
    background-color: #2d2d30 !important;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">CAR RENTAL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="rent.php">RENT</a></li>
        <li><a href="cars.php">CARS</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">ADMIN
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="adreservation.php">Reservation</a></li>
          <li><a href="adcars.php">Cars</a></li>
          <li><a href="adusers.php">Users</a></li>
          <li><a href="payment.php">Payment</a></li>
          <li><a href="statistics.php">Statistics</a></li>
          <li><a href="pickcar.php">Pick Car</a></li>
          <li><a href="returncar.php">Return Car</a></li>
          <li class="divider"></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>
    </div>
  </div>
</nav>




<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>MANAGE</h4>
      <ul class="nav nav-pills nav-stacked">
  <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="adreservation.php">Reservation</a></li>
  <li class="active"><a href="adcars.php">Cars</a></li>
  <li><a href="adusers.php">Users</a></li>
  <li><a href="payment.php">Payment</a></li>
  <li><a href="statistics.php">Statistics</a></li>
  <li><a href="pickcar.php">Pick Car</a></li>
  <li><a href="returncar.php">Return Car</a></li>
</ul><br>
    </div>

    <div class="col-sm-9">
    <h4>EDIT CARS</h4>
  <div id = "home" class="jumbotron">

    <h4>Photos</h4>
    <?php
    $cid = $_GET['CarsID'];

    include ("connect.php");
    $strSQL = "SELECT * FROM cars where CARS_ID = '$cid'";
    $objParse = oci_parse($conn, $strSQL);
    oci_execute ($objParse,OCI_DEFAULT);
    $objResult = oci_fetch_array($objParse,OCI_BOTH);

    $c = 1;
    if ($c == 1){
          ?>
    <div align="center"><img src="ViewImage.php?FilesID=<?php echo $_GET['CarsID'];?>" height = "50%" width="50%"></div>
  <?php }


  ?>


    <?php

    if (isset($_POST['btnSubmit'])) {
      if($_FILES["filUpload"]["name"] != "")
      {
        //*** Insert Record ***//

        $lob = oci_new_descriptor($objConnect, OCI_D_LOB);
        $strSQL = "INSERT INTO CARSIMAGE ";
        $strSQL .="(CARS_ID,NAME,FILESTYPE,FILESNAME) VALUES ";
        $strSQL .="('$cid','".$_POST["txtName"]."' ";
        $strSQL .=",'".$_FILES["filUpload"]["type"]."',EMPTY_BLOB()) RETURNING FILESNAME INTO :BLOBDATA";

        $objParse = oci_parse($objConnect, $strSQL);
        oci_bind_by_name($objParse, ':BLOBDATA', $lob, -1, OCI_B_BLOB);
        $objExecute = oci_execute($objParse, OCI_DEFAULT);
        $lob->savefile($_FILES['filUpload']['tmp_name']);


        $c = 1;
        oci_free_descriptor($lob);
        oci_free_statement($objParse);
        oci_close($objConnect);

    ?>

    <?php
      }
    }

    if (isset($_POST['btnDel'])) {


      $objConnect = oci_connect("PD","1234","XE");
      $sql = "DELETE FROM CARSIMAGE WHERE CARS_ID = :id ";
        $stid = oci_parse($objConnect, $sql);
        oci_bind_by_name($stid, ':id', $cid );
        oci_execute($stid);
      $c = 3;
    }

    if (isset($_POST['btnSubmitA'])) {

      $objConnect = oci_connect("PD","1234","XE");
      if($_FILES["filUpload"]["name"] != "")
      {
        $lob = oci_new_descriptor($objConnect, OCI_D_LOB);
        $strSQL = "INSERT INTO CARSIMAGE ";
        $strSQL .="(CARS_ID,NAME,FILESTYPE,FILESNAME) VALUES ";
        $strSQL .="('$cid','".$_POST["txtName"]."' ";
        $strSQL .=",'".$_FILES["filUpload"]["type"]."',EMPTY_BLOB()) RETURNING FILESNAME INTO :BLOBDATA";

        $objParse = oci_parse($objConnect, $strSQL);
        oci_bind_by_name($objParse, ':BLOBDATA', $lob, -1, OCI_B_BLOB);
        $objExecute = oci_execute($objParse, OCI_DEFAULT);
        $lob->savefile($_FILES['filUpload']['tmp_name']);
      $c = 1;
      if($objExecute)
    {
      oci_commit($objConnect);
    //	echo "Copy/Upload Complete<br>";
    }
    else
    {
      oci_rollback($objConnect);
    //	echo "Copy/Upload is not Complete";
    }
      ?>

      <?php
    }else {
      $c = 3;
    }
  }?>
  <form name="form1" method="post"  enctype="multipart/form-data">

  <?php

  if ($c == 1){
  ?>
    <input name="btnDel" type="submit" value="Remove">
  <?php }else if ($c == 0) {

  ?>
  <input type="text" name="txtName" hidden="hidden"><br>
  <input type="file" name="filUpload"><br>
    <input name="btnSubmit" type="submit" value="Upload">
  <?php }else if ($c == 3){
    ?>	<input type="text" name="txtName" hidden="hidden"><br>
      <input type="file" name="filUpload"><br>
    <input name="btnSubmitA" type="submit" value="Upload">
  <?php

  }
  ?>
  </form>

<form action="editcarsp.php?cid=<?php echo $cid = $_GET['CarsID'];?>" method="post">
  <table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
  <td colspan="2"><div align="center"><h4>CAR</h4></div></td>
  <td colspan="2"><div align="center"><h4>DETAILS</h4></div></td>
  </tr>
  <tr>
  <td width="7%"><div align="center">Plate </div></td>
  <td width="24%">
    <div align="center">
      <input name="plate" type="text" id="plate" size="20" maxlength="40" value="<?php echo $objResult["CARS_PLATE"];?>" required/>
    </div></td>
  <td width="29%"><div align="center">Name</div></td>
  <td width="40%"><input name="name" type="text" id="name" size="40" maxlength="40" value="<?php echo $objResult["CARS_NAME"];?>"required/></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  <tr>
  <td><div align="center">Model</div></td>
  <td><div align="center">
    <input name="model" type="text" id="model" size="20" maxlength="40" value="<?php echo $objResult["CARS_MODEL"];?>" required/>
  </div></td>
  <td><div align="center">Color</div></td>
  <td><label for="asd"></label>
    <select name="color" id="color" value="<?php echo $objResult["CARS_COLOR"];?>" required>
      <option value="<?php echo $objResult["CARS_COLOR"];?>"><?php echo $objResult["CARS_COLOR"];?></option>
      <option>Red</option>
      <option>White</option>
      <option>Black</option>
      <option>Purple</option>
      <option>Pink</option>
      <option>Blue</option>
      <option>Green</option>
      <option>Yellow</option>
    </select></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  <tr>
  <td><div align="center">Make</div></td>
  <td><div align="center">
    <input name="make" type="text" id="make" size="20" maxlength="40" value="<?php echo $objResult["CARS_MAKE"];?>" required/>
  </div></td>
  <td><div align="center">Doors</div></td>
  <td><select name="doors" id="doors" value="<?php echo $objResult["CARS_DOORS"];?>" required>
    <option value="<?php echo $objResult["CARS_DOORS"];?>"><?php echo $objResult["CARS_DOORS"];?></option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td><div align="center">Fuel</div></td>
  <td><select name="fuel" id="fuel" value="<?php echo $objResult["CARS_FUEL"];?>" required>
    <option value="<?php echo $objResult["CARS_FUEL"];?>"><?php echo $objResult["CARS_FUEL"];?></option>
    <option>Petrol</option>
    <option>Diesel</option>
    <option>Other</option>
  </select></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><div align="center">Gearbox</div></td>
  <td><select name="gearbox" id="gearbox" value="<?php echo $objResult["CARS_GEARS"];?>" required>
    <option value="<?php echo $objResult["CARS_GEARS"];?>"><?php echo $objResult["CARS_GEARS"];?></option>
    <option>Automatic</option>
    <option>Manual</option>
  </select></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><div align="center">Number of seats</div></td>
  <td><select name="seats" id="seats" value="<?php echo $objResult["CARS_SEATS"];?>" required>
    <option value="<?php echo $objResult["CARS_SEATS"];?>"><?php echo $objResult["CARS_SEATS"];?></option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
    <option>5</option>
    <option>6</option>
    <option>7</option>
    <option>8</option>
    <option>9</option>
    <option>10</option>
  </select></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><div align="center">Vehicle Type</div></td>
  <td><select name="vtype" id="vtype" value="<?php echo $objResult["CARS_TYPE"];?>" required>
    <option value="<?php echo $objResult["CARS_TYPE"];?>"><?php echo $objResult["CARS_TYPE"];?></option>
    <option>Sports</option>
    <option>Estate</option>
    <option>Van</option>
    <option>Pickup Vechicle</option>
    <option>Other</option>
  </select></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td><div align="center">Power</div></td>
  <td><input name="power" type="text" id="power" size="10" maxlength="40" value="<?php echo $objResult["CARS_POWER"];?>" required/></td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  </tr>
  </table>
  <h4>Price</h4>
  <div align="center">
    <table width="53%" border="0" cellspacing="1" cellpadding="1">
      <tr>
        <td width="57%"><div align="center">Price Per Day</div></td>
        <td width="43%">
          <center>RM</center>
          <input type="text" name="price" id="price" value="<?php echo $objResult["CARS_PRICE_DAY"];?>" required/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>

    </table>
</div>
<h4>Description</h4>
<textarea name="des" id="des" cols="93" rows="5" value=""><?php echo $objResult["CARS_DESC"];?></textarea>
<br />
<br /><p align="right">
<input type="submit" name="button" id="button" value="Submit" />
<input type="reset" name="button2" id="button2" value="Reset" />
</p>
</form>
  </div>

  </div>
  </div>
</div>



























<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
