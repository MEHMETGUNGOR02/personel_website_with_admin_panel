<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="ziyaretci.css">
</head>
<body background="images/duvar.jpg">

<h2>Mehmet GÜNGÖR</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Giriş</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="admin-giris-islemi.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Kullanıcı Adı:</b></label>
      <input type="text" name="kadi" placeholder="Kullanıcı Adı">

      <label for="psw"><b>Şifre:</b></label>
      <input type="password" name="sifre" placeholder="Şifre">
        
      <button type="submit">Giriş</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Beni Hatırla!
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="admin-kaydol.php">Kaydol</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
