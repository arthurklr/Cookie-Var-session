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
    var_dump($_COOKIE['visite']);
    if (isset($_COOKIE['visite'])) {
      $v = $_COOKIE['visite'];
      $visite = $v+1;
      setcookie('visite','',time() + 3600,'/');
      setcookie('visite',"$visite");
    } else{
      $v = "<p>Premiere visite</p>";
    }
    ?>
    Nombre de visite : <?=$v?> <br>
  </p>
  <a href="cookie1.php">Vers cookie1</a>
</body>

</html>