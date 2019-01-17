<?php 
 
include("ayar.php");
ob_start();
session_start();
 
$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];
 
$sql = ("insert into uyeler (username, password) values ('$kadi','$sifre')");
$kayit = mysql_query($sql);

if (isset ($kayit)){
echo "Üye Kaydınız Yapılmıştır";
    header("Location:kullanicilar.php");
}
else {
echo "Kayıt Başarısız mehmetgungor02@outlook.com adresinden iletişime geçin";
}
ob_end_flush();
?>