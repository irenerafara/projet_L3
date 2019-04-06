<?php

class Exportation extends ANR_Controller {
    
    protected $_css = array('exportation.css');
    protected $_js = array('exportation.js');

   protected $page_title = "Gestion de l'exportation";

    protected $_folder = "exportation/";
    protected $_models = array('Exportation_model');
    
    public function index() {
        $exportations= $this->Exportation_model->get_exportation();
        $this->loadData('exportations',$exportations);
        $this -> loadPage('accueil');
    }

    public function load_exportateur($type) {
        $exportateurs = $this -> Exportation_model -> get_exportateur($type);
        $options_exportateurs = "";
        foreach($exportateurs as $exp) {
            $options_exportateurs .= "<option value = '".$exp['id']."'>".$exp['nom_prenom']."</option>";
        }
        echo $options_exportateurs;
    }

    public function enregistrer_exportation() {
        if($_POST) {
            extract($_POST);
            $info_exportation = array('AnneeExportation' => $AnneeExportation,
                                'MoisExportation' => $MoisExportation,
                                'QuantiteExportation' => $QuantiteExportation,
                                'PrixUnitaireExportation' => $PrixUnitaireExportation,
                                'PrixTotaleExportation' => $PrixTotaleExportation);
            switch($TypeExportateur) {
                case 1: 
                    $info_exportation['IDComptoirCommerciale'] = null;
                    $info_exportation['IDCollecteurCat2'] = null;
                    $info_exportation['IDComptoirDeFonte'] = null;
                    $info_exportation['IDExportateur'] = $IDExportateur;
                    break;
                case 2: 
                    $info_exportation['IDComptoirCommerciale'] = null;
                    $info_exportation['IDExportateur'] = null;
                    $info_exportation['IDCollecteurCat2'] = null;
                    $info_exportation['IDComptoirDeFonte'] = $IDExportateur;
                    break;
                case 3: 
                    $info_exportation['IDComptoirDeFonte'] = null;
                    $info_exportation['IDExportateur'] = null;
                    $info_exportation['IDCollecteurCat2'] = null;
                    $info_exportation['IDComptoirCommerciale'] = $IDExportateur;
                    break;
                case 4: 
                    $info_exportation['IDComptoirCommerciale'] = null;
                    $info_exportation['IDExportateur'] = null;
                    $info_exportation['IDComptoirDeFonte'] = null;
                    $info_exportation['IDCollecteurCat2'] = $IDExportateur;
                    break;
            }
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
