<?php

class AchatCol1 extends ANR_Controller {

    protected $_css = array("achatcol1.css");
    protected $_js = array('achatcol1.js');
     
    protected $page_title = "Gestion des achats";

    protected $_folder = "achatcol1/";
    protected $_models = array('AchatCol1_model');

    public function index() {
        $comptoircomms= $this->AchatCol1_model->get_comptoircomm();
        $col1s= $this->AchatCol1_model->get_col1();
        $achatcol1s= $this->AchatCol1_model->get();
        $this->loadData('comptoircomms',$comptoircomms);
        $this->loadData('col1s',$col1s);
        $this->loadData('achatcol1s',$achatcol1s);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_achatcol1() {
        if($_POST) {
            extract($_POST);
            $info_achatcol1 = array('IDAchatCollecteurCat1' => $IDAchatCollecteurCat1,
                                'IDComptoirComm' => $IDComptoirComm,
                                'IDCollecteurCat1' => $IDCollecteurCat1,
                                'Date' => $Date,
                                'Quantite' => $Quantite,
                                'PrixUnitaire' => $PrixUnitaire,
                                'PrixTotale' => $PrixTotale);

            $res = $this ->AchatCol1_model -> save_achatcol1($info_achatcol1, $IDAchatCollecteurCat1 ? $IDAchatCollecteurCat1 : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_achatcol1($id_achatcol1) {
        $res = $this ->AchatCol1_model -> delete_achatcol1($id_achatcol1);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
