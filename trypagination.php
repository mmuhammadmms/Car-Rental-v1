<html>
<?php
$strKeyword = null;

?>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
  <form name="frmSearch" method="get" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
    <table width="599" border="1">
      <tr>
        <th>Keyword
        <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $_GET["txtKeyword"];?>">
        <input type="submit" value="Search"></th>
      </tr>
    </table>
  </form>

  <?php
  if(isset($_GET["txtKeyword"]))
  {
    $strKeyword = $_GET["txtKeyword"];
  }
  
if(isset($_GET["txtKeyword"]))
  	{
  	$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
    error_reporting(E_ALL ^ E_DEPRECATED);
  	$objDB = mysql_select_db("jpsm");

  	// Search By Name or Email
  	$strSQL = "SELECT * FROM user1 WHERE (Name LIKE '%".$_GET["txtKeyword"]."%' or emel LIKE '%".$_GET["txtKeyword"]."%')";
  	$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
  	$Num_Rows = mysql_num_rows($objQuery);


  	$Per_Page = 2;   // Per Page

  	$Page = $_GET["Page"];
  	if(!$_GET["Page"])
  	{
  		$Page=1;
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


  	$strSQL .=" order  by id ASC LIMIT $Page_Start , $Per_Page";
  	$objQuery  = mysql_query($strSQL);

  	?>
  	<table width="600" border="1">
  	  <tr>
  		<th width="98"> <div align="center">Name </div></th>
  		<th width="198"> <div align="center">Email </div></th>
  	  </tr>
  	<?php
  	while($objResult = mysql_fetch_array($objQuery))
  	{
  	?>
  	  <tr>
  		<td><?php echo $objResult["Name"];?></td>
  		<td><?php echo $objResult["Emel"];?></td>
  	  </tr>
  	<?php
  	}
  	?>
  	</table>
  	<br>
  	Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
  	<?php
  	if($Prev_Page)
  	{
  		echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page&txtKeyword=$_GET[txtKeyword]'><< Back</a> ";
  	}

  	for($i=1; $i<=$Num_Pages; $i++){
  		if($i != $Page)
  		{
  			echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i&txtKeyword=$_GET[txtKeyword]'>$i</a> ]";
  		}
  		else
  		{
  			echo "<b> $i </b>";
  		}
  	}
  	if($Page!=$Num_Pages)
  	{
  		echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page&txtKeyword=$_GET[txtKeyword]'>Next>></a> ";
  	}

  	mysql_close($objConnect);

  	}
  	?>


</body>
</html>
