<?php

class Commune extends ANR_Controller {

    protected $_css = array("commune.css");
    protected $_js = array('commune.js');
     
    protected $page_title = "commune";

    protected $_folder = "commune/";
    protected $_models = array('Commune_Model');
    
    public function index() {
        $regions=$this->Commune_Model->get_region();
        $communes=$this->Commune_Model->get_communes();
        $this->loadData('regions',$regions);
        $this->loadData('communes',$communes);
        $this -> loadPage('accueil');
 
    }

    public function enregistrer_commune() {
        if($_POST) {
            extract($_POST);
            $info_commune = array('IDRegion'=>$IDRegion,
                                'NomCommune' => $NomCommune, 
                                'NomMaire' => $NomMaire,
                                'PrenomMaire' => $PrenomMaire,
                                'ContactMaire' => $ContactMaire);

            $res = $this -> Commune_Model ->save($info_commune, $IDCommune ? $IDCommune : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

     public function supprimer_commune($id_commune) {
        $res = $this -> Commune_Model ->delete($id_commune);
        if($res) {
            echo json_encode(array("status" => 1 ));
        } else{
            echo json_encode(array("status" => 0 ));
        }
    }
}

