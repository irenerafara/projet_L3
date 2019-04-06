<?php

class Formation extends ANR_Controller {
    
    protected $_css = array("formation.css");
    protected $_js = array('formation.js');

    protected $page_title = "formation";

    protected $_folder = "formation/";
    protected $_models = array('Formation_model');

    public function index() {
        $communes = $this->Formation_model->get_communes();
        $formations = $this->Formation_model->get_formations();
        $this->loadData('formations',$formations);
        $this->loadData('communes',$communes);
        $this -> loadPage('accueil');

    }
    public function enregistrer_formation() {
        if($_POST) {
            extract($_POST);
            $info_formation = array('IDCommune' => $IDCommune,
                                'DateDebutFormation' => $DateDebutFormation,
                                'DateFinFormation' => $DateFinFormation,
                                'MotifMissionFormation' => $MotifMissionFormation,
                                'DetailFormation' => $DetailFormation);
            $res = $this -> Formation_model -> save($info_formation, $IDFormation ? $IDFormation : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_formation($id_formation) {
        $res = $this -> Formation_model -> delete($id_formation);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }

    public function load_detailsformation($id_formation) {
        $this -> loadPageAjax('details');
    }
}
