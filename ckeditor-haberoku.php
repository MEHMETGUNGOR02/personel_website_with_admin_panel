<link rel="stylesheet" href="ziyaretci.css">
<body>
<?php include "header.php" ?>

<?php include "menu.php" ?>

<?php include "ayar.php" ?>


<div id="icerik">


<?php
$id = $_GET['id']; 

$haber_goster = mysql_query("SELECT * FROM ckeditor WHERE id=$id"); 
$makale_goster_yeni = mysql_fetch_array($haber_goster);


?>

<div class="container">
<form action="kullanici-panel-postu.php" method="post">
     
   


    <label for="lname"><u> <?php echo "<br>" .$makale_goster_yeni['post']; ?> </u></label>  <br>

    
 
    

    

  </form>



</div>


</div>
</body>
<?php include "footer.php" ?>