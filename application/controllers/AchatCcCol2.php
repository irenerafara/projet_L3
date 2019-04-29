<?php

class AchatCcCol2 extends ANR_Controller {

    protected $_css = array("achatcccol2.css");
    protected $_js = array('achatcccol2.js');
     
    protected $page_title = "Gestion des achats";

    protected $_folder = "achatcccol2/";
    protected $_models = array('AchatCcCol2_model');

    public function index() {
        $comptoircomms= $this->AchatCcCol2_model->get_comptoircomm();
        $col2s= $this->AchatCcCol2_model->get_col2();
        $achatcccol2s= $this->AchatCcCol2_model->get();
        $this->loadData('comptoircomms',$comptoircomms);
        $this->loadData('col2s',$col2s);
        $this->loadData('achatcccol2s',$achatcccol2s);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_achatcccol2() {
        if($_POST) {
            extract($_POST);
            $info_achatcccol2 = array('IDAchatCcCol2' => $IDAchatCcCol2,
                                'IDComptoirComm' => $IDComptoirComm,
                                'IDCollecteurCat2' => $IDCollecteurCat2,
                                'Date' => $Date,
                                'Quantite' => $Quantite,
                                'PrixUnitaire' => $PrixUnitaire,
                                'PrixTotale' => $PrixTotale);

            $res = $this ->AchatCcCol2_model -> save_achatcccol2($info_achatcccol2, $IDAchatCcCol2 ? $IDAchatCcCol2 : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_achatcccol2($id_achatcccol2) {
        $res = $this ->AchatCcCol2_model -> delete_achatcccol2($id_achatcccol2);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
