<?php

include_once "../../config.php";

class Artiste {
    // Attributs
    private $idartiste;
    private $nom;
    private $prenom;
    private $biographie;
    private $specialite;

    public function __construct() {}

    
    public function setValues($nom, $prenom, $biographie, $specialite) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->biographie = $biographie;
        $this->specialite = $specialite;
    }

    public function getIdArtiste() {
        return $this->idartiste;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getBiographie() {
        return $this->biographie;
    }

    public function setBiographie($biographie) {
        $this->biographie = $biographie;
    }

    public function getSpecialite() {
        return $this->specialite;
    }

    public function setSpecialite($specialite) {
        $this->specialite = $specialite;
    }

    public function save() {
        try {
            $db = $GLOBALS['db'];

            
            $query = "INSERT INTO artistes (nom, prenom, biographie, specialite) VALUES (?, ?, ?, ?)";

            
            $statement = $db->prepare($query);

            
            $statement->bindParam(1, $this->nom);
            $statement->bindParam(2, $this->prenom);
            $statement->bindParam(3, $this->biographie);
            $statement->bindParam(4, $this->specialite);

            
            $result = $statement->execute();

            
            $db = null;

            return $result;
        } catch (PDOException $e) {
            
            echo "Erreur de base de données : " . $e->getMessage();
            return false;
        }
    }
}
?>
