<?

if(!$_GET['map']){die ();}
$mapid= (int)$_GET['map']+0; 
if($mapid == 0){die();}
	include "mysqlConnect.php";
	mysql_select_db($DB['free_rider_2']);
	$result = mysql_query("SELECT levelcode,vehicle FROM levels WHERE `id`='$mapid'") or die(mysql_error(). "query is screwed up");  
if($row = mysql_fetch_array($result)){
$gamecode=  $row['levelcode'];
$vehicle= $row['vehicle'];
}else{	$gamecode="-18 1i 18 1i,-18 1i -18 4c u 4c,-18 2q a 2q,2g 1i 2g 4c,2g 1i 4c 1i 4c 2q 2g 2q,2q 2q 42 4c,5a 1i 7g 1i 7g 2q 5a 2q 5a 4c,5a 1i 5a 2q,5u 2q 6s 4c,8e 1i ak 1i ak 42,8e 1i 8e 42 ak 42,b8 1i b8 42,b8 1i d4 1i d4 2q b8 2q,c6 2q cq 42,u 50 u 76 26 76,2q 76 2q 5a,2q 76 4c 76,2q 5k 2q 50 4m 50 4m 76 42 76,5k 76 68 50 76 50 7q 76,5u 68 7g 68,8o 50 8o 76,8o 50 9m 50 aa 5u aa 6i 8o 76,bi 50 bi 76,au 50 c6 50,c6 76 au 76,cq 50 d4 50 do 6s e2 6s e2 50,cq 76 cq 50,g8 50 f0 50 f0 6s g8 6s g8 68 fk 68,3e 84 3e a0,2g 84 4c 84,5a 84 5a a0,5a 84 6s 84 6s 8o 5a 8o,5u 8o 68 a0,7g a0 7q 84 8e 84 8o a0,7q 92 8e 92,aa 84 92 84 92 9m aa 9m,b8 84 b8 9m,c6 8e b8 8o bs 9c##";}



@$vars .= "TheMapCode=" . @$gamecode. "&vehicle=".@$vehicle;

echo $vars;

//unset($_SESSION['lastgameplayed']);

mysql_close($dbcnn);
?>