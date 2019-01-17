<?php include "admin-menu.php" ?>
<?php include "ayar.php" ?>

<?php

$sorgu = (mysql_query("select * from uyeler")); 

while($sonuc = mysql_fetch_array($sorgu)){ ?>


<div class="container">
  <form action="ziyaretci.php" method="post">

    <label for="fname">Kullanıcı Adı : <?php echo $sonuc['username']; ?></label> 
   
    <label for="lname">Şifresi : <?php echo $sonuc['password']; ?> </label>  
    

      

    

  </form>


</div>




<?php } ?>