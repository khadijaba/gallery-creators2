<?php
include '../../controller/artisteC.php';
include '../../modele/artiste.php';

// Créer un artiste
$artiste = null;

// Créer une instance du contrôleur
$artistesC = new ArtistesC();

// Vérifier si le formulaire a été soumis
if (isset($_POST["submit"])) {
    // Vérifier la présence des champs requis
    if (
        isset($_POST["idartiste"]) &&
        isset($_POST["nom"]) &&
        isset($_POST["prenom"]) &&
        isset($_POST["biographie"]) &&
        isset($_POST["specialite"])
    ) {
        // Vérifier que les champs requis ne sont pas vides
        if (
            !empty($_POST['idartiste']) &&
            !empty($_POST["nom"]) &&
            !empty($_POST["prenom"]) &&
            !empty($_POST["biographie"]) &&
            !empty($_POST["specialite"])
        ) {
            // Utiliser les noms de paramètres corrects lors de la création de l'objet Artiste
            $artiste = new Artiste();
            $artiste->setValues(
                $_POST['idartiste'],
                $_POST['nom'],
                $_POST['prenom'],
                $_POST['biographie'],
                $_POST['specialite']
            );

            // Mettre à jour l'artiste dans la base de données
            $artistesC->updateArtiste($artiste, $_POST['idartiste']);

            // Rediriger vers la liste des artistes après la mise à jour
            header('Location: liste_artistes.php');
        }
    }
}

// Récupérer les données de l'artiste à partir de la base de données
if (isset($_GET['idartiste'])) {
    $oldArtiste = $artistesC->showArtiste($_GET['idartiste']);
} else {
    // Gérer le cas où l'ID de l'artiste n'est pas défini
    echo "ID de l'artiste non spécifié.";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Artiste</title>
</head>

<body>
    <button><a href="liste_artistes.php">Retour à la liste</a></button>
    <hr>

    <form action="" method="POST">
        <input type="hidden" name="idartiste" value="<?php echo $_GET['idartiste']; ?>">
        <table>
            <tr>
                <td><label for="nom">Nom :</label></td>
                <td><input type="text" id="nom" name="nom" value="<?php echo isset($_POST['nom']) ? $_POST['nom'] : $oldArtiste['nom']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="prenom">Prénom :</label></td>
                <td><input type="text" id="prenom" name="prenom" value="<?php echo isset($_POST['prenom']) ? $_POST['prenom'] : $oldArtiste['prenom']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="biographie">Biographie :</label></td>
                <td><input type="text" id="biographie" name="biographie" value="<?php echo isset($_POST['biographie']) ? $_POST['biographie'] : $oldArtiste['biographie']; ?>" /></td>
            </tr>
            <tr>
                <td><label for="specialite">Spécialité :</label></td>
                <td><input type="text" id="specialite" name="specialite" value="<?php echo isset($_POST['specialite']) ? $_POST['specialite'] : $oldArtiste['specialite']; ?>" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Save"></td>
            </tr>
        </table>
    </form>
</body>

</html>
