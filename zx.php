<?php
session_start();
error_reporting(0);
mysql_connect("localhost","uddeshah","uddeshah2k16");
mysql_select_db("techsym");
$data=mysql_query("select * from bird where uid='$_SESSION[uid]'");
while($info=mysql_fetch_array($data))
echo $info['point'];
?>
