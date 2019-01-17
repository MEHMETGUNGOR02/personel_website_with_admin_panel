
<link rel="stylesheet" href="ziyaretci.css">


<?php include "kullanici-menu.php" ?>
<?php include "ayar.php" ?>



  <h2> <center> <b>Postlarım</b></center> </h2></div>
<hr>
<?php
$adim = $_GET['adim'];
//Atadığımız string değişkenimize hiçbir değer atanmamış ise aşağıdaki kodlamalar devreye giriyor


$makale_cek = mysql_query("SELECT * FROM ckeditor ORDER BY id DESC");
while($makale_cek_yeni = mysql_fetch_array($makale_cek)){
$id = $makale_cek_yeni['id']; ?>

<div class="container">
  <form action="kullanici-panel-postu.php" method="post">

  	
     <hr>
     
<label for="fname"><i><strong><?php echo '<a href="ckeditor-haberoku.php?id='.$id.'" target="_blank"><b>'.$makale_cek_yeni['post_baslik'].'</b></a><br /> '; ?></strong></i></label> <br>
   

    <label for="subject"> <?php echo "<br>" .$makale_cek_yeni['id']; ?></label> <br/>
    <label for="subject" name = "post_baslik"> <?php echo "<br>" .$makale_cek_yeni['post_baslik']; ?></label> <br/> 

    <label for="subject" name="post"> <?php echo "<br>" .$makale_cek_yeni['post']; ?></label> <br/>  
    
   
 </form>

    <form action="onayla.php" method="post">

       <label for="subject" name ="post_id"> </label> <br/>
     <label for="subject" name = "post_baslik"></label> 
    
    <label for="subject" name="post"> </label> <br/>  

    <input type="submit" value="Onayla">

  </form>




</div>

<hr>

<?php } ?>














</div>
</body>



