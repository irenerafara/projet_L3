<?php

class AchatCfCol1 extends ANR_Controller {

    protected $_css = array("achatcfcol1.css");
    protected $_js = array('achatcfcol1.js');
     
    protected $page_title = "Gestion des achats";

    protected $_folder = "achatcfcol1/";
    protected $_models = array('AchatCfCol1_model');

    public function index() {
        $comptoirfontes= $this->AchatCfCol1_model->get_comptoirfonte();
        $col1s= $this->AchatCfCol1_model->get_col1();
        $achatcfcol1s= $this->AchatCfCol1_model->get();
        $this->loadData('comptoirfontes',$comptoirfontes);
        $this->loadData('col1s',$col1s);
        $this->loadData('achatcfcol1s',$achatcfcol1s);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_achatcfcol1() {
        if($_POST) {
            extract($_POST);
            $info_achatcfcol1 = array('IDAchatCfCol1' => $IDAchatCfCol1,
                                'IDComptoirDeFonte' => $IDComptoirDeFonte,
                                'IDCollecteurCat1' => $IDCollecteurCat1,
                                'Date' => $Date,
                                'Quantite' => $Quantite,
                                'PrixUnitaire' => $PrixUnitaire,
                                'PrixTotale' => $PrixTotale);

            $res = $this ->AchatCfCol1_model -> save_achatcfcol1($info_achatcfcol1, $IDAchatCfCol1 ? $IDAchatCfCol1 : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_achatcfcol1($id_achatcfcol1) {
        $res = $this ->AchatCfCol1_model -> delete_achatcfcol1($id_achatcfcol1);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
