<?php
session_start();
$_SESSION['pays'] = 'France';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Page 2</title>
</head>

<body>
  <?= 'Identifiant de session :' . session_id() ?>
  <p>
    Re-bonjour <?= $_SESSION['prenom'] . ' ' . $_SESSION['nom'] ?><br>
    Vous avez : <?= $_SESSION['age'] ?> ans.
  </p>
  <a href="page1.php" title="Lien vers page1.php">Lien vers page1</a>
  <a href="page3.php" title="Lien vers page3.php">Lien vers page3</a>
  <a href="page4.php" title="Lien vers page4.php">Lien vers page4</a>
</body>

</html>