<?php include "admin-menu.php" ?>
<?php include "ayar.php" ?>
<?php


$sorgu = mysql_query("select * from yorumlar");


while($sonuc = mysql_fetch_array($sorgu)){?>

<div class="container">
  <form action="yorum.php" method="post">

    <label for="fname">Yorum ID : <?php echo "<br>" .$sonuc['yorum_id']; ?></label> 
    
    <label for="fname">Yorum Adı : <?php echo "<br>" .$sonuc['yorum_ad']; ?></label> 
   
    <label for="lname">Yorum Soyadı : <?php echo "<br>" .$sonuc['yorum_soyad']; ?> </label> 
    

    <label for="subject">Yorumu : <?php echo "<br>" .$sonuc['yorum']; ?></label>
    
    <label for="subject">Tarih : <?php echo "<br>" .$sonuc['tarih']; ?></label>
    

    

  </form>


</div>




<?php } ?>









