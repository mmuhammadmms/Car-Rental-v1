<?php
session_start();
if ( $_SESSION['role'] != "Member" ){
  echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Please login.')
 window.location.href='index.php';
 </SCRIPT>");
}

include ("connect.php");
if ($_SESSION['car'] != ""){
  $_SESSION['car'] = $_SESSION['car'];
}



if(!isset($_SESSION['type'])){
  $_SESSION['type'] = "";
}else{
  $_SESSION['type'] = $_SESSION['type'];
}

if(!isset($_SESSION['gear'])){
  $_SESSION['gear'] = "";
}else{
  $_SESSION['gear'] = $_SESSION['gear'];
}

if(!isset($_SESSION['fuel'])){
  $_SESSION['fuel'] = "";
}else{
  $_SESSION['fuel'] = $_SESSION['fuel'];
}

if(!isset($_SESSION['seats'])){
  $_SESSION['seats'] = "";
}else{
  $_SESSION['seats'] = $_SESSION['seats'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Rent ( Choose Car )</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="js2/bootstrap.min.css">
  <script src="js2/jquery.min.js"></script>
  <script src="js2/bootstrap.min.js"></script>

  <link href="bs/css.css" rel="stylesheet" type="text/css">
  <link href="bs/cssl.css" rel="stylesheet" type="text/css">
  <style>


  .container2{
    background-color: #D4D4D4;
    color : black;


  }
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
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
      background-color: transparent;
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
      width: 45%;
  }

  .btn2 {
      padding: 5px 5px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
      width: 15%;
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

tab1 { padding-left: 4em; }
tab2 { padding-left: 8em; }
tab3 { padding-left: 12em; }
tab4 { padding-left: 16em; }
tab5 { padding-left: 20em; }
tab6 { padding-left: 24em; }
tab7 { padding-left: 28em; }
tab8 { padding-left: 32em; }
tab9 { padding-left: 36em; }
tab10 { padding-left: 40em; }
tab11 { padding-left: 44em; }
tab12 { padding-left: 48em; }
tab13 { padding-left: 52em; }
tab14 { padding-left: 56em; }
tab15 { padding-left: 60em; }
tab16 { padding-left: 64em; }

  </style>
</head>

<?php
    if (isset($_POST['rent'])) {

      $_SESSION['car'] = $_POST['rent'];
      $car = $_SESSION['car'];
      $strSQL2 = "SELECT * FROM cars where CARS_ID = '$car'";
      $objParse2 = oci_parse($conn, $strSQL2);
      oci_execute ($objParse2,OCI_DEFAULT);
      $objResult2 = oci_fetch_array($objParse2,OCI_BOTH);

      echo "<script>";
      echo "alert('You chose " .   $objResult2["CARS_NAME"] . "')";
      echo "</script>";

      $_SESSION['type'] = "";
      $_SESSION['gear'] = "";
      $_SESSION['fuel'] = "";
      $_SESSION['seats'] = "";

    }

?>





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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MEMBER
            <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="mdashboard.php">Dashboard</a></li>
            <li><a href="profile.php">My Profile</a></li>
            <li><a href="mreservation.php">My Reservation</a></li>
            <li><a href="mpayment.php">My Payment</a></li>
            <li><a href="mrent.php">Rent Car</a></li>
            <li class="divider"></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
        </ul>
      </div>
    </div>
  </nav>

<?php
if ($_SESSION['location'] == ""){
    $_SESSION['location'] = $_POST['location'];

}

if (isset($_POST['search'])) {


    $lc = $_SESSION['location'];

    $type = $_POST['type'];
    $gears = $_POST['gears'] ;
    $seats = $_POST['seats'] ;
    $fuel = $_POST['fuel'] ;


    if ($_POST['type'] != "X"){
        $type = $_POST['type'];
    }else{
        $type = "";
    }

    if ($_POST['gears'] != "X"){
        $gears = $_POST['gears'];
    }else{
        $gears = "";
    }

    if ($_POST['seats'] != "X"){
        $seats = $_POST['seats'];
    }else{
        $seats = "";
    }

    if ($_POST['fuel'] != "X"){
        $fuel = $_POST['fuel'];
    }else{
        $fuel = "";
    }

    $_SESSION['type'] = $type;
    $_SESSION['gear'] = $gears;
    $_SESSION['fuel'] = $fuel;
    $_SESSION['seats'] = $seats;


    $strSQL = "SELECT * FROM CARS WHERE CARS_TYPE LIKE '$type%' AND CARS_FUEL LIKE '$fuel%' AND CARS_GEARS LIKE '$gears%'
                AND CARS_SEATS LIKE '$seats%' AND CARS_STATUS != 'Unavailable'";


    $objParse = oci_parse($conn, $strSQL);
    oci_execute ($objParse,OCI_DEFAULT);

}else{
  $lc = $_SESSION['location'];
  $strSQL = "SELECT * FROM cars where CARS_LOCATION = '$lc' and CARS_STATUS !='Unavailable'";
  $objParse = oci_parse($conn, $strSQL);
  oci_execute ($objParse,OCI_DEFAULT);
}


?>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4><?php echo $_SESSION['us']?></h4>
      <ul class="nav nav-pills nav-stacked">
  <li><a href="mdashboard.php">Dashboard</a></li>
  <li><a href="profile.php">My Profile</a></li>
    <li><a href="mreservation.php">My Reservation</a></li>
    <li><a href="mpayment.php">My Payment</a></li>
    <li class="active"><a href="mrent.php">Rent Car</a></li>

  </ul><br><br  />


  <h4>Booking Details</h4>
<div class="container2">
<br />
<strong>Pickup Location</strong><tab1><a href="mrent.php">Change</a></tab1>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tr>
    <td>Pick-up:</td>
    <td><?php echo $_SESSION['location']?></td>
  </tr>
</table>
<br /><br />
<strong>Choosen Car</strong>&emsp;&emsp;&emsp;<br /><br />

<?php
if($_SESSION['car'] != "" ){

  $car = $_SESSION['car'];
  $strSQL2 = "SELECT * FROM cars where CARS_ID = '$car'";
  $objParse2 = oci_parse($conn, $strSQL2);
  oci_execute ($objParse2,OCI_DEFAULT);
  $objResult2 = oci_fetch_array($objParse2,OCI_BOTH);
  ?>

<p align="center"><img src="ViewImage.php?FilesID=<?php echo $objResult2["CARS_ID"];?>" style="width:70%;height:70%"></p>
<p align="center"><?php echo $objResult2["CARS_NAME"];?></p>
<p align="center">Price : RM<?php echo $objResult2["CARS_PRICE_DAY"];?></p>
<p align="center">Type : <?php echo $objResult2["CARS_TYPE"];?></p>
<p align="center">Gearbox : <?php echo $objResult2["CARS_GEARS"];?></p></td>

<?php
}
 ?>







</div>
    </div>

    <div class="col-sm-9">
      <h4>RENT CAR</h4><br />

           <div class="jumbotron" >
            <h4>Car Available </h4>
            <form action="" method="post">
             <div class="container">
                <div>Vehicle Type<tab2>Gearbox</tab2>&emsp;&emsp;<tab1>Fuel Type</tab1><tab1>&emsp;&emsp;Seats</div>
                <select name="type" id="type">
                  <option value="X">Choose..</option>
                  <option value="Sports" <?php if ($_SESSION['type'] == 'Sports') echo ' selected="selected"'; ?>>Sports</option>
                  <option value="Estate" <?php if ($_SESSION['type'] == 'Estate') echo ' selected="selected"'; ?>>Estate</option>
                  <option value="Van" <?php if ($_SESSION['type'] == 'Van') echo ' selected="selected"'; ?>>Van</option>
                  <option value="Pickup Vehicle" <?php if ($_SESSION['type'] == 'Pickup Vehicle') echo ' selected="selected"'; ?>>Pickup Vechicle</option>
                  <option value="Other" <?php if ($_SESSION['type'] == 'Other') echo ' selected="selected"'; ?>>Other</option>
                </select><tab1>
                <select name="gears" id="gears">
                <option value="X">Choose..</option>
                <option value="Automatic" <?php if ($_SESSION['gear'] == 'Automatic') echo ' selected="selected"'; ?>>Automatic</option>
                <option value="Manual" <?php if ($_SESSION['gear'] == 'Manual') echo ' selected="selected"'; ?>>Manual</option>
              </select></tab1><tab1><select name="fuel" id="fuel">
                  <option value="X">Choose..</option>
                  <option value="Petrol" <?php if ($_SESSION['fuel'] == 'Petrol') echo ' selected="selected"'; ?>>Petrol</option>
                  <option value="Diesel" <?php if ($_SESSION['fuel'] == 'Diesel') echo ' selected="selected"'; ?>>Diesel</option>
                  <option value="Other" <?php if ($_SESSION['fuel'] == 'Other') echo ' selected="selected"'; ?>>Other</option>
                </select></tab1><tab1><select name="seats" id="seats">
                    <option value="X">Choose..</option>
                    <option value="2" <?php if ($_SESSION['seats'] == '2') echo ' selected="selected"'; ?>>2</option>
                    <option value="3" <?php if ($_SESSION['seats'] == '3') echo ' selected="selected"'; ?>>3</option>
                    <option value="4" <?php if ($_SESSION['seats'] == '4') echo ' selected="selected"'; ?>>4</option>
                    <option value="5" <?php if ($_SESSION['seats'] == '5') echo ' selected="selected"'; ?>>5</option>
                    <option value="6" <?php if ($_SESSION['seats'] == '6') echo ' selected="selected"'; ?>>6</option>
                    <option value="7" <?php if ($_SESSION['seats'] == '7') echo ' selected="selected"'; ?>>7</option>
                    <option value="8" <?php if ($_SESSION['seats'] == '8') echo ' selected="selected"'; ?>>8</option>
                    <option value="9" <?php if ($_SESSION['seats'] == '9') echo ' selected="selected"'; ?>>9</option>
                    <option value="10" <?php if ($_SESSION['seats'] == '10') echo ' selected="selected"'; ?>>10</option>
                  </select></tab1>
                <br />
                <div align="center"><br />
                  <button type="submit" name="search" class="btn2 btn-block">Search
                    <span class="glyphicon glyphicon-arrow-right"></span>
                  </button>
                </div>
              </form>








               <div class="row text-center">
                <br /><br />


                <?php
                while($objResult = oci_fetch_array($objParse,OCI_BOTH))
                {
                  ?>


                <div class="col-sm-4">
                  <div class="thumbnail">
                    <img src="ViewImage.php?FilesID=<?php echo $objResult["CARS_ID"];?>" style="width:370px;height:300px">
                    <p><strong><?php echo $objResult["CARS_NAME"];?></strong></p>
                    <form action="details.php?cid=<?php echo $objResult["CARS_ID"];?>" method="post"  target="_blank" style="display: inline;">
                    <a href="details.php?cid=<?php echo $objResult["CARS_ID"];?>" target="_blank"><button class="btn">Details</button></a>
                  </form>
                    <button class="btn" type="submit" name="rent" value="<?php echo $objResult["CARS_ID"];?>">Rent</button>
                  </div>
                </div>

                <?php
                }
                ?>




               </div>

             </div>

           </div>
           <div align="right">
            <a href="mrent1.php"><button type="submit" class="btn btn-block">Continue
              <span class="glyphicon glyphicon-arrow-right"></span>
            </button></a>
            </div>
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
