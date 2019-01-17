<?php
$host="localhost";
$db="mydb";
$user="root";
$pass="mehmetgungor";
$conn=@mysql_connect($host,$user,$pass) or die("Mysql Baglanamadi");
 
mysql_select_db($db,$conn) or die("Veritabanina Baglanilamadi");
mysql_set_charset('utf8_turkish_ci',$conn);
?>