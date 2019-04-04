<?php

class Comptoir extends ANR_Controller {

    protected $_css = array("comptoircomm.css","comptoirfonte.css");
    protected $_js = array('comptoirfonte.js','comptoircomm.js');

    protected $page_title = "Gestion de comptoir commerciale";

    protected $_folder = "comptoir/";
    protected $_models = array('Comptoir_model');

    


    public function comptoir_commerciale() {
        $comptoircomms= $this->Comptoir_model->get_comptoir_commerciale();
        $this->loadData('comptoircomms',$comptoircomms);
        $this -> loadPage('accueil_comptoircomm');

    }
    public function comptoir_de_fonte() {
        $comptoirfontes= $this->Comptoir_model->get_comptoir_de_fonte();
        $this->loadData('comptoirfontes',$comptoirfontes);
        $this -> loadPage('accueil_comptoirfonte');
        
    }     
  
    public function index() {
        
    }

    public function Enregistrer_comptoircomm() {
        if($_POST) {
            extract($_POST);
            $info_comptoircomm = array('NomSocieteComptoirComm' => $NomSocieteComptoirComm,
                                
                                'MandataireComptoirComm' => $MandataireComptoirComm,
                                'ContactComptoirComm' => $ContactComptoirComm,
                                'AdresseSiegeSocialeComptoirComm' => $AdresseSiegeSocialeComptoirComm,
                                'NumInscriptionComptoirComm' => $NumInscriptionComptoirComm,
                                'DateAgrementComptoirComm' => $DateAgrementComptoirComm);
                                

            $res = $this -> Comptoir_model -> save_comptoircomm($info_comptoircomm, $IDComptoirComm ? $IDComptoirComm : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_comptoircomm($id_comptoircomm) {
        $res = $this -> Comptoir_model -> delete_comptoircomm($id_comptoircomm);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
    public function Enregistrer_comptoirfonte() {
        if($_POST) {
            extract($_POST);
            $info_comptoirfonte = array('NomSocieteComptoirDeFonte' => $NomSocieteComptoirDeFonte,
                                
                                'MandataireComptoirDeFonte' => $MandataireComptoirDeFonte,
                                'ContactComptoirDeFonte' => $ContactComptoirDeFonte,
                                'AdresseSiegeSocialeComptoirDeFonte' => $AdresseSiegeSocialeComptoirDeFonte,
                                'NumInscriptionComptoirDeFonte' => $NumInscriptionComptoirDeFonte,
                                'DateAgrementComptoirDeFonte' => $DateAgrementComptoirDeFonte);
                                

            $res = $this -> Comptoir_model -> save_comptoirfonte($info_comptoirfonte, $IDComptoirDeFonte ? $IDComptoirDeFonte : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_comptoirfonte($id_comptoirfonte) {
        $res = $this -> Comptoir_model -> delete_comptoirfonte($id_comptoirfonte);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }


}
