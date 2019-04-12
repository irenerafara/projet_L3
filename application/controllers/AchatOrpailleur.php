<?php

class AchatOrpailleur extends ANR_Controller {

    protected $_css = array("achatorpailleur.css");
    protected $_js = array('achatorpailleur.js');
     
    protected $page_title = "Gestion des achats";

    protected $_folder = "achatorpailleur/";
    protected $_models = array('AchatOrpailleur_model');

    public function index() {
        $comptoirfontes= $this->AchatOrpailleur_model->get_comptoirfonte();
        $orpailleurs= $this->AchatOrpailleur_model->get_orpailleur();
        $achatorpailleurs= $this->AchatOrpailleur_model->get();
        $this->loadData('comptoirfontes',$comptoirfontes);
        $this->loadData('orpailleurs',$orpailleurs);
        $this->loadData('achatorpailleurs',$achatorpailleurs);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_achatorpailleur() {
        if($_POST) {
            extract($_POST);
            $info_achatorpailleur = array('IDAchatOrpailleur' => $IDAchatOrpailleur,
                                
                                'IDOrpailleur' => $IDOrpailleur,
                                'IDComptoirDeFonte' => $IDComptoirDeFonte,
                                'Date' => $Date,
                                'Quantite' => $Quantite,
                                'PrixUnitaire' => $PrixUnitaire,
                                'PrixTotale' => $PrixTotale);

            $res = $this ->AchatOrpailleur_model -> save_achatorpailleur($info_achatorpailleur, $IDAchatOrpailleur ? $IDAchatOrpailleur : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_achatorpailleur($id_achatorpailleur) {
        $res = $this ->AchatOrpailleur_model -> delete_achatorpailleur($id_achatorpailleur);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
