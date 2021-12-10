<?php
session_start();
include ("connect.php");
if ( $_SESSION['role'] != "Member" ){
  echo ("<SCRIPT LANGUAGE='JavaScript'>
 window.alert('Please login.')
 window.location.href='index.php';
 </SCRIPT>");
}


$_SESSION['return'] = "";
$_SESSION['pdate']= "";
$_SESSION['ptime']= "";
$_SESSION['rdate']= "";
$_SESSION['rtime']= "";

if ($_SESSION['car'] == ""){
  echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Please choose car to continue.')
    window.location.href='mrent0.php';
    </SCRIPT>");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Rent Car ( Pickup / Return ) Date</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="js2/bootstrap.min.css">
  <script src="js2/jquery.min.js"></script>
  <script src="js2/bootstrap.min.js"></script>
  <link href="dp/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
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
      width: 100%;
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

  </ul><br>
<h4>Booking Details</h4>
<div class="container2">

<strong>Pickup/Return </strong><tab1><a href="mrent.php">Change</a></tab1>
<table width="100%" border="0" cellspacing="1" cellpadding="1">
<tr>
  <td>Pick-up:</td>
  <td><?php echo $_SESSION['location']; ?></td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>

<tr>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
</table>

<strong>Choosen Car</strong><tab1><a href="mrent0.php">Change</a></tab1><br /><br />

<?php
if($_SESSION['car'] != "" ){

  $car = $_SESSION['car'];
  $strSQL2 = "SELECT * FROM cars where CARS_ID = '$car'";
  $objParse2 = oci_parse($conn, $strSQL2);
  oci_execute ($objParse2,OCI_DEFAULT);
  $objResult2 = oci_fetch_array($objParse2,OCI_BOTH);
  ?>

<p align="center"><img src="ViewImage.php?FilesID=<?php echo $objResult2["CARS_ID"];?>" width="70%" hegiht="70%"></p>
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
      <form action="mrentcheck.php" method="post">
      <div class="jumbotron" >
        <h4>Choose Return Location</h4>
        <div align="center">
          <select name="return" required>
          <option value="">Choose..</a></option>
          <option value="klia/klia2">klia/klia2</a></option>
          <option value="Klang">Klang</a></option>
          <option value="Sibu">Sibu</a></option>
          </select>


      </div>

  </div>
      <h4>Pickup/Return Date</h4>
         <div class="col-sm-6">
             <div class="jumbotron">
              <h4>Pickup</h4>

                Pickup Date
                <div class="input-group date form_date col-md-15" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" readonly name="pdate" required>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                Pickup Time
                <div class="input-group date form_time col-md-9" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                    <input class="form-control" size="16" type="text"  readonly name="ptime" required>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
             </div>
          </div>
          <div class="col-sm-6">
            <div class="jumbotron">
             <h4>Return</h4>
               Return Date
               <div class="input-group date form_date col-md-15" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                   <input class="form-control" size="16" type="text"  readonly name="rdate" required>
                   <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
         <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
               </div>
               Return Time
               <div class="input-group date form_time col-md-9" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                   <input class="form-control" size="16" type="text"  readonly name="rtime" required>
                   <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
         <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
               </div>
            </div><br />
            <button type="submit" class="btn btn-block">Continue
              <span class="glyphicon glyphicon-arrow-right"></span>
            </button>
         </div>


         </form>
       </div>


</div>


  </div>
</div>








<script type="text/javascript" src="dp/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="dp/bootstrap.min.js"></script>
<script type="text/javascript" src="dp/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript">


    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1,
                linkFormat: "yyyy-mm-dd"

    });
  $('.form_date').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0,
    startDate: '+2d',
    linkFormat: "yyyy-mm-dd"
    });
  $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 1,
    minView: 0,
    maxView: 1,
    forceParse: 0,
    linkFormat: "yyyy-mm-dd"
    });
</script>

















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
