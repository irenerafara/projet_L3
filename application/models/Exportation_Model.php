<?php
class exportation extends ANR_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_exportation($MoisExportation = FALSE)
    {
        if ($MoisExportation === FALSE)
        {
            $query = $this->db->get('exportation');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('exportation', array('MoisExportation' => $MoisExportation));
        return $query->row_array();
    }
    
    public function get_exportation_by_IDExportation($IDExportation = 0)
    {
        if ($IDExportation === 0)
        {
            $query = $this->db->get('exportation');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('exportation', array('IDExportation' => $IDExportation));
        return $query->row_array();
    }
    
    public function set_exportation($IDExportation= 0)
    {
        $this->load->helper('url');
 
        $MoisExportation= url_title($this->input->post('AnneExportation'), 'dash', TRUE);
 
        $data = array(
            'AnneExportation' => $this->input->post('AnneExportation'),
            'MoisExportation' => $AnneExportation,
            'QuantiteExportation' => $QuantiteExportation,
            'PrixUnitatuireExportation' => $PrixUnitaireExportation,
            'PrixTotaleExportation' => $PrixTotaleExportation,
        );
        
        if ($id == 0) {
            return $this->db->insert('exportation', $data);
        } else {
            $this->db->where('IDExportation', $IDExportation);
            return $this->db->update('exportation', $data);
        }
    }
    
    public function delete_exportation($IDExportation)
    {
        $this->db->where('IDExportation', $IDExportation);
        return $this->db->delete('exportation');
    }
}