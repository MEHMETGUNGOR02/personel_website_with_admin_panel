<?php include "admin-menu.php" ?>
<?php include "ayar.php" ?>
<div class="container">
  <h2> <center> <b>Postlar </b></center> </h2></div>
<hr>
<?php
	
$sorgu = (mysql_query("select * from postlar ORDER BY post_id DESC")); 

while($sonuc = mysql_fetch_array($sorgu)){ ?>

<div class="container">

  <form action="index.php" method="post">
  
  <label for="fname">Post ID : <?php echo $sonuc['post_id']; ?></label> <br>

    <label for="fname">Post Başlığı : <?php echo $sonuc['post_baslik']; ?></label> <br>
   
    <label for="lname">Post Konusu : <?php echo $sonuc['post_konu']; ?> </label>  <br>    

    <label for="subject">Post : <?php echo "<br>" .$sonuc['post']; ?></label> <br>
    
    <label for="subject">Tarih : <?php echo $sonuc['tarih']; ?></label> 

     </form>


</div>

<hr>


<?php } ?>

