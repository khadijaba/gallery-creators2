<?php
include '../../controller/artisteC.php';

$artistesC = new ArtistesC();
$artistesC->deleteArtiste($_GET["idartiste"]);
header('Location: liste_artistes.php');
?>
