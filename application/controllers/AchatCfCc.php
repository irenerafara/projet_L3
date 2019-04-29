<?php

class AchatCfCc extends ANR_Controller {

    protected $_css = array("achatcfcc.css");
    protected $_js = array('achatcfcc.js');
     
    protected $page_title = "Gestion des achats";

    protected $_folder = "achatcfcc/";
    protected $_models = array('AchatCfCc_model');

    public function index() {
        $comptoirfontes= $this->AchatCfCc_model->get_comptoirfonte();
        $comms= $this->AchatCfCc_model->get_comm();
        $achatcfccs= $this->AchatCfCc_model->get();
        $this->loadData('comptoirfontes',$comptoirfontes);
        $this->loadData('comms',$comms);
        $this->loadData('achatcfccs',$achatcfccs);
        $this -> loadPage('accueil');
    }

    public function enregistrer_achatcfcc() {
        if($_POST) {
            extract($_POST);
            $info_achatcfcc = array('IDAchatCfCc' => $IDAchatCfCc,
                                'IDComptoirDeFonte' => $IDComptoirDeFonte,
                                'IDComptoirComm' => $IDComptoirComm,
                                'Date' => $Date,
                                'Quantite' => $Quantite,
                                'PrixUnitaire' => $PrixUnitaire,
                                'PrixTotale' => $PrixTotale);

            $res = $this ->AchatCfCc_model -> save_achatcfcc($info_achatcfcc, $IDAchatCfCc ? $IDAchatCfCc : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_achatcfcc($id_achatcfcc) {
        $res = $this ->AchatCfCc_model -> delete_achatcfcc($id_achatcfcc);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
