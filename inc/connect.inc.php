<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_base = "login";
$db_tcon = "inventory";

$conn = new mysqli($db_host , $db_user , $db_pass , $db_base);
$tcon = new mysqli($db_host , $db_user , $db_pass , $db_tcon);
?>