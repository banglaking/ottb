<?php
$dm = 'http://sahibweb.xyz'; // No / at the end

$host = "localhost";
$username = "botterrh_ssa";
$password = "botterrh_ssa";
$dbname = "botterrh_ssa";
$connection = mysql_connect($host,$username,$password);
if (!$connection)
{
die('Can not connect to database => Config database wrong');
}
mysql_select_db($dbname) or die('No Connection to Database => Config Database');
mysql_query("SET NAMES utf8");
?>