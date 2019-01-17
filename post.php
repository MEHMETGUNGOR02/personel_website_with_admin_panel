<?php 
 
include("ayar.php");
ob_start();
session_start();
 
//KAYIT EKLEME 
$post_baslik = $_POST['post_baslik'];
$post_konu = $_POST['post_konu'];
$post = $_POST['post'];
$tarih = $_POST['tarih'];

 
$sql = "insert into postlar (post_baslik, post_konu, post, tarih) values ('$post_baslik','$post_konu', '$post', '$tarih')";
$kayit = mysql_query($sql);

if (isset ($kayit)){
echo "Post İşlemi Gerçekleştirildi.";
   header("Location:admin.php");
}
else {
echo "Kayıt Başarısız mehmetgungor02@outlook.com adresinden iletişime geçin";
}





 
ob_end_flush();
?>