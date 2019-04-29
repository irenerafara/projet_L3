<?php

class Carte extends ANR_Controller {

    protected $_css = array("carte.css");
    protected $_js = array('carte.js');
     
    protected $page_title = "information carte";

    protected $_folder = "carte/";
    protected $_models = array('Carte_Model');

    public function index() {
        $communes= $this -> Carte_Model -> get_communes();
        $cartes= $this -> Carte_Model -> get_carte();
        $this->loadData('communes',$communes);
        $this->loadData('cartes',$cartes);
        $this -> loadPage('accueil');
    }
    public function load_collecteur_cat1($type) {
        $collecteurcat1s = $this -> Carte_Model ->get_collecteurcat1($type);
        $options_collecteurcat1s = "";
        foreach($collecteurcat1s as $col1) {
            $options_collecteurcat1s .= "<option value = '".$col1['id']."'>".$col1['nom_prenom']."</option>";
        }
        echo $options_collecteurcat1s;
    }

    public function Enregistrer_carte() {
        if($_POST) {
            extract($_POST);
            $info_carte = array('IDCommune' => $IDCommune,            
                                'NumCarte' => $NumCarte,
                                'DateDemandeCarte' => $DateDemandeCarte,
                                'DateObtentionCarte' => $DateObtentionCarte,
                                'DateExpirationCarte' => $DateExpirationCarte,
                                'StatutCarte' => $StatutCarte);
                                switch($TypeCollecteurCat1) {
                                    case 1: 
                                        $info_carte['IDOrpailleur'] = null;
                                        $info_carte['IDComptoirComm'] = null;
                                        $info_carte['IDComptoirDeFonte'] = null;
                                        $info_carte['IDCollecteurCat2'] = null;
                                        $info_carte['IDCollecteurCat1'] = $IDCollecteurCat1;
                                        
                                        break;
                                    case 2: 
                                    $info_carte['IDOrpailleur'] = null;
                                    $info_carte['IDComptoirComm'] = null;
                                    $info_carte['IDComptoirDeFonte'] = null;
                                    $info_carte['IDCollecteurCat1'] = null;
                                    $info_carte['IDCollecteurCat2'] = $IDCollecteurCat1;
                                   
                                        break;
                                    case 3: 
                                    $info_carte['IDOrpailleur'] = null;
                                    $info_carte['IDComptoirComm'] = null;
                                    $info_carte['IDCollecteurCat1'] = null;
                                    $info_carte['IDCollecteurCat2'] = null;
                                    $info_carte['IDComptoirDeFonte'] = $IDCollecteurCat1;
                                    
                                        break;
                                    case 4: 
                                    $info_carte['IDOrpailleur'] = null;
                                    $info_carte['IDCollecteurCat1'] = null;
                                    $info_carte['IDCollecteurCat2'] = null;
                                    $info_carte['IDComptoirDeFonte'] = null;
                                    $info_carte['IDComptoirComm'] = $IDCollecteurCat1;
                                    
                                        break;
                                    case 5: 
                                        $info_carte['IDCollecteurCat1'] = null;
                                        $info_carte['IDCollecteurCat2'] = null;
                                        $info_carte['IDComptoirDeFonte'] = null;
                                        $info_carte['IDComptoirComm'] = null;
                                        $info_carte['IDOrpailleur'] = $IDCollecteurCat1;
                                       
                                            break;
                                    
                                }
            $res = $this -> Carte_Model -> save_carte($info_carte, $IDCarte ? $IDCarte : null );
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
