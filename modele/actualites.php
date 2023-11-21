<?php

include_once "../../config.php";

class Actualites {
    // Attributs
    private $idactualite;
    private $titre;
    private $contenu;
    private $source;
    private $datepublication;

    // Constructeur sans paramètres
    public function __construct() {}

    // Méthode pour définir les valeurs des attributs
    public function setValues($titre, $contenu, $source, $datepublication) {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->source = $source;
        $this->datepublication = $datepublication;
    }

    // Getter et setter pour chaque attribut

    public function getIdActualite() {
        return $this->idactualite;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getContenu() {
        return $this->contenu;
    }

    public function setContenu($contenu) {
        $this->contenu = $contenu;
    }

    public function getSource() {
        return $this->source;
    }

    public function setSource($source) {
        $this->source = $source;
    }

    public function getDatePublication() {
        return $this->datepublication;
    }

    public function setDatePublication($datepublication) {
        $this->datepublication = $datepublication;
    }

    public function save() {
        try {
            $db = $GLOBALS['db'];

            // Préparer la requête SQL
            $query = "INSERT INTO actualites (titre, contenu, source, datepublication) VALUES (?, ?, ?, ?)";

            // Préparer la déclaration SQL
            $statement = $db->prepare($query);

            // Lier les valeurs
            $statement->bindParam(1, $this->titre);
            $statement->bindParam(2, $this->contenu);
            $statement->bindParam(3, $this->source);
            $statement->bindParam(4, $this->datepublication);

            // Exécuter la requête
            $result = $statement->execute();

            // Fermer la connexion à la base de données
            $db = null;

            return $result;
        } catch (PDOException $e) {
            // Gérer les erreurs de base de données
            echo "Erreur de base de données : " . $e->getMessage();
            return false;
        }
    }
}
?>
