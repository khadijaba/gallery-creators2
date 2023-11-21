<?php
include '../../controller/actualitesC.php';
include '../../modele/actualites.php';

// Créer une actualité
$actualite = null;

// Créer une instance du contrôleur
$actualitesC = new ActualitesC();

// Vérifier si le formulaire a été soumis
if (isset($_POST["submit"])) {
    // Vérifier la présence des champs requis
    if (
        isset($_POST["idactualite"]) &&
        isset($_POST["titre"]) &&
        isset($_POST["contenu"]) &&
        isset($_POST["source"]) &&
        isset($_POST["datepublication"])
    ) {
        // Vérifier que les champs requis ne sont pas vides
        if (
            !empty($_POST['idactualite']) &&
            !empty($_POST["titre"]) &&
            !empty($_POST["contenu"]) &&
            !empty($_POST["source"]) &&
            !empty($_POST["datepublication"])
        ) {
            // Utiliser les noms de paramètres corrects lors de la création de l'objet Actualites
            $actualite = new Actualites();
            $actualite->setValues(
                $_POST['idactualite'],
                $_POST['titre'],
                $_POST['contenu'],
                $_POST['source'],
                $_POST['datepublication']
            );

            // Mettre à jour l'actualité dans la base de données
            $actualitesC->updateActualite($actualite, $_POST['idactualite']);

            // Rediriger vers la liste des actualités après la mise à jour
            header('Location: liste_actualites.php');
        }
    }
}

// Récupérer les données de l'actualité à partir de la base de données
if (isset($_GET['idactualite'])) {
    $oldActualite = $actualitesC->showActualite($_GET['idactualite']);
} else {
    // Gérer le cas où l'ID de l'actualité n'est pas défini
    echo "ID de l'actualité non spécifié.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Actualite</title>
</head>

<body>
    <button><a href="liste_actualites.php">Retour à la liste</a></button>
    <hr>

    <form action="" method="POST">
        <input type="hidden" name="idactualite" value="<?php echo $_GET['idactualite']; ?>">
        <table>
            <tr>
                <td><label for="titre">Titre :</label></td>
                <td><input type="text" id="titre" name="titre" value="<?php echo isset($_POST['titre']) ? $_POST['titre'] : $oldActualite['titre']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="contenu">Contenu :</label></td>
                <td><input type="text" id="contenu" name="contenu" value="<?php echo isset($_POST['contenu']) ? $_POST['contenu'] : $oldActualite['contenu']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="source">Source :</label></td>
                <td><input type="text" id="source" name="source" value="<?php echo isset($_POST['source']) ? $_POST['source'] : $oldActualite['source']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="datepublication">Date de Publication :</label></td>
                <td><input type="text" id="datepublication" name="datepublication" value="<?php echo isset($_POST['datepublication']) ? $_POST['datepublication'] : $oldActualite['datepublication']; ?>" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </form>
</body>

</html>
