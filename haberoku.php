<link rel="stylesheet" href="ziyaretci.css">
<body>
<?php include "header.php" ?>

<?php include "menu.php" ?>

<?php include "ayar.php" ?>


<div id="icerik">


<?php
$id = $_GET['id']; 

$haber_goster = mysql_query("SELECT * FROM postlar WHERE post_id=$id"); 
$makale_goster_yeni = mysql_fetch_array($haber_goster);


?>

<div class="container">
<form action="post.php" method="post">
     
<label for="fname"><i><strong><?php echo $makale_goster_yeni['post_baslik']; ?></strong></i></label> <br>
   


    <label for="lname"><u> <?php echo "<br>" .$makale_goster_yeni['post_konu']; ?> </u></label>  <br>
   
    

    <label for="subject"> <?php echo "<br>" .$makale_goster_yeni['post']; ?></label> <br/>
   
   
    <label for="subject"><br /> Son Değiştirilme Zamanı :<b><?php echo $makale_goster_yeni['tarih']; ?></b></label><br />
    
 
    

    

  </form>



</div>


</div>
</body>
<?php include "footer.php" ?>