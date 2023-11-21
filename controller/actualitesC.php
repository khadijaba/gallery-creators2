<?php

require '../../config.php';

class ActualitesC {
    public function listActualites() {
        $sql = "SELECT * FROM actualites";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteActualite($id) {
        $sql = "DELETE FROM actualites WHERE idactualite = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addActualite(Actualites $actualite) {
        $sql = "INSERT INTO actualites  
        VALUES (
            NULL, 
            :titre,
            :contenu,
            :source,
            :datepublication
        )";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'titre' => $actualite->getTitre(),
                'contenu' => $actualite->getContenu(),
                'source' => $actualite->getSource(),
                'datepublication' => $actualite->getDatePublication(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function showActualite($id) {
        $sql = "SELECT * FROM actualites WHERE idactualite = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $actualite = $query->fetch();
            return $actualite;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateActualite($actualite, $id) {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE actualites SET 
                    titre = :titre, 
                    contenu = :contenu, 
                    source = :source, 
                    datepublication = :datepublication
                WHERE idactualite = :idactualite'
            );

            $query->execute([
                'idactualite' => $id,
                'titre' => $actualite->getTitre(),
                'contenu' => $actualite->getContenu(),
                'source' => $actualite->getSource(),
                'datepublication' => $actualite->getDatePublication(),
            ]);

            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
?>
