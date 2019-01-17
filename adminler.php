<?php include "admin-menu.php" ?>
<?php include "ayar.php" ?>

<div class="container">
 <form action="admini-sil.php" method="post">  

  
    <input type="text"  name="id" placeholder="Admin ID giriniz..!" > <br/> <br>
        <button type="submit">Admin'i Sil!</button>
    </form>

<?php

$sorgu = (mysql_query("select * from admin")); 

while($sonuc = mysql_fetch_array($sorgu)){ ?>



  <form action="ziyaretci.php" method="post">

 <label for="fname">ID : <?php echo $sonuc['id']; ?></label> 

 <label for="fname">Kullanıcı Adı : <?php echo $sonuc['username']; ?></label> 
   
 <label for="lname">Şifresi : <?php echo $sonuc['password']; ?> </label>  
  
  
  </form>
      



   

    </form>





<?php } ?>


</div>