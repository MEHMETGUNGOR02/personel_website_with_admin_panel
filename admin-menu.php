<!DOCTYPE html>
<html lang="tr">
<head>
  <title>Admin Sayfası</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="admin.css">
</head>
<body>
 <?php 
 
include("ayar.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
    echo "<center>Hoş Geldiniz SAYIN :     ".$_SESSION["user"]." ";
    echo "<a href=logout.php> &nbsp; Güvenli Çıkış</a></center>";
}

?>  <br/>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" target="_blank">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="admin.php">Anasayfa</a></li>
        <li class="active"><a href="postlarim.php">Postlarım</a></li>
        <li class="active"><a href="admin-kayit-sil.php">Post Sil</a></li>
        <li class="active"><a href="kayit-guncelle.php">Post Güncelle</a></li>
        <li class="active"><a href="admin-ziyaretci.php">Ziyaretçi Defteri</a></li>
        <li class="active"><a href="kullanici-panel-postu-gosterme.php">Kullanıcı Postları</a></li>
        <li class="active"><a href="kullanicilarim.php">Kullanıcılarım</a></li>
        <li class="active"><a href="adminler.php">Adminlerim</a></li>  
        <li class="active"><a href="admin-kaydol.php">Admin Ekle</a></li> 
        <li class="active"><a href="admin-iletisim.php">İletişim</a></li>        
         
        <li class="active"><a href="ayarlar.php">Ayarlar</a></li>        
             

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Çıkış</a></li>
      </ul>
    </div>
  </div>
</nav>
    
  
   
   
    
    <div class="col-sm-8 text-left">    
    
      
    
     </div>

      
    

  