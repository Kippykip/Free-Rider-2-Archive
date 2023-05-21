<?
if(!$_GET['map']){die ();}
$mapid= (int)$_GET['map']+0; 
if($mapid == 0){die();}
session_start();
$mapid=$_GET['map'];

$_SESSION['lastgameplayed'] =$_GET['map'];
//$_SESSION['lastgameplayed'] = $mapid;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "https://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body style="margin: 0; padding: 0;">
<div >
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
  width="500" height="400">
  <param name="src" value="freerider2preview.swf" />
  <param name="quality" value="high" />
  <param name="scale" value="exactfit" />
  <param name="wmode" value="window" />
  <param name="allowScriptAccess" value="always" />
  <param name=FlashVars value="map=<br />
<b>Notice</b>:  Undefined variable: mapid in <b>/srv/trackmill.com/public/free-rider-2/trackpreview.php</b> on line <b>27</b><br />
">
<!--[if !IE]>-->
  <object id="x" type="application/x-shockwave-flash"
    data="freerider2preview.swf"
    width="500" height="400">
    <param name="quality" value="high" />
    <param name="scale" value="exactfit" />
    <param name="wmode" value="window" />
    <param name="allowScriptAccess" value="always" />
	<param name=FlashVars value="map=<br />
<b>Notice</b>:  Undefined variable: mapid in <b>/srv/trackmill.com/public/free-rider-2/trackpreview.php</b> on line <b>36</b><br />
">
<!--<![endif]-->
 <embed src="freerider2preview.swf" quality="high" pluginspage="https://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" FlashVars="map=<br />
<b>Notice</b>:  Undefined variable: mapid in <b>/srv/trackmill.com/public/free-rider-2/trackpreview.php</b> on line <b>38</b><br />
" width="500" height="400"></embed>
<!--[if !IE]>-->
  </object>
<!--<![endif]-->
</object>
</div>
</body>
</html>
