<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Exportation_Model extends ANR_Model{
    
    protected $_table = "exportation";
    protected $_key = "IDExportation";

    function __construct(){
        parent::__construct();
    }

    public function get_exportateur($type) {
       switch($type) {
           case 1:
                return $this -> db -> select('IDExportateur as id, concat(NomExportateur, " ", PrenomExportateur) as nom_prenom') -> get('exportateur') -> result_array();
           case 2: 
                return $this -> db -> select('IDComptoirDeFonte as id, concat(NomSocieteComptoirDeFonte, " ", MandataireComptoirDeFonte) as nom_prenom') -> get('comptoir_de_fonte') -> result_array();
           case 3:
               return $this -> db -> select('IDComptoirComm as id, concat(NomSocieteComptoirComm, " ", MandataireComptoirComm) as nom_prenom') -> get('comptoir_commerciale') -> result_array();
           case 4:
               return $this -> db -> select('IDCollecteurCat2 as id, concat(NomCollecteurCat2, " ", PrenomCollecteurCat2) as nom_prenom') -> get('collecteur_cat2') -> result_array();
        }
    }

    public function get_exportation() {
        $query = $this -> db -> select('exportation.*,
                                        (select concat(NomExportateur, " ", PrenomExportateur) from exportateur where IDExportateur = exportation.IDExportateur) as nom_prenomexp,
                                        (select concat(NomSocieteComptoirDeFonte, " ", MandataireComptoirDeFonte) from comptoir_de_fonte where IDComptoirDeFonte = exportation.IDComptoirDeFonte) as nom_prenomcf,
                                        (select concat(NomSocieteComptoirComm, " ", MandataireComptoirComm) from comptoir_commerciale where IDComptoirComm = exportation.IDComptoirCommerciale) as nom_prenomcc,
                                        (select concat(NomCollecteurCat2, " ", PrenomCollecteurCat2) from collecteur_cat2 where IDCollecteurCat2 = exportation.IDCollecteurCat2) as nom_prenomcc2') -> get('exportation');
        return  $query -> result_array();
    }
}
?>