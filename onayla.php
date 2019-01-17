<?php

$id= $_POST['id'];
$post_baslik= $_POST['post_baslik'];
$post= $_POST['post'];
$tarih= $_POST['tarih'];
 
$sql = "insert into postlar (post_baslik, post, tarih) values (select post_baslik, post, tarih  from ckeditor where id ='".$id."'";

$kayit = mysql_query($sql);

if (isset ($kayit)){
echo "Post İşlemi Gerçekleştirildi.";
header("Location:kullanici-panel-postu-gosterme.php");
}
else {
echo "Kayıt Başarısız mehmetgungor02@outlook.com adresinden iletişime geçin";
}




?>