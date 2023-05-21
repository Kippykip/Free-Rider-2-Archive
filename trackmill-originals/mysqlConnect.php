<?
/**************************************************************\
Name:mysqlConnect.php
Purpose: simple script to connect to the correct mysql Datebase
Created By: Dan 'goose' Gusak
\**************************************************************/
$DB['free_rider_2']   = "free-rider-2";
$DB['free-rider-2']   = "free-rider-2";
$DB['free_rider']     = "free-rider";
$DB['free-rider']     = "free-rider";
$TBL['levels']        = "levels";
$DB['forums']         = "trackmillforum";
$DB['steelstructure'] = "steelstructure";
$DB['Steel-Superstructure'] = "Steel-Superstructure";
$DB['free-wires']            = "free-wires";
$DB['free-wires']      = "free-wires";
$DB['DUI']      = "DUI";
$DB['blockDude']      = "blockdude";
$DB['bounceback']      = "bouncebac";
$DB['izzy']      = "izzi";
$DB['izzi']      = "izzi";
$DB['bitaddiction']      = "bitaddiction";
$DB['foxnroll']  = "foxnroll";
$DB['thedistur']  = "thedistur";
$DB['coloraze'] = "coloraze";
$DB['apitest'] =  "apitest";
$DB['derpyshapegame'] = "derpyshapegame";
$DB['derpysh%60pegame'] = $DB['derpyshapegame'];
$DB['dsg'] = $DB['derpyshapegame'];
$DB['tube'] =  "tube";
$DB['test'] =  "apitest";
$DB['etchbox'] =  "etchbox";
$DB['maximum-frustration-2'] =  "maximum-frustration-2";
$DB['maximumfrustration2'] =  "maximum-frustration-2"; // the game swfy file uses this
$DB['coconudge-2'] = "coconudge-2";
$DB['rapt'] = "rapt";
$DB['cat-ninja'] = "cat-ninja";
$DB['wone-2'] = "wone-2";
$DB['hippocritical'] = "hippocritical";



//$dbcnn = @mysql_connect("localhost", "goose", "QVZpAUPIVVkelXEddS1u");// or include("downtime.php");
$dbcnn = @mysql_connect("104.236.205.58", "tmgame", "juf6eSLmi4r7LJifUp4f");// or include("downtime.php");
?>