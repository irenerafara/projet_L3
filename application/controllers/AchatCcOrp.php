<?php

class AchatCcOrp extends ANR_Controller {

    protected $_css = array("achatccorp.css");
    protected $_js = array('achatccorp.js');
     
    protected $page_title = "Gestion des achats";

    protected $_folder = "achatccorp/";
    protected $_models = array('AchatCcOrp_model');

    public function index() {
        $comptoircomms= $this->AchatCcOrp_model->get_comptoircomm();
        $orps= $this->AchatCcOrp_model->get_orp();
        $achatccorps= $this->AchatCcOrp_model->get();
        $this->loadData('comptoircomms',$comptoircomms);
        $this->loadData('orps',$orps);
        $this->loadData('achatccorps',$achatccorps);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_achatccorp() {
        if($_POST) {
            extract($_POST);
            $info_achatccorp = array('IDAchatCcOrp' => $IDAchatCcOrp,
                                'IDComptoirComm' => $IDComptoirComm,
                                'IDOrpailleur' => $IDOrpailleur,
                                'Date' => $Date,
                                'Quantite' => $Quantite,
                                'PrixUnitaire' => $PrixUnitaire,
                                'PrixTotale' => $PrixTotale);

            $res = $this ->AchatCcOrp_model -> save_achatccorp($info_achatccorp, $IDAchatCcOrp ? $IDAchatCcOrp : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_achatccorp($id_achatccorp) {
        $res = $this ->AchatCcOrp_model -> delete_achatccorp($id_achatccorp);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
