<?php
include '../../controller/actualitesC.php';

$actualitesC = new ActualitesC();
$actualitesC->deleteActualite($_GET["idactualite"]);
header('Location: liste_actualites.php');
?>
