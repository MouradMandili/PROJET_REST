<?php
class Resto{
    private $name;
    private $address;
    private $image;
    private $type;
    private $description;

    public function __construct($name, $address, $image, $type, $description){
        $this->name = $name;
        $this->address = $address;
        $this->image = $image;
        $this->type = $type;
        $this->description = $description;
    }

    public function getName(){
        return $this->name;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getImage(){
        return $this->image;
    }

    public function getType(){
        return $this->type;
    }

    public function getDescription(){
        return $this->description;
    }

    //Ajouter un restaurant
    public function envoiDonnees(){
        require_once 'DAO.php';
    
        $db = DAO::connect();
        $requete = "INSERT INTO Restos (resto_name, resto_address, resto_image, resto_type, resto_description) VALUES (:resto_name, :resto_address, :resto_image, :resto_type, :resto_description)";
        $maRequet = $db->prepare($requete);
        $maRequet->bindParam(':resto_name', $this->getName());
        $maRequet->bindParam(':resto_address', $this->getAddress());
        $maRequet->bindParam(':resto_image', $this->getImage());
        $maRequet->bindParam(':resto_type', $this->getType());
        $maRequet->bindParam(':resto_description', $this->getDescription());
        $maRequet->execute();

        DAO::disconnect();
    }

    //Afficher la liste des restaurants
    public function recupDonnees(){
        require_once 'DAO.php';
        
        $db = DAO::connect();
        
        $requete = "SELECT * FROM Restos";

        $maRequet = $db->prepare($requete);

        $maRequet->execute();

        $maRequet->setFetchMode(PDO::FETCH_CLASS, "Resto");

        $resto = $maRequet->fetchAll();

        return $resto;

        DAO::disconnect();
    }

    //Afficher un restaurant precis
    public function voirResto(){
        require_once 'DAO.php';
        
        $db = DAO::connect();
        
        $requete = "SELECT * FROM Restos WHERE id_resto= :id";

        $maRequet = $db->prepare($requete);

        $maRequet->execute(id => $_GET['id']);

        $maRequet->setFetchMode(PDO::FETCH_CLASS, "Resto");

        $resto = $maRequet->fetch();

        return $resto;

        DAO::disconnect();
    }

}

?>