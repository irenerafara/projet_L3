<?php

class Exportation extends ANR_Controller {
    
    protected $_css = array('exportation.css');
    protected $_js = array('exportation.js');

   protected $page_title = "Gestion de l'exportation";

    protected $_folder = "exportation/";
    protected $_models = array('Exportation_model');
    
    public function annuelle() {
        $annuelles= $this->Exportation_model->get();
        $this->loadData('annuelles',$annuelles);
        $this -> loadPage('accueil_annuelle');
    } 
    public function mensuelle() {
        $mensuelles= $this->Exportation_model->get();
        $this->loadData('mensuelles',$mensuelles);
        $this -> loadPage('accueil_mensuelle');
    }
    public function communale() {
        $communales= $this->Exportation_model->get();
        $this->loadData('communales',$communales);
        $this -> loadPage('accueil_communale');
    }

    public function index() {
        
        $this -> loadPage('accueil_annuelle');

    }
    public function enregistrer_exportation() {
        if($_POST) {
            extract($_POST);
            $info_exportation = array('AnneeExportation' => $AnneeExportation,
                                'MoisExportation' => $MoisExportation,
                                'QuantiteExportation' => $QuantiteExportation,
                                'PrixUnitaireExportation' => $PrixUnitaireExportation,
                                'PrixTotaleExportation' => $PrixTotaleExportation);
            $res = $this -> Exportation_model -> save($info_exportation, $IDExportation ? $IDExportation : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_exportation($id_exportation) {
        $res = $this -> Exportation_model -> delete($id_exportation);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
