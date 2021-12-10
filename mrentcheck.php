<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Checking reservation.....</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="dp/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="dp/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
session_start();
include ("connect.php");
$valid = "";


$car =   $_SESSION['car'];
$_SESSION['return'] = $_POST['return'];
$_SESSION['pdate'] = $_POST['pdate'];
$_SESSION['ptime'] = $_POST['ptime'];
$_SESSION['rdate'] = $_POST['rdate'];
$_SESSION['rtime'] = $_POST['rtime'];



$pickdate = $_SESSION['pdate'];
$returndate = $_SESSION['rdate'];



$strSQL3 = "SELECT PICKUP_DATE , RETURN_DATE FROM RESERVATION WHERE CARS_ID = '$car' AND PAYMENT_STATUS != 'Canceled'";
$objParse3 = oci_parse($conn, $strSQL3);
oci_execute ($objParse3,OCI_DEFAULT);
while($objResult3 = oci_fetch_row($objParse3))
{
//echo $objResult3[0] . "<br />" . $objResult3[1] . "<br />";


  $strSQL = "SELECT TO_DATE(:pd, 'DD/MM/YYYY') - 1 + rownum AS d
  FROM all_objects
  WHERE TO_DATE(:pd, 'DD/MM/YYYY') - 1 + rownum <= TO_DATE(:rd, 'DD/MM/YYYY')";
  $objParse = oci_parse($conn, $strSQL);
  oci_bind_by_name($objParse, ':pd', $objResult3[0]);
  oci_bind_by_name($objParse, ':rd', $objResult3[1]);
  oci_execute ($objParse,OCI_DEFAULT);


      while($objResult = oci_fetch_row($objParse))
      {
      //echo $objResult[0] . "<br />";

      $strSQL2 = "SELECT TO_DATE(:pdate, 'DD/MM/YYYY') - 1 + rownum AS d
      FROM all_objects
      WHERE TO_DATE(:pdate, 'DD/MM/YYYY') - 1 + rownum <= TO_DATE(:rdate, 'DD/MM/YYYY')";
      $objParse2 = oci_parse($conn, $strSQL2);
      oci_bind_by_name($objParse2, ':pdate', $pickdate);
      oci_bind_by_name($objParse2, ':rdate', $returndate);
      //($objParse, ':cu', $_SESSION['us']);
      oci_execute ($objParse2,OCI_DEFAULT);


          while($objResult2 = oci_fetch_row($objParse2))
          {
            if ($objResult[0] == $objResult2[0]){
              $valid = "N";
            }

          }
      }

}

if ($returndate <= $pickdate){
  echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Invalid date selected.Please select valid date. ')
  window.location.href='mrent1.php';
  </SCRIPT>");
}else if ($valid == "N"){
  echo ("<SCRIPT LANGUAGE='JavaScript'>
  window.alert('Sorry.This car have been reserved on the choosen date.Please choose another date to continue.')
  window.location.href='mrent1.php';
  </SCRIPT>");
}else{

  echo "<script>
    window.location = 'mrent3.php';
</script>";

}


      ?>
</table>
</body>
</html>
