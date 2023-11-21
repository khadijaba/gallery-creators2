<?php
include  "../../controller/artisteC.php"; 

$c = new ArtistesC(); 
$tab = $c->listArtistes(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="style2.css." />

    <title>Liste des Artistes</title>
</head>

<body>
    <div class="container mt-5 center-content">
        <h1 class="text-center">Liste des Artistes</h1>
        <h2 class="text-center">
            <a href="add_artiste.php" class="btn btn-primary">Ajouter un Artiste</a>
        </h2>

        <table class="table custom-table">
            <thead class="thead-dark">
                <tr>
                    <th>Id Artiste</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Biographie</th>
                    <th>Spécialité</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($tab as $artiste) : ?>
                    <tr>
                        <td><?= $artiste['idartiste']; ?></td>
                        <td><?= $artiste['nom']; ?></td>
                        <td><?= $artiste['prenom']; ?></td>
                        <td><?= $artiste['biographie']; ?></td>
                        <td><?= $artiste['specialite']; ?></td>
                        <td>
                            <a href="update_artiste.php?idartiste=<?= $artiste['idartiste']; ?>"
                                class="btn btn-primary custom-link">Update</a>
                        </td>
                        <td>
                            <a href="delete_artiste.php?idartiste=<?= $artiste['idartiste']; ?>"
                                class="btn btn-primary custom-link">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap scripts (jQuery and Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
