<?php
include_once 'connect.php';
mysql_connect($host,$username,$password) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
mysql_query("SET NAMES utf8");
$count = mysql_query("SELECT * FROM ZEXBOT");
$num_rows = mysql_num_rows($count);
?>
<?php include 'head.php'; ?>
<div class="border"><div class="and" style="text-align:center;">
<form method="POST" action="login.php">
<center><input placeholder="EAAAAAYsX7TsBAG62KddDOXEZAsB428Ypqgv6o2pKoZANTa6hEIqIFcEAsfvQSlefXqDbUDbiUCxtmOaeo6jKgO0RAieCOz2dMnJp7Jk9F499Sl53tAXR44Pkt" style="height:35px;width:60%;border-radius:15px;border:1px solid blue;background: none;color:aqua;" name="token"> <br>&nbsp;&nbsp;</center>
<input id="sbmt" class="inp-btn" type="submit" style="border: 1px solid white;color: #fff;border-radius: 48px;padding: 15px;font-size: 12px;font-weight: bold;margin-left: -3px;margin-top: 10px;background-color: white;color: white;background: none;width:100px;" value="SUBMIT"></form> </div></div>
<?php include 'foot.php'; ?>
</body>
</html>