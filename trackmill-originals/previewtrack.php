<?
if (((int)$_GET['map']+0) == 0 && isset($_GET['map'])){die();}
session_start();
$mapid=mysql_real_escape_string($_GET['map']);
$_SESSION['lastgameplayed'] =$_GET['tid'];
 if(isset($_POST['saveit']) and isset($_POST['tid'])){
	$trackcode = mysql_real_escape_string($_POST['tid']);
	//echo $trackcode;
	//die();
	include "mysqlConnect.php";
			mysql_select_db($DB['free_rider_2']);
	$query_autodate = "INSERT INTO previews (trackcode, dateadded)
		VALUE ('$trackcode', CURDATE() )";
	mysql_query($query_autodate)or die(mysql_error());
	$nextid =mysql_insert_id();
	//	$base32 = base_convert($nextid, 10, 32);
	
	header( 'Location: https://trackmill.com/free-rider-2/previewtrack.php?pid='.$nextid ) ;
		
	}

?>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Track Preview</title>
</head>
<body bgcolor="#ffffff">
<!--url's used in the movie-->
<!--text used in the movie-->
<div align="center">
<? if(isset($_POST['tid'])){ ?>
	
	
	sdfsdf	
	
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="750" height="600" id="testpreview" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="true" />
	<param name="flashvars" value="lacode=<? echo $_POST['tid'];?>">
	<param name="movie" value="testpreview1.2.swf" /><param name="quality" value="high" /><param name="scale" value="noscale" />
	<param name="bgcolor" value="#ffffff" />	<embed src="testpreview1.2.swf" quality="high" scale="noscale" bgcolor="#ffffff" width="750" height="600" name="testpreview" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="https://www.macromedia.com/go/getflashplayer" flashvars="lacode=<? echo $_POST['tid'];?>" />
	</object>

<?}elseif(isset($_GET['tid'])){ 

	
?>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="750" height="600" id="testpreview" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="true" />
	<param name="movie" value="testpreview1.2.swf?tid=<? echo $_GET['tid'];?>" /><param name="quality" value="high" /><param name="scale" value="noscale" /><param name="bgcolor" value="#ffffff" />	<embed src="testpreview1.2.swf?tid=<? echo $_GET['tid'];?>" quality="high" scale="noscale" bgcolor="#ffffff" width="750" height="600" name="testpreview" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="https://www.macromedia.com/go/getflashplayer" />
	</object>
	
	<?}elseif(isset($_GET['pid'])){ ?>


		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="750" height="600" id="testpreview" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="allowFullScreen" value="true" />
		<param name="movie" value="testpreview1.2.swf?pid=<? echo $_GET['pid'];?>" /><param name="quality" value="high" /><param name="scale" value="noscale" /><param name="bgcolor" value="#ffffff" />	<embed src="testpreview1.2.swf?pid=<? echo $_GET['pid'];?>" quality="high" scale="noscale" bgcolor="#ffffff" width="750" height="600" name="testpreview" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="https://www.macromedia.com/go/getflashplayer" />
		</object>
	
<? }else{ ?>
	<form id="form1" name="form1" method="post" action="previewtrack.php">
	<table width="600" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <td colspan="2">&nbsp;</td>
	  </tr>
	  <tr>
	    <td colspan="2"><textarea name="tid" id="tid" cols="70" rows="18"></textarea></td>
	  </tr>
	  <tr>
	    <td width="466"><input type="submit" name="button" id="button" value="Submit" /></td>
	    <td width="134"><input type="checkbox" name="saveit" id="saveit" />
	    save/share</td>
	  </tr>
	</table>
	<p><em>*note: saved previews are deleted every 30 days</em></p>
	</form>
	

<? } ?>
</div>
</body>
</html>