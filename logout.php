<?php
session_start();
ob_start();
session_destroy();
echo "<center>Cikis Yaptiniz. Ana Sayfaya Yonlendiriliyorsunuz.</center>";
 echo'<meta http-equiv="refresh" content="0;URL=index.php">';
ob_end_flush();
?>