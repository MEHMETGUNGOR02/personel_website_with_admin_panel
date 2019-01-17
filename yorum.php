<?php 
 include("ayar.php");


$yorum_ad = $_POST['yorum_ad'];
$yorum_soyad = $_POST['yorum_soyad'];
$yorum = $_POST['yorum'];
$tarih = $_POST['tarih'];

 
$sql = ("insert into yorumlar (yorum_ad, yorum_soyad, yorum, tarih) values ('$yorum_ad', '$yorum_soyad','$yorum', '$tarih')");
$kayit = mysql_query($sql);

if (isset ($kayit)){
echo "Yorumunuz Başarıyla Kaydedilmiştir.";
   header("Location:ziyaretci-defteri.php");
}
else {
echo "Kayıt Başarısız mehmetgungor02@outlook.com adresinden iletişime geçin";
}

?>
