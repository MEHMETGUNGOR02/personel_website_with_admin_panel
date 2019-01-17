<?php 
 
include("ayar.php");
ob_start();
session_start();
//KAYIT SİLME
$id = $_POST['id'];

$sql = "delete from ckeditor where id = '$id'";
$kayit = mysql_query($sql);

if (isset ($kayit)){
echo "Kayıt Silindi!";
   header("Location:kullanici-panel-postu-gosterme.php");
}
else {
echo "Kayıt Başarısız mehmetgungor02@outlook.com adresinden iletişime geçin";
}
 
ob_end_flush();
?>