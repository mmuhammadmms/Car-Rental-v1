<!DOCTYPE html>
<?php session_start();?>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Reservation Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="js2/bootstrap.min.css">
  <script src="js2/jquery.min.js"></script>
  <script src="js2/bootstrap.min.js"></script>

  <link href="bs/css.css" rel="stylesheet" type="text/css">
  <link href="bs/cssl.css" rel="stylesheet" type="text/css">


  <script src="jquery.min.js"></script>
  <script src="xepOnline.jqPlugin.js"></script>
  <script>

  var click="return xepOnline.Formatter.Format('JSFiddle', {render:'download'})";
  jQuery('#buttons').append('<button onclick="'+ click +'">PDF</button>');
  </script>

  <style>


#pending{
  color: orange;
}

#completed{
  color: green;
}

#confirmed{
  color: blue;
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
  h3{
    font-size: 23px;
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

  .container{
    width:100%;
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
<body>
<div id="print">
      <h4>RESERVATION DETAILS</h4><br /><br /><br /><br /><br />
        <div class="jumbotron container">
            <h3>Thank You <?php echo $_SESSION['us']?>, for renting with us. Your car is reserved.</h3>
            Your base rate for <?php echo $objResult["RENTAL_DURATION"];?> days rental is : RM <?php echo $objResult["RENTAL_PRICE"] - 60;?>.<br />
            Tax : RM 60.00<br />
            <h3>Total Price : RM <?php echo $objResult["RENTAL_PRICE"];?></h3>
            <h5>Required deposit ( 10% of RM <?php echo $objResult["RENTAL_PRICE"];?> : RM <?php echo $objResult["RENTAL_DEPOSIT"];?></h5>

            <br /><br />
            <h4>Your Information</h4><h3>
              <table width="100%" border="0" cellspacing="1" cellpadding="1">
                <tr>
                  <td width="26%"><h3>Name</h3></td>
                  <td width="74%"><h3><?php echo $cfname . " " . $clname;?></h3></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><h3>IC / Passport</h3></td>
                  <td><h3><?php echo $cic;?></h3></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><h3>Email</h3></td>
                  <td><h3><?php echo $cem;?></h3></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><h3>Contact Number</h3></td>
                  <td><h3><?php echo $cnum;?> </h3></td>
                </tr>
              </table>
              <br /><br />
            </div><br />
                <div class="jumbotron container">
                  <h4>Pickup&emsp;&emsp;&emsp; &emsp;&emsp;/&emsp;&emsp;&emsp;&emsp;&emsp;Return </h4>
            <div class="col-sm-6">
              <div align="center">
                Pickup location<br />
                <h2><?php echo $objResult["PICKUP_LOCATION"];?> </h2>
                Pickup Date
                <h2><?php echo $objResult["PICKUP_DATE"];?> </h2>
                Pickup Time
                <h2><?php echo $objResult["PICKUP_TIME"];?> </h2>
              </div>
            </div>
            <div class="col-sm-6">
              <div align="center">
              Return location<br />
              <h2><?php echo $objResult["RETURN_LOCATION"];?> </h2>
                Return Date
                <h2><?php echo $objResult["RETURN_DATE"];?> </h2>
                Return Time
                <h2><?php echo $objResult["RETURN_TIME"];?> </h2>
              </div>

            </div>
            &emsp;
            <h4>Car Details</h4>
            <table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tr>
                <td width="40%" rowspan="7"><div align="center"><img src="ViewImage.php?FilesID=<?php echo $objResult["CARS_ID"];?>" height = "100%" width="100%"></div></td>
                <td width="60%"><h3>&emsp;<?php echo $carname;?></h3></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><h3>&emsp;Fuel : <?php echo $carfuel;?>  </h3></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><h3>&emsp;Type : <?php echo $cartype;?></h3></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><h3>&nbsp;</h3></td>
              </tr>
            </table>


            </div>
      <br />

  </div>

  </body>
  </html>
