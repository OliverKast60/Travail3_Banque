<?php
class Client{
    private $num_client;
    private $nom_client;
    private $prenom_client;
    private $sexe;
    private $adresse_client;
    private $code_poste;
    private $num_tel_client;
    private $date_naiss;
    private $e_mail_client;
    private $image_client;

    public function __construct($num_client, $nom_client, $prenom_client, $sexe, $adresse_client, $code_poste, $num_tel_client, $date_naiss, $e_mail_client, $image_client){
        $this->num_client = $num_client;
        $this->nom_client = $nom_client;
        $this->prenom_client = $prenom_client;
        $this->sexe = $sexe;
        $this->adresse_client = $adresse_client;
        $this->code_poste = $code_poste;
        $this->num_tel_client = $num_tel_client;
        $this->date_naiss = $date_naiss;
        $this->e_mail_client = $e_mail_client;
        $this->image_client = $image_client;
    }

    public function enregistrer_client(){
        global $db;
        $resultat = false;
        $num_client = $this->num_client;
        $nom_client = $this->nom_client;
        $prenom_client = $this->prenom_client;
        $sexe = $this->sexe;
        $adresse_client = $this->adresse_client;
        $code_poste = $this->code_poste;
        $num_tel_client = $this->num_tel_client;
        $date_naiss = $this->date_naiss;
        $e_mail_client = $this->e_mail_client;
        $image_client = $this->image_client;

        $requete = "INSERT INTO clients(num_client,nom_client, prenom_client, sexe, adresse_client, code_poste, num_tel_client, date_naiss, e_mail_client, image_client) VALUES (:num_client,:nom_client,:prenom_client, :sexe,:adresse_client, :code_poste, :num_tel_client, :date_naiss, :e_mail_client, :image_client)";

        $stement = $db->prepare($requete);
        $execution = $stement->execute([
            ':num_client' => $num_client,
            ':nom_client' => $nom_client,
            ':prenom_client' => $prenom_client,
            ':sexe' => $sexe,
            ':adresse_client' => $adresse_client,
            ':code_poste' => $code_poste,
            ':num_tel_client' => $num_tel_client,
            ':date_naiss' => $date_naiss,
            ':e_mail_client' => $e_mail_client,
            ':image_client' => $image_client
        ]);

        if($execution){
            $resultat = true;
        }
        return $resultat;
    }

    static function getClients(){
        global $db;
        $requete = 'SELECT * FROM clients WHERE 1';
        $stement = $db->prepare($requete);
        $execution = $stement->execute([]);
        $clients = [];
        if ($execution) {
            while ($data = $stement -> fetch()) {
                $client = new Client ($data['num_client'],$data['nom_client'], $data['prenom_client'], $data['sexe'], $data['adresse_client'], $data['code_poste'], $data['num_tel_client'],$data['date_naiss'], $data['e_mail_client'], $data['image_client']);
                array_push($clients, $client);
            }
            return $clients;
        } else return [];
    }

    public function getNom_client() {
    	return $this->nom_client;
    }

    public function getPrenom_client() {
    	return $this->prenom_client;
    }

    public function getSexe() {
    	return $this->sexe;
    }

    public function getAdresse_client() {
    	return $this->adresse_client;
    }

    public function getCode_poste() {
    	return $this->code_poste;
    }

    public function getNum_tel_client() {
    	return $this->num_tel_client;
    }

    public function getDate_naiss() {
    	return $this->date_naiss;
    }

    public function getE_mail_client() {
    	return $this->e_mail_client;
    }

    public function getImage_client() {
    	return $this->image_client;
    }

    public function getNum_client() {
    	return $this->num_client;
    }
}
