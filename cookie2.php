<?php
if (isset($_COOKIE["visite"]))
  setcookie('visite', ++$_COOKIE["visite"], time() + 3600);
else
  setcookie("visite", 1, time() + 365 * 24 * 3600);
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Cookie</title>
</head>

<body>
  <p>
    Bonjour, votre prénom est : <?= $_COOKIE['prenom'] ?><br>
    Pays : <?= $_COOKIE['pays'] ?><br>

    <?php
    if (isset($_COOKIE['visite'])) {
      echo "merci pour votre " . $_COOKIE["visite"] . "<sup>ème</sup> visite !";
    } else {
      echo "merci pour votre première visite";
    }
    ?>
  </p>
  <a href="cookie1.php">Vers cookie1</a>
</body>

</html>