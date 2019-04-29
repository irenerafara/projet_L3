<?php

class AchatCfCol2 extends ANR_Controller {

    protected $_css = array("achatcfcol2.css");
    protected $_js = array('achatcfcol2.js');
     
    protected $page_title = "Gestion des achats";

    protected $_folder = "achatcfcol2/";
    protected $_models = array('AchatCfCol2_model');

    public function index() {
        $comptoirfontes= $this->AchatCfCol2_model->get_comptoirfonte();
        $col2s= $this->AchatCfCol2_model->get_col2();
        $achatcfcol2s= $this->AchatCfCol2_model->get();
        $this->loadData('comptoirfontes',$comptoirfontes);
        $this->loadData('col2s',$col2s);
        $this->loadData('achatcfcol2s',$achatcfcol2s);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_achatcfcol2() {
        if($_POST) {
            extract($_POST);
            $info_achatcfcol2 = array('IDAchatCfCol2' => $IDAchatCfCol2,
                                'IDComptoirDeFonte' => $IDComptoirDeFonte,
                                'IDCollecteurCat2' => $IDCollecteurCat2,
                                'Date' => $Date,
                                'Quantite' => $Quantite,
                                'PrixUnitaire' => $PrixUnitaire,
                                'PrixTotale' => $PrixTotale);

            $res = $this ->AchatCfCol2_model -> save_achatcfcol2($info_achatcfcol2, $IDAchatCfCol2 ? $IDAchatCfCol2 : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_achatcfcol2($id_achatcfcol2) {
        $res = $this ->AchatCfCol2_model -> delete_achatcfcol2($id_achatcfcol2);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
