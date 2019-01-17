 <?php include "admin-menu.php" ?>
  <link rel="stylesheet" href="ziyaretci.css">
<!--<div class="container">
  <form action="post.php" method="post">

    <label for="fname">POST BAŞLIĞI</label>
    <input type="text"  name="post_baslik" placeholder="BAŞLIK.." >

    <label for="lname">POST KONUSU</label>
    <input type="text"  name="post_konu" placeholder="POST KONUSU" >
 
     <label for="subject">POSTUN KENDİSİ</label>
    <textarea id="subject" name="post" placeholder="POST BURAYA YAZILACAK" style="height:200px"></textarea>
    
     <label for="lname">Tarih</label>
    <input type="datetime"  name="tarih" value="<?php 
			   date_default_timezone_set('Europe/Istanbul');
			   $tarih = date_default_timezone_get();
			   $tarih = date("d-m-Y H:i:s");
			   echo $tarih;
			   ?>"  >

    <input type="submit" value="Gönder">

  </form>-->


</div>
<hr>
<script src="ckeditor/ckeditor.js"></script>
 <div class="container">
        <form action="post.php" method="post">
        <input type="text"  name="post_baslik" placeholder="BAŞLIK.." width="500" ><br /><br /><br />
            <textarea  name="post" id="editor1" rows="100" cols="80"  >          
            </textarea><br />
            <label for="lname">Tarih</label>
    <input type="datetime"  name="tarih" value="<?php 
         date_default_timezone_set('Europe/Istanbul');
         $tarih = date_default_timezone_get();
         $tarih = date("d-m-Y H:i:s");
         echo $tarih;
         ?>" <br>
            <input type="submit" value="Gönder">
            
          
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'post' );
            </script>
        </form>
        </div>

<hr>
