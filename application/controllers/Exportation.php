<?php

class Exportation extends ANR_Controller {

    protected $_css = array('');
    protected $_js = array('');

    protected $page_title = "Gestion de l'exportation";

    protected $_folder = "exportation/";

    public function index() {
        $this -> loadPage('accueil');
    }
    public function annuelle() {
        $this -> loadPage('accueil_annuelle');
    }
    public function mensuelle() {
        $this -> loadPage('accueil_mensuelle');

    }
    
    public function communale() {
        $this -> loadPage('accueil_communale');

    }
}

    protected $_folder = "utilisateur/";
    protected $_models = array('Exportation_model');

    public function index() {
        $utilisateurs= $this->Exportation_model->get();
        $this->loadData('exportations',$exportatios);
        $this -> loadPage('accueil');
    }

    public function enregistrer_exportation() {
        if($_POST) {
            extract($_POST);
            $info_user = array('AnneeExportation' => $AnneeExportation,
                                'MoisExportation' => $MoisExportation,
                                'QuantiteExportation' => $QuantiteExportation,
                                'PrixUnitaireExportation' => $PrixUnitaireExportation,
                                'PrixTotaleExportation' => $PrixTotaleExportation,
                                
            $res = $this -> Exportation_model -> save($info_exportation, $IDExportation ? $IDExportation : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_exportation($id_user) {
        $res = $this -> Exportation_model -> delete($id_user);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
