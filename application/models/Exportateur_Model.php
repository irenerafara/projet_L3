
<?php
class Exportateur_Model extends ANR_Model {


public $NomSocieteExportateur;
public $NomExportateur;
public $PrenomExportateur;
public $StatExportateur;
public $NifExportateur;
public $FiscalExportateur;
public $ContactExportateur;
public $AdresseExportateur;
public $MandataireExportateur;

public function get_last_ten_exportaturs()
{
        $query = $this->db->get('exportateurs', 10);
        return $query->result();
}

public function insert_exportateur()
{
        $this->NomSocieteExportateur    = $_POST['NomSocieteExportateur']; // please read the below note
        $this->NomExportateur = $_POST['NomExportateur'];
        $this->PrenomExportateur  = $_POST['PrenomExportateur'];
        $this->StatExportateur  = $_POST['StatExportateur'];
        $this->NifExportateur  = $_POST['NifExportateur'];
        $this->FiscalExportateur  = $_POST['FiscalExportateur'];
        $this->ContactExportateurt  = $_POST['ContactExportateurt'];
        $this->AdresseExportateur  = $_POST['AdresseExportateur'];
        $this->MandataireExportateur  = $_POST['MandataireExportateur'];
    
        $this->db->insert('exportateurs', $this);
}

public function update_exportateur()
{
    $this->NomSocieteExportateur    = $_POST['NomSocieteExportateur'];
    $this->NomExportateur = $_POST['NomExportateur'];
    $this->PrenomExportateur  = $_POST['PrenomExportateur'];
    $this->StatExportateur  = $_POST['StatExportateur'];
    $this->NifExportateur  = $_POST['NifExportateur'];
    $this->FiscalExportateur  = $_POST['FiscalExportateur'];
    $this->ContactExportateurt  = $_POST['ContactExportateurt'];
    $this->AdresseExportateur  = $_POST['AdresseExportateur'];
    $this->MandataireExportateur  = $_POST['MandataireExportateur'];

        $this->db->update('exportateurs', $this, array('IDExportateur' => $_POST['IDExportateur']));
}

}