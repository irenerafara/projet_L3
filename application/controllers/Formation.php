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
        //assisttants
        $assistantsCc1 = $this->Formation_model->get_assistantsCollecteur($id_formation);
        $assistantsOrp = $this->Formation_model->get_assistantsOrpailleur($id_formation);
        $assistants = array_merge($assistantsCc1, $assistantsOrp);

        $orpailleurs = $this->Formation_model->get_orpailleurs($id_formation);
        $collecteurcat1s = $this->Formation_model->get_collecteurcat1s($id_formation);

        $utilisateurs = $this->Formation_model->get_utilisateurs($id_formation);
        $formateurs = $this->Formation_model->get_formateurs($id_formation);

        $details_formation = $this->Formation_model->get($id_formation);
        $this->loadData('details_formation', $details_formation);

        $this->loadData('utilisateurs', $utilisateurs);
        $this->loadData('collecteurcat1s', $collecteurcat1s);
        $this->loadData('orpailleurs', $orpailleurs);
        $this->loadData('assistants', $assistants);
        $this->loadData('formateurs', $formateurs);
        $this -> loadPageAjax('details');
    }

    public function update_formation() {
        if($_POST) {
            extract($_POST);
            if($infos == "formateur") {
                $res = $this -> Formation_model -> save_formateur($idformation, $iduser, $type);
                echo json_encode(array("status" => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Une erreur s'est produite"));
            } else {
                $res = $this -> Formation_model -> save_assistants($idformation, $iduser ,$infos ,$type);
                echo json_encode(array("status" => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Une erreur s'est produite"));
            }
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

}
