<?php
    //Petit script pour se connecter a la base de donnees
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','kast_bank');
    $bdd=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
?>
<?php
class Depot{
    private $num_depot;
    private $date_depot;
    private $montant;
    private $Numclient;
    private $Numcompte;

    function __construct($num_depot, $date_depot, $montant, $Numclient, $Numcompte) {
    	$this->num_depot = $num_depot;
    	$this->date_depot = $date_depot;
    	$this->montant = $montant;
    	$this->Numclient = $Numclient;
    	$this->Numcompte = $Numcompte;

    }

    public function enregistrer_depot(){
        global $db;
        $resultat = false;
        $num_depot = $this->num_depot;
        $date_depot = $this->date_depot;
        $montant = $this->montant;
        $Numclient = $this->Numclient;
        $Numcompte = $this->Numcompte;
        $requete = "INSERT INTO depots(num_depot,date_depot, montant, num_client,num_compte) VALUES (:num_depot,:date_depot,:montant, :Numclient,:Numcompte)";

        $stement = $db->prepare($requete);
        $execution = $stement->execute([
            ':num_depot' => $num_depot,
            ':date_depot' => $date_depot,
            ':montant' => $montant,
            ':Numclient' => $Numclient,
            ':Numcompte' => $Numcompte
        ]);

        if($execution){
            $resultat = true;
        }
        return $resultat;
    }

    static function getDepots(){
        global $db;
        $requete = 'SELECT * FROM depots WHERE 1';
        $stement = $db->prepare($requete);
        $execution = $stement->execute([]);
        $depots = [];
        if ($execution) {
            while ($data = $stement -> fetch()) {
                $depot = new Depot ($data['num_depot'], $data['date_depot'], $data['montant'], $data['num_client'], $data['num_compte']);
                array_push($depots, $depot);
            }
            return $depots;
        } else return [];
    }

    public function getNomClientDepot(){
        global $db;
        $requete = 'SELECT nom_client FROM clients JOIN depots ON clients.num_client=:num_client';
        $stement = $db->prepare($requete);
        $execution = $stement->execute([
            ':num_client' => $this->getNumclient()
        ]);
        if ($execution){
            if ($data = $stement->fetch()){
                $nom_client = $data['nom_client'];
                return $nom_client;
            } else{
                return null;
            }
        } else{
            return null;
        }
    }

    public function getPrenomClientDepot(){
        global $db;
        $requete = 'SELECT prenom_client FROM clients JOIN depots ON clients.num_client=:num_client';
        $stement = $db->prepare($requete);
        $execution = $stement->execute([
            ':num_client' => $this->getNumclient()
        ]);
        if ($execution){
            if ($data = $stement->fetch()){
                $prenom_client = $data['prenom_client'];
                return $prenom_client;
            } else{
                return null;
            }
        } else{
            return null;
        }
    }

    public function getTypeCptDepot(){
        global $db;
        $requete = 'SELECT type_compte FROM comptes JOIN depots ON comptes.num_compte=:num_compte';
        $stement = $db->prepare($requete);
        $execution = $stement->execute([
            ':num_compte' => $this->getNumcompte()
        ]);
        if($execution){
            if ($data = $stement->fetch()) {
                $type_compte = $data['type_compte'];
                return $type_compte;
            } else {
                return null;
            }
        } else{
            return null;
        }
    }

    public function getSoldeCptDepot(){
        global $db;
        $requete = 'SELECT solde FROM comptes JOIN depots ON comptes.num_compte=:num_compte';
        $stement = $db->prepare($requete);
        $execution = $stement->execute([
            ':num_compte' => $this->getNumcompte()
        ]);
        if($execution){
            if ($data = $stement->fetch()) {
                $solde = $data['solde'];
                return $solde;
            } else {
                return null;
            }
        } else{
            return null;
        }
    }

    public function getNum_depot() {
    	return $this->num_depot;
    }

    public function getDate_depot() {
    	return $this->date_depot;
    }

    public function getMontant() {
    	return $this->montant;
    }

    public function getNumclient() {
    	return $this->Numclient;
    }

    public function getNumcompte() {
    	return $this->Numcompte;
    }
}
