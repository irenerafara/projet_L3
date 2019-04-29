<?php

class AchatCol2Orp extends ANR_Controller {

    protected $_css = array("achatcol2orp.css");
    protected $_js = array('achatcol2orp.js');
     
    protected $page_title = "Gestion des achats";

    protected $_folder = "achatcol2orp/";
    protected $_models = array('AchatCol2Orp_model');

    public function index() {
        $col2s= $this->AchatCol2Orp_model->get_col2();
        $orpailleurs= $this->AchatCol2Orp_model->get_orpailleur();
        $achatcol2orps= $this->AchatCol2Orp_model->get();
        $this->loadData('col2s',$col2s);
        $this->loadData('orpailleurs',$orpailleurs);
        $this->loadData('achatcol2orps',$achatcol2orps);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_achatcol2orp() {
        if($_POST) {
            extract($_POST);
            $info_achatcol2orp = array('IDAchatCol2Orp' => $IDAchatCol2Orp,
                                'IDCollecteurCat2' => $IDCollecteurCat2,
                                'IDOrpailleur' => $IDOrpailleur,
                                'Date' => $Date,
                                'Quantite' => $Quantite,
                                'PrixUnitaire' => $PrixUnitaire,
                                'PrixTotale' => $PrixTotale);

            $res = $this ->AchatCol2Orp_model -> save_achatcol2orp($info_achatcol2orp, $IDAchatCol2Orp ? $IDAchatCol2Orp : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_achatcol2orp($id_achatcol2orp) {
        $res = $this ->AchatCol2Orp_model -> delete_achatcol2orp($id_achatcol2orp);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
