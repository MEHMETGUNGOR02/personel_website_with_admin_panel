<?php 
 
include("ayar.php");
ob_start();
session_start();

//KAYIT GÜNCELLEME


$post_id = $_POST['post_id']; 
$post_baslik = $_POST['post_baslik'];
$post_konu = $_POST['post_konu'];
$post = $_POST['post'];
$tarih = $_POST['tarih'];


$sql = "update postlar set post_baslik ='$post_baslik', post_konu='$post_konu', post='$post' where post_id = $post_id ";
$kayit = mysql_query($sql);

if (isset ($kayit)){ 
echo "Kayıt Güncellendi!";
 header("Location:kayit-guncelle.php");
}
else {
echo "Kayıt Başarısız mehmetgungor02@outlook.com adresinden iletişime geçin";
}
 
ob_end_flush();

?>