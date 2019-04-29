<?php

class Orpailleur extends ANR_Controller {

    protected $_css = array("orpailleur.css");
    protected $_js = array('orpailleur.js');
     
    protected $page_title = "Gestion des orpailleurs";

    protected $_folder = "orpailleur/";
    protected $_models = array('Orpailleur_Model');

    public function index() {
        if($_POST) extract($_POST);
        if(isset($search)) {
            $orpailleurs = $this->Orpailleur_Model->get_where($search);
            $this -> loadData('search_criteria', $search);
        } else {
            $orpailleurs= $this -> Orpailleur_Model -> get();
        }
        $this->loadData('orpailleurs',$orpailleurs);
        $this -> loadPage('accueil');
    }

    public function Enregistrer_Orpailleur() {
        if($_POST) {
            extract($_POST);
            $info_orpailleur = array('NomOrpailleur' => $NomOrpailleur,
                                
                                'PrenomOrpailleur' => $PrenomOrpailleur,
                                'CINOrpailleur' => $CINOrpailleur,
                                'LieuCINOrpailleur' => $LieuCINOrpailleur,
                                'DateCINOrpailleur' => $DateCINOrpailleur,
                                'DuplicataCINOrpailleur' => $DuplicataCINOrpailleur,
                                'ContactOrpailleur' => $ContactOrpailleur,
                                'AdresseOrpailleur' => $AdresseOrpailleur
                            );
            $res = $this -> Orpailleur_Model -> save_orpailleur($info_orpailleur, $IDOrpailleur ? $IDOrpailleur : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_orpailleur($id_orpailleur) {
        $res = $this -> Orpailleur_Model -> delete_orpailleur($id_orpailleur);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
