<link rel="stylesheet" href="ziyaretci.css">


<?php include "header.php" ?>

<?php include "menu.php" ?>

<?php include "ayar.php" ?>


<div id="icerik">


<?php
$adim = $_GET['adim'];
//Atadığımız string değişkenimize hiçbir değer atanmamış ise aşağıdaki kodlamalar devreye giriyor


$makale_cek = mysql_query("SELECT * FROM postlar ORDER BY post_id DESC");
while($makale_cek_yeni = mysql_fetch_array($makale_cek)){
$post_id = $makale_cek_yeni['post_id']; ?>

<div class="container">
  <form action="post.php" method="post">
     
<label for="fname"><i><strong><?php echo '<a href="haberoku.php?id='.$post_id.'" target="_blank"><b>'.$makale_cek_yeni['post_baslik'].'</b></a><br /> '; ?></strong></i></label> <br>
   
    <label for="lname"><u> <?php echo "<br>" .$makale_cek_yeni['post_konu']; ?> </u></label>  <br>
    

    <label for="subject"> <?php echo "<br>" .$makale_cek_yeni['post']; ?></label> <br/>
    <label for="subject"><br /> Son Güncelleme Tarihi :<b><?php echo $makale_cek_yeni['tarih']; ?></b></label>
    

    

  </form>


</div>




<?php } ?>









<!--<? include "slider.php" ?>-->

</div>
</body>
<?php include "footer.php" ?>