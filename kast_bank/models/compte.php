<?php
    //Petit script pour se connecter a la base de donnees
    define('DB_SERVER','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','kast_bank');
    $bdd=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
?>
<?php
class Compte{
    private $num_compte;
    private $date_creation;
    private $etat;
    private $Numclient;
    private $solde;
    private $type_cpt;



    function __construct($num_compte, $date_creation, $etat, $Numclient, $solde, $type_cpt) {
    	$this->num_compte = $num_compte;
    	$this->date_creation = $date_creation;
    	$this->etat = $etat;
    	$this->Numclient = $Numclient;
    	$this->solde = $solde;
    	$this->type_cpt = $type_cpt;

    }

    public function enregistrer_compte(){
        global $db;
        $resultat = false;
        $num_compte = $this->num_compte;
        $date_creation = $this->date_creation;
        $etat = $this->etat;
        $Numclient = $this->Numclient;
        $solde = $this->solde;
        $type_cpt = $this->type_cpt;
        $requete = "INSERT INTO comptes(num_compte,date_creation, etat, num_client,solde, type_compte) VALUES (:num_compte,:date_creation,:etat, :Numclient,:solde,:type_cpt)";

        $stement = $db->prepare($requete);
        $execution = $stement->execute([
            ':num_compte' => $num_compte,
            ':date_creation' => $date_creation,
            ':etat' => $etat,
            ':Numclient' => $Numclient,
            ':solde' => $solde,
            ':type_cpt' => $type_cpt
        ]);

        if($execution){
            $resultat = true;
        }
        return $resultat;
    }

    static function getComptes(){
        global $db;
        $requete = 'SELECT * FROM comptes WHERE 1';
        $stement = $db->prepare($requete);
        $execution = $stement->execute([]);
        $comptes = [];
        if ($execution) {
            while ($data = $stement -> fetch()) {
                $compte = new Compte ($data['num_compte'], $data['date_creation'], $data['etat'], $data['num_client'], $data['solde'], $data['type_compte']);
                array_push($comptes, $compte);
            }
            return $comptes;
        } else return [];
    }

    static function getComptesNonBloques(){
        global $db;
        $requete = 'SELECT * FROM comptes WHERE `etat` = "En Cours"';
        $stement = $db->prepare($requete);
        $execution = $stement->execute([]);
        $comptes = [];
        if ($execution) {
            while ($data = $stement -> fetch()) {
                $compte = new Compte ($data['num_compte'], $data['date_creation'], $data['etat'], $data['num_client'], $data['solde'], $data['type_compte']);
                array_push($comptes, $compte);
            }
            return $comptes;
        } else return [];
    }

    static function getComptesBloques(){
        global $db;
        $requete = 'SELECT * FROM comptes WHERE `etat` = "Bloque"';
        $stement = $db->prepare($requete);
        $execution = $stement->execute([]);
        $comptes = [];
        if ($execution) {
            while ($data = $stement -> fetch()) {
                $compte = new Compte ($data['num_compte'], $data['date_creation'], $data['etat'], $data['num_client'], $data['solde'], $data['type_compte']);
                array_push($comptes, $compte);
            }
            return $comptes;
        } else return [];
    }

    public function getNomClientCompte(){
        global $db;
        $requete = 'SELECT nom_client FROM clients JOIN comptes ON clients.num_client=:num_client';
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

    public function getPrenomClientCompte(){
        global $db;
        $requete = 'SELECT prenom_client FROM clients JOIN comptes ON clients.num_client=:num_client';
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

    public function getNum_compte() {
    	return $this->num_compte;
    }

    public function getDate_creation() {
    	return $this->date_creation;
    }

    public function getEtat() {
    	return $this->etat;
    }

    public function getNumclient() {
    	return $this->Numclient;
    }

    public function getSolde() {
    	return $this->solde;
    }

    public function getType_cpt() {
    	return $this->type_cpt;
    }
}
