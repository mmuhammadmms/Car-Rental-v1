<?php
include('connect.php');
session_start();

	unset($_SESSION['us']);
	unset($_SESSION['pw']);
	unset($_SESSION['car']);
	unset($_SESSION['location']);
	unset($_SESSION['pdate']);
	unset($_SESSION['ptime']);
	unset($_SESSION['return']);
	unset($_SESSION['rdate']);
	unset($_SESSION['rtime']);
	unset($_SESSION['total']);
	unset($_SESSION['deposit']);
	unset($_SESSION['duration']);
  session_destroy();
	$_SESSION = array();
	echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";
?>
