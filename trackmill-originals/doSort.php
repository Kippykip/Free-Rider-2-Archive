<?
die();
if($_GET['sort'] == "charCount"){die();}
//session_start(); 
setcookie("sort", $_GET['sort'], time()+3600);
setcookie("h", $_GET['h'], time()+3600);
//$_SESSION['sort'] = $_GET['sort'];
//$_SESSION['h']    = $_GET['h'];
header( 'Location: ./');
?>