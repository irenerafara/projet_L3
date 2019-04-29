<?php

class AchatCol1Orp extends ANR_Controller {

    protected $_css = array("achatcol1orp.css");
    protected $_js = array('achatcol1orp.js');
     
    protected $page_title = "Gestion des achats";

    protected $_folder = "achatcol1orp/";
    protected $_models = array('AchatCol1Orp_model');

    public function index() {
        $col1s= $this->AchatCol1Orp_model->get_col1();
        $orpailleurs= $this->AchatCol1Orp_model->get_orpailleur();
        $achatcol1orps= $this->AchatCol1Orp_model->get();
        $this->loadData('col1s',$col1s);
        $this->loadData('orpailleurs',$orpailleurs);
        $this->loadData('achatcol1orps',$achatcol1orps);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_achatcol1orp() {
        if($_POST) {
            extract($_POST);
            $info_achatcol1orp = array('IDAchatCol1Orp' => $IDAchatCol1Orp,
                                'IDCollecteurCat1' => $IDCollecteurCat1,
                                'IDOrpailleur' => $IDOrpailleur,
                                'Date' => $Date,
                                'Quantite' => $Quantite,
                                'PrixUnitaire' => $PrixUnitaire,
                                'PrixTotale' => $PrixTotale);

            $res = $this ->AchatCol1Orp_model -> save_achatcol1orp($info_achatcol1orp, $IDAchatCol1Orp ? $IDAchatCol1Orp : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_achatcol1orp($id_achatcol1orp) {
        $res = $this ->AchatCol1Orp_model -> delete_achatcol1orp($id_achatcol1orp);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
