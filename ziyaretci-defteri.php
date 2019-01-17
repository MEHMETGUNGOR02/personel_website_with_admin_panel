<? include "header.php" ?>
<? include "menu.php" ?>
 <link rel="stylesheet" href="ziyaretci.css">
<div id="icerik">


<div class="container">
  <form action="yorum.php" method="post">

    <label for="fname">Adınız</label>
    <input type="text"  name="yorum_ad" placeholder="Adınız.." >

    <label for="lname">Soyadınız</label>
    <input type="text"  name="yorum_soyad" placeholder="Soyadınız.." >  
    

    <label for="subject">Yorumunuz</label>
    <textarea id="subject" name="yorum" placeholder="Bize Bişeyler Yaz..!" style="height:200px"></textarea>
       <label for="lname">Tarih</label><br /><br />
    <input type="datetime"  name="tarih" value="<?php 
			   date_default_timezone_set('Europe/Istanbul');
			   $tarih = date_default_timezone_get();
			   $tarih = date("d-m-Y H:i:s");
			   echo $tarih;
			   ?>"  > 
              

    <input type="submit" value="Gönder">

  </form>


</div>



<? include "footer.php" ?>