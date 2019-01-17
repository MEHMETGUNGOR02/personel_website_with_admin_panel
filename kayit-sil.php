<?php 
 
include("ayar.php");
ob_start();
session_start();
//KAYIT SİLME
$post_id = $_POST['post_id'];

$sql = "delete from admin where id = '$id'";
$kayit = mysql_query($sql);

if (isset ($kayit)){
echo "Kayıt Silindi!";
   header("Location:adminler.php");
}
else {
echo "Kayıt Başarısız mehmetgungor02@outlook.com adresinden iletişime geçin";
}
 
ob_end_flush();
?>