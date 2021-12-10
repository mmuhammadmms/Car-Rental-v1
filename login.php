<?php
include('connect.php');
session_start();


$_SESSION['us'] = $_POST['username'];
$_SESSION['pw'] = $_POST['password'];


$cust = oci_parse($conn, "select * from customer where cust_username = :us and cust_password = :pw ");
$staff = oci_parse($conn, "select * from staff where  staff_username = :us and staff_password = :pw ");

oci_bind_by_name($cust, ":us", $_POST['username']);
oci_bind_by_name($cust, ":pw", $_POST['password']);
oci_bind_by_name($staff, ":us", $_POST['username']);
oci_bind_by_name($staff, ":pw", $_POST['password']);

oci_execute($cust);
oci_execute($staff);



$row = oci_fetch_all($cust, $res);
$row2 = oci_fetch_all($staff, $res);


if ($row == 1 && $row2 == 0){
  $_SESSION['role'] = "Member";
 	$row3 = oci_fetch_row($cust);
 	$cid = $row3[0];
	$_SESSION['id'] = $cid;
  header("location: mdashboard.php");

}else if ($row == 0 && $row2 == 1){
  $_SESSION['role'] = "Staff";
 	$row4 = oci_fetch_row($staff);
 	$sid = $row4[0];
	$_SESSION['id'] = $sid;
  header("location: dashboard.php");

}else{
  echo "<script>";
  echo "alert('Login Failed. Wrong username or password.')";
  echo "</script>";
  echo "<meta http-equiv=\"refresh\" content=\"0; URL=index.php\">";
}
?>
