<?php
  include ("template/header.php")
 ?>



<form action="connexion.php" method="post">
    Pseudo: <input type="text" name="user" value="" />

    Password<input type="password" name="psw" value="connect" />

    <input type="submit" name="connexion" class="btn decxbtn mt-5" value="connect" /><br>
</form><br>

<div class="login">
<a href="index.php" class="btn decxbtn mt-5">deconnexion</a>

</div>

<?php
  if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))

 {

echo '<a href="deconnexion.php" target="_blank"> <input type="button"  class="btn" value="Déconnexion'.$_SESSION['pseudo'].'"> </a>';

  }

  include ("template/footer.php");
 ?>
