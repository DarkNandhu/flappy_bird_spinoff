<?php
error_reporting(0);
session_start();
mysql_connect("localhost","uddeshah","uddeshah2k16");
mysql_select_db("techsym");
mysql_query("update bird set point=$_POST[scorez] where uid='$_SESSION[uid]'");
?>