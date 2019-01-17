<?php include "kullanici-menu.php" ?>
<link rel="stylesheet" href="ziyaretci.css">
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Kullanıcı Paneline Hoş Geldiniz!</title>
        <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor/ckeditor.js"></script>
    </head>
    <body>
    <div class="container">
        <form action="kullanici-panel-postu.php" method="post">
        <input type="text"  name="post_baslik" placeholder="BAŞLIK GİRİLMEZSE LİNK ÜRETİLMEZ.." width="500" ><br /><br /><br />
            <textarea name="post" id="editor1" rows="10" cols="80" >
                
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
    </body>
</html>