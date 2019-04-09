<?php

class Exportateur extends ANR_Controller {

    protected $_css = array("exportateur.css");
    protected $_js = array('exportateur.js');
     
    protected $page_title = "Gestion de l'exportateur";

    protected $_folder = "exportateur/";
    protected $_models = array('Exportateur_Model');

    public function index() {
        $exportateurs= $this->Exportateur_Model->get();
        $this->loadData('exportateurs',$exportateurs);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_Exportateur() {
        if($_POST) {
            extract($_POST);
            $info_exportateur = array('NomSocieteExportateur' => $NomSocieteExportateur,
                                
                                'NomExportateur' => $NomExportateur,
                                'PrenomExportateur' => $PrenomExportateur,
                                'StatExportateur' => $StatExportateur,
                                'NifExportateur' => $NifExportateur,
                                'FiscalExportateur' => $FiscalExportateur,
                                'ContactExportateur' => $ContactExportateur,
                                'AdresseExportateur' => $AdresseExportateur,
                                'MandataireExportateur' => $MandataireExportateur);

            $res = $this -> Exportateur_Model ->save($info_exportateur, $IDExportateur ? $IDExportateur : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_exportateur($id_exportateur) {
        $res = $this -> Exportateur_Model ->delete($id_exportateur);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
