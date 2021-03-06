<?php

class Utilisateur extends ANR_Controller {

    protected $_css = array("utilisateur.css");
    protected $_js = array('utilisateur.js');
     
    protected $page_title = "Gestion des utilisateurs";

    protected $_folder = "utilisateur/";
    protected $_models = array('User_model');

    public function index() {
        $utilisateurs= $this->User_model->get();
        $this->loadData('utilisateurs',$utilisateurs);
        $this -> loadPage('accueil');
    }

    public function enregistrer_utilisateur() {
        if($_POST) {
            extract($_POST);
            $info_user = array('NomUtilisateur' => $NomUtilisateur,
                                'PrenomUtilisateur' => $PrenomUtilisateur,
                                'AdresseUtilisateur' => $AdresseUtilisateur,
                                'ContactUtilisateur' => $ContactUtilisateur,
                                'TypeUtilisateur' => $TypeUtilisateur,
                                'EmailUtilisateur' => $EmailUtilisateur,
                                'MotDePasseUtilisateur' => sha1($MotDePasseUtilisateur."*"));
            $res = $this -> User_model -> save($info_user, $IDUtilisateur ? $IDUtilisateur : null );
            echo json_encode(array('status' => $res ? 1 : 0, "message" => $res ? "Enregistré" : "Echec de l'enregistrement"));
        } else {
            echo json_encode(array("status" => 0, "message" => "Aucun paramètre envoyé"));
        }
    }

    public function supprimer_utilisateur($id_user) {
        $res = $this -> User_model -> delete($id_user);
        if($res)
        {
            echo json_encode(array("status" => 1 ));
        }
        else{
            echo json_encode(array("status" => 0 ));
        }
    }
}
