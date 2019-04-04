<?php

class Carte extends ANR_Controller {

    protected $_css = array("carte.css");
    protected $_js = array('carte.js');
     
    protected $page_title = "information carte";

    protected $_folder = "carte/";
    protected $_models = array('Carte_model');

    public function index() {
        $communes= $this->Carte_model->get_commune();
        $cartes= $this->Carte_model->get_cartes();
        $this->loadData('communes',$communes);
        $this->loadData('cartes',$cartes);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_carte() {
        if($_POST) {
            extract($_POST);
            $info_carte = array('IDCommune' => $IDCommune,
                                'NumCarte' => $NumCarte,
                                'DateDemandeCarte' => $DateDemandeCarte,
                                'DateObtentionCarte' => $DateObtentionCarte,
                                'DateExpirationCarte' => $DateExpirationCarte,
                                'Statut' => $Statut,
                                
                            );
            $res = $this -> Carte_Model -> save($info_carte, $IDCarte ? $IDCarte : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_carte($id_carte) {
        $res = $this -> Carte_model -> delete($id_carte);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
