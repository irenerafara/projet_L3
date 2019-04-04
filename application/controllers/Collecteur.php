<?php

class Collecteur extends ANR_Controller {

    protected $_css = array("collecteur1.css");
    protected $_js = array('collecteur1.js','collecteur2.js');

    protected $page_title = "Gestion de collecteur";

    protected $_folder = "collecteur/";
    protected $_models = array('Collecteur_model');
    
    public function collecteur_cat1() { 
        $collecteurcat1s= $this->Collecteur_model-> get_collecteur_cat1();
        $this->loadData('collecteurcat1s',$collecteurcat1s);
        $this -> loadPage('accueil_collecteurcat1');
     
    }
    public function collecteur_cat2() {
        $collecteurcat2s= $this->Collecteur_model->get_collecteur_cat2();
        $this->loadData('collecteurcat2s',$collecteurcat2s);
        $this -> loadPage('accueil_collecteurcat2');
    }    
   

    public function index() {
       
    }

    public function Enregistrer_collecteur_cat1() {
        if($_POST) {
            extract($_POST);
            $info_collecteurcat1 = array('NomCollecteurCat1' => $NomCollecteurCat1,
                                
                                'PrenomCollecteurCat1' => $PrenomCollecteurCat1,
                                'CINCollecteurCat1' => $CINCollecteurCat1,
                                'LieuCINCollecteurCat1' => $LieuCINCollecteurCat1,
                                'DateCINCollecteurCat1' => $DateCINCollecteurCat1,
                                'DuplicataCINCollecteurCat1' => $DuplicataCINCollecteurCat1,
                                'ContactCollecteurCat1' => $ContactCollecteurCat1,
                                'AdresseCollecteurCat1' => $AdresseCollecteurCat1);
                                

            $res = $this -> Collecteur_model -> save_collecteurcat1($info_collecteurcat1, $IDCollecteurCat1 ? $IDCollecteurCat1 : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_collecteur_cat1($id_collecteurcat1) {
        $res = $this -> Collecteur_model -> delete_collecteurcat1($id_collecteurcat1);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }

    public function Enregistrer_collecteur_cat2() {
        if($_POST) {
            extract($_POST);
            $info_collecteurcat2 = array('NomCollecteurCat2' => $NomCollecteurCat2,
                                
                                'PrenomCollecteurCat2' => $PrenomCollecteurCat2,
                                'CINCollecteurCat2' => $CINCollecteurCat2,
                                'LieuCINCollecteurCat2' => $LieuCINCollecteurCat2,
                                'DateCINCollecteurCat2' => $DateCINCollecteurCat2,
                                'DuplicataCINCollecteurCat2' => $DuplicataCINCollecteurCat2,
                                'ContactCollecteurCat2' => $ContactCollecteurCat2,
                                'AdresseCollecteurCat2' => $AdresseCollecteurCat2);
                                

            $res = $this -> Collecteur_model -> save_collecteurcat2($info_collecteurcat2, $IDCollecteurCat2 ? $IDCollecteurCat2 : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_collecteur_cat2($id_collecteurcat2) {
        $res = $this -> Collecteur_model -> delete_collecteurcat2($id_collecteurcat2);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }


}
