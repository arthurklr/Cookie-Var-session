<?php
session_start();

if (isset($_SESSION)) {
    session_destroy();
    setcookie(session_name(), '', 1, '/');
    echo "La session a été fermée";
} else {
    echo "Aucune session active à fermer";
}
?>



<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Page 4</title>
</head>

<body>
  <a href="page1.php" title="Lien vers page1.php">Lien vers page1</a>
  <a href="page2.php" title="Lien vers page2.php">Lien vers page2</a>
  <a href="page4.php" title="Lien vers page4.php">Lien vers page4</a>
</body>

</html>