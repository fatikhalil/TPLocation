<?php
include_once './dao/IDao.php';
include_once './connexion/Connexion.php';
class PositionService implements IDao {
    private $connexion;

    public function __construct() {
        $this->connexion = new Connexion();
    }

    // Méthode pour insérer une nouvelle position
    public function create($position) {
        $query = "INSERT INTO position (latitude, longitude, date, device_id) VALUES (:latitude, :longitude, :date, :device_id)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute([
            'latitude' => $position->getLatitude(),
            'longitude' => $position->getLongitude(),
            'date' => $position->getDate(),
            'device_id' => $position->getDevice()
        ]);
    }

    // Méthode pour supprimer une position par ID
    public function delete($id) {
        $query = "DELETE FROM position WHERE id = :id";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(['id' => $id]);
    }

    // Méthode pour récupérer une position par ID
    public function getById($id) {
        $query = "SELECT * FROM position WHERE id = :id";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(['id' => $id]);
        return $req->fetch(PDO::FETCH_ASSOC);
    }

    // Méthode pour récupérer toutes les positions
 public function getAll() {
    $query = "SELECT * FROM position";
    $req = $this->connexion->getConnexion()->prepare($query); // Correction ici
    $req->execute();
    return $req->fetchAll(PDO::FETCH_ASSOC);
}


 

    // Méthode pour mettre à jour une position par ID
    public function update($position) {
        $query = "UPDATE position SET latitude = :latitude, longitude = :longitude, date = :date, imei = :imei WHERE id = :id";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute([
            'latitude' => $position->getLatitude(),
            'longitude' => $position->getLongitude(),
            'date' => $position->getDate(),
            'device_id' => $position->getDevice(),
            'id' => $position->getId()
        ]);
    }
}
?>
