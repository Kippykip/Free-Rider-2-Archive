
<? 
//include "mysqlConnect.php";
//echo $uniquemapid;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
if($page >= 2){
include "mysqlConnect.php";
mysql_select_db('free-rider-2');
	session_start();
	$mapid = $_GET['mapid'];
	if($uniquemapid == ""){$uniquemapid= $mapid; }
	$total_pages=$_GET['tp'];
	echo "<script>window.scroll(0,725);</script>";
}else{
	//page stuff
	 $result = mysql_query("SELECT COUNT(id) AS num_rows FROM comments WHERE `lid`= '$uniquemapid'");
	$dbData = mysql_fetch_array($result);
	$total_records= $dbData[0];
	$total_pages = ceil($total_records / 10);	
}
if (isset($_COOKIE["rfshq_flagen_username"])){
//
	//<form id=\"form1\" name=\"form1\" method=\"post\" action=\"submitcomments.php?id=$uniquemapid\">
$commentmessage = "
<form action=\"\" method=\"post\" onsubmit=\"new Ajax.Updater('commentbox', 'submitcomments.php?id=$uniquemapid', {asynchronous:true, parameters:Form.serialize(this), evalScripts:true}); return false;\">

<table width=\"227\" border=\"0\" align=\"center\" cellpadding=\"0\" cellspacing=\"0\">
<tr>
<td width=\"227\"><div align=\"center\">
<textarea name=\"comment\" cols=\"35\" rows=\"3\"></textarea>
</div></td>
</tr>
<tr>
<td><input name=\"btnLogin\" type=\"submit\" id=\"btnLogin\" value=\"Submit\">
</td>
</tr>
</table>
</form>";
}else{
$commentmessage = "<br> Please login to comment";
}
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 10;
//echo $start_from;
//day stuff
$todaysdate = date("M d, Y");
$yesterdaydate=date("M d, Y", time()-86400);
echo "<div id=\"commentbox\"><a name=\"cjump\"></a>";
echo "$page out of $total_pages";
		//retreve row from the database
		$result = mysql_query("SELECT date,comment,userid,id,spamCount FROM comments WHERE lid=$uniquemapid  ORDER BY `id` DESC LIMIT $start_from, 10"); /*AND spamCount<=4*/
		@$num_rows = mysql_num_rows($result);
if ($num_rows <=0){ echo "<br/>There are no comments yet. Be the first.";}
else{ ?>
<?
		//while(list($date,$comment,$name,$id, $spamCount)= mysql_fetch_row($result))
		//{
			while($row = mysql_fetch_array($result)) {
				$date = $row['date'];
				$comment = stripslashes($row['comment']);
				$name = $row['userid'];
				$rawName = $name;
				$name = "<span class=\"commentName\">".ucwords($name)."</span>";
				$id = $row['id'];
				$spamCount = $row['spamCount'];
		if( $date == $todaysdate) {$date= "today";}
		if( $date == $yesterdaydate) {$date= "yesterday";}	

/*`<? if($spamCount != -1 and isset($_SESSION['rfshq_flagen_logged_in'])){ ?><a href="javascript:void(0);"onclick="deleteComment('<br />
<b>Notice</b>:  Undefined variable: id in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>68</b><br />
')">mark as spam </a> <? } ?>*/
?>
<div class="comment odd">
	<div class="message" style="word-wrap: break-word;"><span style="font-weight: 200;color: #000000;" id="<br />
<b>Notice</b>:  Undefined variable: id in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>71</b><br />
_comment"><br />
<b>Notice</b>:  Undefined variable: comment in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>71</b><br />
</span></div><div align="right" style="position:relative;right:0px;bottom:0px;width:545px;height:15px;z-index:1;"></div>
	<div class="authinfo" align="left">
		<a href="./creator/<br />
<b>Notice</b>:  Undefined variable: rawName in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>73</b><br />
"><br />
<b>Notice</b>:  Undefined variable: name in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>73</b><br />
</a><?/*mark as spam*/?>   <br />
<b>Notice</b>:  Undefined variable: date in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>73</b><br />
     </div>
</div>
<? }} ?>
    	<br />
<b>Notice</b>:  Undefined variable: commentmessage in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>77</b><br />
  
<? 
if ($num_rows >0){
if ($page!=1){ ?>
		<a href="#"onclick="new Ajax.Updater('commentbox', 'comments.php?page=<? echo $page-1; ?>&mapid=<br />
<b>Notice</b>:  Undefined variable: uniquemapid in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>81</b><br />
&tp=<br />
<b>Notice</b>:  Undefined variable: total_pages in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>81</b><br />
', {asynchronous:true,evalScripts:true}); return false;">
		prev page
		</a>  
<?}if($page!= $total_pages){ ?>
		<a href="#" onclick="new Ajax.Updater('commentbox', 'comments.php?page=<? echo $page+1; ?>&mapid=<br />
<b>Notice</b>:  Undefined variable: uniquemapid in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>85</b><br />
&tp=<br />
<b>Notice</b>:  Undefined variable: total_pages in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>85</b><br />
', {asynchronous:true,evalScripts:true}); return false;">
		next page>>
		</a>    
<? } }?>		
		<br><br />
<b>Notice</b>:  Undefined variable: page in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>89</b><br />
 out of <br />
<b>Notice</b>:  Undefined variable: total_pages in <b>/srv/trackmill.com/public/free-rider-2/comments.php</b> on line <b>89</b><br />
 
		<br> like chatting? give the <a href="https://trackmill.com/forums">Trackmill Free rider 2 Forums</a> a try. 
</div><!--close comment box-->
<? if ($num_rows >0){ ?><br />
	<script type="text/javascript"><!--
	google_ad_client = "pub-9126408264372062";
	/* 728x90, created 9/13/08 */
	google_ad_slot = "8434375138";
	google_ad_width = 728;
	google_ad_height = 90;
	//-->
	</script>
	<script type="text/javascript"
	src="https://pagead2.googlesyndication.com/pagead/show_ads.js">
	</script>
<? } ?>
