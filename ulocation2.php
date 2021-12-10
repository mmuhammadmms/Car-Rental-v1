<?php
 session_start();


?>
<!DOCTYPE html>
<html lang="en">


  <?php
  include ("connect.php");
  $rid = $_GET['id'];
  $strSQL = "SELECT * FROM reservation where RESERVATION_ID = :rid";
  $objParse = oci_parse($conn, $strSQL);
  oci_bind_by_name($objParse, ':rid', $rid);
  oci_execute ($objParse,OCI_DEFAULT);
  $objResult = oci_fetch_array($objParse,OCI_BOTH);




?>

</body>
</html>
