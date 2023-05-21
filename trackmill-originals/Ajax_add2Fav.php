<?
//die("Favs disabled for now");
session_start();
$username= $_COOKIE["TM_username"];
if($username == ""){die('ERROR');}
if (((int)$_GET['d']+0) == 0 && isset($_GET['d'])){die();}
$mapid= $_GET['d'];
// User Fav list
include "mysqlConnect.php";
mysql_select_db($DB['free_rider_2']);


/*

// see if game is in database already
 $sql= mysql_query("SELECT Favs FROM users WHERE username='$username'");
$row = mysql_fetch_array($sql);

if(strstr($row['Favs'],$mapid.",")) {
die("Track in favs");
} 

//  update mysql 
 $sql1= mysql_query("UPDATE users SET Favs=CONCAT(Favs, '$mapid, ') WHERE  username='$username'");
$sql2=mysql_query("UPDATE ".$TBL['levels'] ." SET numFavs = numFavs +1 WHERE `id` = '$mapid'");	
if($sql1 or $sql2){
	echo"<span style='color:#55D7F7'>Added to Favs</span>";
}else{
	echo "Failed.";
}
*/
if (!isset($_COOKIE["TM_username"])){
	die("You must be logged in to add this to your favorites!");
} 
//$tid= $_POST['tid'];
//$uid = $_SESSION['TM_userid'];

mysql_query("UPDATE levels SET favCount = (favCount +1) WHERE `id` = '$mapid'");
if(mysql_query("INSERT INTO myFavs (tid, uid) VALUES('$mapid', '".$_COOKIE["TM_userid"]."' ) ") and mysql_query("UPDATE levels SET favCount = (favCount +1) WHERE `id` = '$mapid'")){
	die("Track added to Favs.");
}else{
	if (strpos(mysql_error(), 'Duplicate') !== false) {
	     echo "already in Favs.";
	} else {
		echo "There was a database error while trying to add this track to you're favs";
		//echo mysql_error();
	}
}