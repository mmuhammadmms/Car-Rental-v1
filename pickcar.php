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
  <title>Reservation</title>
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


      #Pending{
        color:  #4484ce;
      }
      #Completed{
        color: #18f88c;
      }
      #Paid{
        color: #18f88c;
      }
      #Confirmed{
        color: #18f88c;
      }
      #Approved{
        color:  #f58632;
      }
      #Canceled{
        color: #f53240;
      }
      #Disapproved{
        color: #f53240;
      }
      #Rented{
        color:  #f58632;
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


  <?php

  if (isset($_POST['rent'])) {
    $rent = $_POST['rent'];
    include ("connect.php");

    $sql = "UPDATE reservation SET  payment_status = 'Rented' WHERE RESERVATION_ID = '$rent'";

    $stmt = oci_parse($conn, $sql);
    oci_execute($stmt);


    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Car is now beign rented.');
    </SCRIPT>");

  }


   ?>





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
          <li><a href="adreservation.php">RENT</a></li>
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
        </ul>
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
  <li><a href="adcars.php">Cars</a></li>
  <li><a href="adusers.php">Users</a></li>
  <li><a href="payment.php">Payment</a></li>
  <li><a href="statistics.php">Statistics</a></li>
  <li class="active"><a href="pickcar.php">Pick Car</a></li>
  <li><a href="returncar.php">Return Car</a></li>
