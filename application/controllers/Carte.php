<?php

class Carte extends ANR_Controller {

    protected $_css = array("carte.css");
    protected $_js = array('carte.js');
     
    protected $page_title = "information carte";

    protected $_folder = "carte/";
    protected $_models = array('Carte_Model');

    public function index() {
        $communes= $this -> Carte_Model -> get_commune();
        $collecteurcat1s= $this -> Carte_Model -> get_collecteurcat1();
        $collecteurcat2s= $this -> Carte_Model -> get_collecteurcat2();
        $comptoirfontes= $this -> Carte_Model -> get_comptoirfonte();
        $comptoircommerciales= $this -> Carte_Model -> get_comptoircommerciale();
        $orpailleurs= $this -> Carte_Model -> get_orpailleur();
        $cartes= $this -> Carte_Model -> get_cartes();
        $this->loadData('communes',$communes);
        $this->loadData('collecteurcat1s',$collecteurcat1s);
        $this->loadData('collecteurcat2s',$collecteurcat2s);
        $this->loadData('comptoirfontes',$comptoirfontes);
        $this->loadData('comptoircommerciales',$comptoircommerciales);
        $this->loadData('orpailleurs',$orpailleurs);
        $this->loadData('cartes',$cartes);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_carte() {
        if($_POST) {
            extract($_POST);
            $info_carte = array('IDCommune' => $IDCommune,
                                'IDCollecteurCat1'=> $IDCollecteurCat1,
                                'IDCollecteurCat2' => $IDCollecteurCat2,
                                'IDComptoirDeFonte'=> $IDComptoirDeFonte,
                                'IDComptoirCommerciale'=> $IDComptoirCommerciale,
                                'IDOrpailleur'=> $IDOrpailleur,
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
        $res = $this -> Carte_Model ->delete($id_carte);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
