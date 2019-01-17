<?php 
 
include("ayar.php");
ob_start();
session_start();
 
//KAYIT EKLEME 
$post = $_POST['post'];
$post_baslik = $_POST['post_baslik'];


 
$sql = "insert into ckeditor (post, post_baslik) values ('$post','$post_baslik')";
$kayit = mysql_query($sql);

if (isset ($kayit)){
echo "Post İşlemi Gerçekleştirildi.";
   header("Location:kullanici-paneli.php");
}
else {
echo "Kayıt Başarısız mehmetgungor02@outlook.com adresinden iletişime geçin";
}





 
ob_end_flush();
?>