<?php
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index - Rocket Launcher</title>
  </head>
  <body>
    <?php
    if (isset($_SESSION['flag'])) { ?>
      <button onclick="disconnectUser()" value="Deconnexion">Deconnexion</button>

  <?php   } else { ?>
    <a href="newConnexion.php">Connexion</a>
    <a href="newInscription.php">Inscription</a>
  <?php } ?>
  </body>
  <script src="functions.js"></script>
</html>
