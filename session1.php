<?php
session_start();
echo 'session_id : '.session_id().'<br>';
$_SESSION['nom']='Dupond';
echo $_SESSION['nom'].'<br>';
?>
<a href='session2.php'>Vers la page session2.php </a>