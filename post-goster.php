<?php include "ayar.php" ?> 
<?php

$sorgu = (mysql_query("select * from postlar")); 



while($sonuc = mysql_fetch_assoc($sorgu)){ 

'<a href="post-goster.php?id='.$sonuc['id'].'">'.$sonuc['post'].'</a>';



}
 ?>






