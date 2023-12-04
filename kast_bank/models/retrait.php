<?php
    //Petit script pour se connecter a la base de donnees
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','kast_bank');
    $bdd=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
?>
<?php
class Retrait{
    private $num_retrait;
    private $date_retrait;
    private $montant;
    private $Numclient;
    private $Numcompte;

    function __construct($num_retrait, $date_retrait, $montant, $Numclient, $Numcompte) {
    	$this->num_retrait = $num_retrait;
    	$this->date_retrait = $date_retrait;
    	$this->montant = $montant;
    	$this->Numclient = $Numclient;
    	$this->Numcompte = $Numcompte;

    }

    public function enregistrer_retrait(){
        global $db;
        $resultat = false;
        $num_retrait = $this->num_retrait;
        $date_retrait = $this->date_retrait;
        $montant = $this->montant;
        $Numclient = $this->Numclient;
        $Numcompte = $this->Numcompte;
        $requete = "INSERT INTO retraits(num_retrait,date_retrait, montant, num_client,num_compte) VALUES (:num_retrait,:date_retrait,:montant, :Numclient,:Numcompte)";

        $stement = $db->prepare($requete);
        $execution = $stement->execute([
            ':num_retrait' => $num_retrait,
            ':date_retrait' => $date_retrait,
            ':montant' => $montant,
            ':Numclient' => $Numclient,
            ':Numcompte' => $Numcompte
        ]);

        if($execution){
            $resultat = true;
        }
        return $resultat;
    }

    static function getRetraits(){
        global $db;
        $requete = 'SELECT * FROM retraits WHERE 1';
        $stement = $db->prepare($requete);
        $execution = $stement->execute([]);
        $retraits = [];
        if ($execution) {
            while ($data = $stement -> fetch()) {
                $retrait = new retrait ($data['num_retrait'], $data['date_retrait'], $data['montant'], $data['num_client'], $data['num_compte']);
                array_push($retraits, $retrait);
            }
            return $retraits;
        } else return [];
    }

    public function getNomClientRetrait(){
        global $db;
        $requete = 'SELECT nom_client FROM clients JOIN retraits ON clients.num_client=:num_client';
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

    public function getPrenomClientRetrait(){
        global $db;
        $requete = 'SELECT prenom_client FROM clients JOIN retraits ON clients.num_client=:num_client';
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

    public function getTypeCptRetrait(){
        global $db;
        $requete = 'SELECT type_compte FROM comptes JOIN retraits ON comptes.num_compte=:num_compte';
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

    public function getSoldeCptRetrait(){
        global $db;
        $requete = 'SELECT solde FROM comptes JOIN retraits ON comptes.num_compte=:num_compte';
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

    public function getNum_retrait() {
    	return $this->num_retrait;
    }

    public function getDate_retrait() {
    	return $this->date_retrait;
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
