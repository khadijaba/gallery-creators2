<?php
require '../../config.php';

class ArtistesC {
    public function listArtistes() {
        $sql = "SELECT * FROM artistes";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteArtiste($id) {
        $sql = "DELETE FROM artistes WHERE idartiste = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addArtiste(Artiste $artiste) {
        $sql = "INSERT INTO artistes  
        VALUES (
            NULL, 
            :nom,
            :prenom,
            :biographie,
            :specialite
        )";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $artiste->getNom(),
                'prenom' => $artiste->getPrenom(),
                'biographie' => $artiste->getBiographie(),
                'specialite' => $artiste->getSpecialite(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function showArtiste($id) {
        $sql = "SELECT * FROM artistes WHERE idartiste = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $artiste = $query->fetch();
            return $artiste;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateArtiste($artiste, $id) {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE artistes SET 
                    nom = :nom, 
                    prenom = :prenom, 
                    biographie = :biographie, 
                    specialite = :specialite
                WHERE idartiste = :idartiste'
            );

            $query->execute([
                'idartiste' => $id,
                'nom' => $artiste->getNom(),
                'prenom' => $artiste->getPrenom(),
                'biographie' => $artiste->getBiographie(),
                'specialite' => $artiste->getSpecialite(),
            ]);

            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
?>
