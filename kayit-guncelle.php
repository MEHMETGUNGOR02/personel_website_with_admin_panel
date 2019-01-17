<?php include "admin-menu.php" ?>
<?php include "ayar.php" ?>


<div class="container">
  <form action="admin-kayit-guncelle.php" method="post">
  
    <label for="fname">POST ID</label>
    <input type="text"  name="post_id" >
    
    <label for="fname">POST BAŞLIĞI</label>
    <input type="text"  name="post_baslik"  >

    <label for="lname">POST KONUSU</label>
    <input type="text"  name="post_konu" >
 
     <label for="subject">POST</label>
    <textarea id="subject" name="post" style="height:200px"></textarea>
    
     <label for="lname">Tarih</label>
    <input type="datetime"  name="tarih" value="<?php 
         date_default_timezone_set('Europe/Istanbul');
         $tarih = date_default_timezone_get();
         $tarih = date("d-m-Y H:i:s");
         echo $tarih;
         ?>"  >


    <input type="submit" value="Güncelle">

  </form>


</div>


