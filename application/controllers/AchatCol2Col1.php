<?php

class AchatCol2Col1 extends ANR_Controller {

    protected $_css = array("achatcol2col1.css");
    protected $_js = array('achatcol2col1.js');
     
    protected $page_title = "Gestion des achats";

    protected $_folder = "achatcol2col1/";
    protected $_models = array('AchatCol2Col1_model');

    public function index() {
        $col2s= $this->AchatCol2Col1_model->get_col2();
        $col1s= $this->AchatCol2Col1_model->get_col1();
        $achatcol2col1s= $this->AchatCol2Col1_model->get();
        $this->loadData('col2s',$col2s);
        $this->loadData('col1s',$col1s);
        $this->loadData('achatcol2col1s',$achatcol2col1s);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_achatcol2col1() {
        if($_POST) {
            extract($_POST);
            $info_achatcol2col1 = array('IDAchatCol2Col1' => $IDAchatCol2Col1,
                                'IDCollecteurCat2' => $IDCollecteurCat2,
                                'IDCollecteurCat1' => $IDCollecteurCat1,
                                'Date' => $Date,
                                'Quantite' => $Quantite,
                                'PrixUnitaire' => $PrixUnitaire,
                                'PrixTotale' => $PrixTotale);

            $res = $this ->AchatCol2Col1_model -> save_achatcol2col1($info_achatcol2col1, $IDAchatCol2Col1 ? $IDAchatCol2Col1 : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_achatcol2col1($id_achatcol2col1) {
        $res = $this ->AchatCol2Col1_model -> delete_achatcol2col1($id_achatcol2col1);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
