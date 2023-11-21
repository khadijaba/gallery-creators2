<?php
include  "../../controller/actualitesC.php"; 

$c = new ActualitesC(); 
$tab = $c->listActualites(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />

    <title>Liste des Actualités</title>
</head>

<body>
    <div class="container mt-5 center-content">
        <h1 class="text-center">Liste des Actualités</h1>
        <h2 class="text-center">
            <a href="add_actualites.php" class="btn btn-primary">Ajouter une Actualité</a>
        </h2>

        <table class="table custom-table">
            <thead class="thead-dark">
                <tr>
                    <th>Id Actualité</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Source</th>
                    <th>Date de Publication</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($tab as $actualite) : ?>
                    <tr>
                        <td><?= $actualite['idactualite']; ?></td>
                        <td><?= $actualite['titre']; ?></td>
                        <td><?= $actualite['contenu']; ?></td>
                        <td><?= $actualite['source']; ?></td>
                        <td><?= $actualite['datepublication']; ?></td>
                        <td>
                            <a href="update_actualites.php?idactualite=<?= $actualite['idactualite']; ?>"
                                class="btn btn-primary custom-link">Update</a>
                        </td>
                        <td>
                            <a href="delete_actualites.php?idactualite=<?= $actualite['idactualite']; ?>"
                                class="btn btn-primary custom-link">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Inclure les scripts Bootstrap (jQuery et Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