</ul><br>
    </div>

    <div class="col-sm-9">
            <h4>Pick Car</h4>

            <?php





            include ("connect.php");
            $strSQL = "SELECT * FROM reservation where PAYMENT_STATUS = 'Confirmed'";
            $objParse = oci_parse($conn, $strSQL);
            ?>



            <br /><br />
            <?php
            $strKeyword = null;
            if(isset($_GET["txtKeyword"]))
            {
              $strKeyword = $_GET["txtKeyword"];
            }
            ?>
            <form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
              <div align="center"><table class="table table-striped table-hover table-bordered" >
                <tr>
                  <th>Search by Customer ID
                  <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
                  <input type="submit" value="Search"></th>
                </tr>
              </div></table><br />
            </form>
            <?php
              include ("connect.php");
              $strSQL1 = "SELECT  ROW_NUMBER() OVER(ORDER BY RESERVATION_ID) AS ROWNO, T.* FROM RESERVATION T
                  WHERE (CUST_ID LIKE '%".$strKeyword."%'  ) AND PAYMENT_STATUS = 'Confirmed' ";

              $objParse = oci_parse($conn, $strSQL1);
              oci_execute ($objParse,OCI_DEFAULT);

              $Num_Rows = oci_fetch_all($objParse, $Result);

              $Per_Page = 4;   // Per Page

              if(!isset($_GET["Page"]))
              {
                $Page=1;
              }
              else
              {
                $Page = $_GET["Page"];
              }

              $Prev_Page = $Page-1;
              $Next_Page = $Page+1;

              $Page_Start = (($Per_Page*$Page)-$Per_Page);
              if($Num_Rows<=$Per_Page)
              {
                $Num_Pages =1;
              }
              else if(($Num_Rows % $Per_Page)==0)
              {
                $Num_Pages =($Num_Rows/$Per_Page) ;
              }
              else
              {
                $Num_Pages =($Num_Rows/$Per_Page)+1;
                $Num_Pages = (int)$Num_Pages;
              }
              $Page_End = $Per_Page * $Page;
              if ($Page_End > $Num_Rows)
              {
                $Page_End = $Num_Rows;
              }

              $Row_End = $Per_Page * $Page;
              if($Row_End > $Num_Rows)
              {
                $Row_End = $Num_Rows;
              }
              ?>
            <table class="table table-striped table-hover table-bordered" >
              <tr>
                <th><center>Reservation ID</center></th>
                <th><center>Customer ID</center></th>
                <th><center>Cars<center></th>
                <th><center>Pickup Location</center></th>
                <th><center>Pickup Date</center></th>
                <th><center>Pickup Time</center></th>
                <th><center>Status</center></th>
                <th><center>Action</center></th>

              </tr>
              <?php
              	$strSQL2 = "SELECT C.* FROM ($strSQL1) C WHERE C.ROWNO > $Page_Start AND C.ROWNO <= $Row_End";
              	$objParse = oci_parse($conn, $strSQL2);
              	oci_execute ($objParse,OCI_DEFAULT);
              	while($objResult = oci_fetch_array($objParse,OCI_ASSOC))
              	{
              ?>
              <tr>
                <th><center><?php echo $objResult['RESERVATION_ID'];?></center></th>
                <th><center><?php echo $objResult['CUST_ID'];?></center></th>
                <th><center><?php echo $objResult['CARS_ID'];?></center></th>
                <th><center><?php echo $objResult['PICKUP_LOCATION'];?></center></th>
                <th><center><?php echo $objResult['PICKUP_DATE'];?></center></th>
                <th><center><?php echo $objResult['PICKUP_TIME'];?></center></th>
                <th><center><p id="<?php echo $objResult['PAYMENT_STATUS'];?>"><?php echo $objResult['PAYMENT_STATUS'];?></p></center></th>
                <th><form method="post" action="">
              <button class="btn" type="submit" name="pick" value="<?php echo $objResult['RESERVATION_ID'];?>">Pick Car</button></form></th>

              </th>
              </tr>
              <?php
              }
              ?>
            </table>
            <div align="right">
            Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :

            <?php
            if($Prev_Page)
            {
              echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page&txtKeyword=$strKeyword'><< Back</a> ";
            }

            for($i=1; $i<=$Num_Pages; $i++){
              if($i != $Page)
              {
                echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i&txtKeyword=$strKeyword'>$i</a> ]";
              }
              else
              {
                echo "<b> $i </b>";
              }
            }
            if($Page!=$Num_Pages)
            {
              echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page&txtKeyword=$strKeyword'>Next>></a> ";
            }

            oci_close($conn);

            ?>
            </div>











            <br />





            <?php



                if (isset($_POST['pick'])) {

                  include ('connect.php');
                  $pick = $_POST['pick'];
                  $strSQL2 = "SELECT R.RESERVATION_ID , C.CARS_ID , C.CARS_NAME , CU.CUST_FNAME , CU.CUST_LNAME , R.PICKUP_LOCATION , R.PICKUP_DATE , R.PICKUP_TIME , R.RENTAL_DURATION , R.RENTAL_DEPOSIT
FROM RESERVATION R , CARS C , CUSTOMER CU WHERE RESERVATION_ID = '$pick' AND CU.CUST_ID = R.CUST_ID AND C.CARS_ID = R.CARS_ID";
                  $objParse2 = oci_parse($conn, $strSQL2);
                  oci_execute ($objParse2,OCI_DEFAULT);
                  $objResult2 = oci_fetch_array($objParse2,OCI_BOTH);
                ?>
                <div class="container-fluid">
                  <div class="row content">
                    <div class="col-sm-6 sidenav">

                      <?php
                      ?>




                      <h4><?php echo $objResult2[2];?></h4>
                       <img src="ViewImage.php?FilesID=<?php echo $objResult2[1];?>" width="100%" height="100%">
                    </div>

                    <div class="col-sm-6">

                                  <h4><?php echo $objResult2[0];?></h4>
                                  <div align="center"><form method="post" action=""><button class="btn" type="submit" name="rent" value="<?php echo $objResult2[0];?>">Pick Car</button></form></div>
                            <h4>Details</h4>



                              <table class="table table-striped">
                                <tbody>
                                  <tr>
                                    <td>Customer Name</td>
                                    <td><?php echo $objResult2[3] . " " . $objResult2[4];?></td>
                                  </tr>
                                  <tr>
                                    <td>Pickup Location</td>
                                    <td><?php echo $objResult2[5];?></td>
                                  </tr>
                                  <tr>
                                    <td>Pickup Date</td>
                                    <td><?php echo $objResult2[6];?></td>
                                  </tr>
                                  <tr>
                                    <td>Pickup Time</td>
                                    <td><?php echo $objResult2[7];?></td>
                                  </tr>
                                  <tr>
                                    <td>Rental Duration</td>
                                    <td><?php echo $objResult2[8];?> days </td>
                                  </tr>
                                  <tr>
                                    <td>Rental Deposit</td>
                                    <td>RM <?php echo $objResult2[9];?></td>
                                  </tr>
                                  <tr>

                                    <?php
                                    $strSQL3 = "select * from payments where reservation_id = '$objResult2[0]'";
                                    $objParse3 = oci_parse($conn, $strSQL3);
                                    oci_execute ($objParse3,OCI_DEFAULT);
                                    $row = oci_fetch_all($objParse3, $res);
                                    $objResult3 = oci_fetch_array($objParse3,OCI_BOTH);
                                    $pstatus = "";
                                    if ($row == 0){
                                      $pstatus = "Not Paid";
                                    }else if ($row == 1){
                                      $pstatus = "Deposit Paid";
                                    }else {
                                      $pstatus = "Full Rental Paid";
                                    }


                                    ?>


                                    <td>Deposit Payment Status</td>
                                    <td><?php echo $pstatus;?></td>
                                  </tr>


                                </tbody>
                              </table>
                </div>


                    </div>
                  </div>
                <?php



              }
                ?>











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
