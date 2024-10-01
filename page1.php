<?php
session_start();
$_SESSION['prenom'] = 'Luc';
$_SESSION['nom'] = 'Dupond';
$_SESSION['age'] = 25;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Page 1</title>
</head>

<body>
  <?= 'Identifiant de session  : ' . session_id() ?>
  <p>
    Bonjour
  </p>
  <p><?= 'Le pays est : ' . $_SESSION['pays'] ?></p>
  <a href="page2.php" title="Lien vers page2.php">Lien vers page2</a>
  <a href="page3.php" title="Lien vers page3.php">Lien vers page3</a>
  <a href="page4.php" title="Lien vers page4.php">Lien vers page4</a>
</body>

</html>