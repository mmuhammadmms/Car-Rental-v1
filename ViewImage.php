<?php
	$objConnect = oci_connect("PD","1234","XE");
	$strSQL = "SELECT * FROM CARSIMAGE WHERE CARS_ID = '".$_GET["FilesID"]."' ";
	$objParse = oci_parse ($objConnect, $strSQL);
	oci_execute ($objParse,OCI_DEFAULT);
	$objResult = oci_fetch_array($objParse);

	header("Content-Type: ".$objResult["FILESTYPE"]);
	echo $objResult["FILESNAME"]->load();
?>
