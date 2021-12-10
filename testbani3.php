<!DOCTYPE html>
<?php session_start();?>
<html lang=en>
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
</head>
<?php
include (connect.php);
$rid = $_GET['rid'];
$strSQL = SELECT * FROM reservation where RESERVATION_ID = :rid;
$objParse = oci_parse($conn, $strSQL);
oci_bind_by_name($objParse, ':rid', $rid);
oci_execute ($objParse,OCI_DEFAULT);
$objResult = oci_fetch_array($objParse,OCI_BOTH);

$sqlcname =  SELECT CUST_FNAME , CUST_LNAME  , CUST_IC , CUST_EMAIL , CUST_NUMBER FROM CUSTOMER WHERE CUST_ID = :cid;
$stidcname = oci_parse($conn, $sqlcname);
oci_bind_by_name($stidcname, ':cid', $objResult[CUST_ID]);
oci_execute($stidcname);
$row2 = oci_fetch_row($stidcname);
$cfname= $row2[0];
$clname = $row2[1];
$cic = $row2[2];
$cem = $row2[3];
$cnum = $row2[4];

$sqlcar =  select cars_name , cars_fuel , cars_type from cars where cars_id = :carid ;
$stidcar = oci_parse($conn, $sqlcar);
oci_bind_by_name($stidcar, ':carid', $objResult[CARS_ID] );
oci_execute($stidcar);
$row3 = oci_fetch_row($stidcar);
$carname = $row3[0];
$carfuel = $row3[1];
$cartype = $row3[2];



 ?>
<div id=print>
      <h4>RESERVATION DETAILS</h4><br />
        <div class=jumbotron container>
            <h3>Thank You <?php echo $_SESSION['us']?>, for renting with us. Your car is reserved.</h3>
            Your base rate for <?php echo $objResult[RENTAL_DURATION];?> days rental is : RM <?php echo $objResult[RENTAL_PRICE] - 60;?>.<br />
            Tax : RM 60.00<br />
            <h3>Total Price : RM <?php echo $objResult[RENTAL_PRICE];?></h3>
            <h5>Required deposit ( 10% of RM <?php echo $objResult[RENTAL_PRICE];?> : RM <?php echo $objResult[RENTAL_DEPOSIT];?></h5>

            <br /><br />
            <h4>Your Information</h4><h3>
              <table width=100% border=0 cellspacing=1 cellpadding=1>
                <tr>
                  <td width=26%><h3>Name</h3></td>
                  <td width=74%><h3><?php echo $cfname .   . $clname;?></h3></td>
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
                <div class=jumbotron container>
                  <h4>Pickup&emsp;&emsp;&emsp; &emsp;&emsp;/&emsp;&emsp;&emsp;&emsp;&emsp;Return </h4>
            <div class=col-sm-6>
              <div align=center>
                Pickup location<br />
                <h2><?php echo $objResult[PICKUP_LOCATION];?> </h2>
                Pickup Date
                <h2><?php echo $objResult[PICKUP_DATE];?> </h2>
                Pickup Time
                <h2><?php echo $objResult[PICKUP_TIME];?> </h2>
              </div>
            </div>
            <div class=col-sm-6>
              <div align=center>
              Return location<br />
              <h2><?php echo $objResult[RETURN_LOCATION];?> </h2>
                Return Date
                <h2><?php echo $objResult[RETURN_DATE];?> </h2>
                Return Time
                <h2><?php echo $objResult[RETURN_TIME];?> </h2>
              </div>

            </div>
            &emsp;
            <h4>Car Details</h4>
            <table width=100% border=0 cellspacing=1 cellpadding=1>
              <tr>
                <td width=40% rowspan=7><div align=center><img src=ViewImage.php?FilesID=<?php echo $objResult[CARS_ID];?> height = 100% width=100%></div></td>
                <td width=60%><h3>&emsp;<?php echo $carname;?></h3></td>
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
