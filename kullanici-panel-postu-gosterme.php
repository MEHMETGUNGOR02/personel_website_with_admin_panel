
<link rel="stylesheet" href="ziyaretci.css">



<?php include "ayar.php" ?>
<?php include "admin-menu.php" ?>


  <h2> <center> <b>Kullanıcı Postları</b></center> </h2></div>
<hr>
    <div class="container">
        <form action="kullanici-postu-sil.php" method="post">
        <input type="text"  name="id" placeholder="Post ID Giriniz.." width="500" ><br /><br /><br />

            <input type="submit" value="Postu Sil">
            
               
        </form>
        </div>
<hr>
<div class="container">
        <form action="onayla.php" method="post">
 
        <input type="text"  name="id" placeholder="Post ID Giriniz.." width="500" ><br /><br /><br />

        <input type="submit" value="Onayla">
            
               
        </form>
        </div>
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
    
   





</div>

<hr>

<?php } ?>














</div>
</body>



