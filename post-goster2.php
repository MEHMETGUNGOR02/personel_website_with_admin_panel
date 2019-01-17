<?php include "ayar.php" ?> 

<?php
$id=(mysql_real_escape_string(abs(intval($_GET['id']))));

$sorgu=mysql_query("SELECT * FROM postlar WHERE id='$id'");

while ($sonuc=mysql_fetch_assoc($sorgu) )

{
echo $sonuc["post"];//Ekrana yazdırma işlemi
}



?>