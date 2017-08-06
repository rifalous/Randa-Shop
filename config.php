<?php
error_reporting(0);
session_start();
ob_start();

mysql_connect("localhost", "root", "");
mysql_select_db("olshop");
?>