<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ItemCRUD extends ANR_Controller {



   public $itemCRUD;



   /**

    * Get All Data from this method.

    *

    * @return Response

   */

   public function __construct() {

      parent::__construct(); 



      $this->load->library('form_validation');

      $this->load->library('session');

      $this->load->model('ItemCRUDModel');



      $this->itemCRUD = new ItemCRUDModel;

   }



   /**

    * Display Data this method.

    *

    * @return Response

   */

   public function index()

   {

       $data['data'] = $this->itemCRUD->get_itemCRUD();



       $this->load->view('theme/header');       

       $this->load->view('itemCRUD/list',$data);

       $this->load->view('theme/footer');

   }



   /**

    * Show Details this method.

    *

    * @return Response

   */

   public function show($id)

   {

      $item = $this->itemCRUD->find_item($id);



      $this->load->view('theme/header');

      $this->load->view('itemCRUD/show',array('item'=>$item));

      $this->load->view('theme/footer');

   }



   /**

    * Create from display on this method.

    *

    * @return Response

   */

   public function create()

   {

      $this->load->view('theme/header');

      $this->load->view('itemCRUD/create');

      $this->load->view('theme/footer');   

   }



   /**

    * Store Data from this method.

    *

    * @return Response

   */

   public function store()

   {

        
        $this->form_validation->set_rules('NomSocieteExportateur', 'NomSocieteExportateur', 'required');
        $this->form_validation->set_rules('	NomExportateur', 'NomExportateur', 'required');
        $this->form_validation->set_rules('	PrenomExportateur', 'PrenomExportateur', 'required');
        $this->form_validation->set_rules('StatExportateur', 'StatExportateur', 'required');
        $this->form_validation->set_rules('	NifExportateur', 'NifExportateur', 'required');
        $this->form_validation->set_rules('	FiscalExportateur', 'FiscalExportateur', 'required');
        $this->form_validation->set_rules('	ContactExportateur', 'ContactExportateur', 'required');
        $this->form_validation->set_rules('	AdresseExportateur', 'AdresseExportateur', 'required');
        $this->form_validation->set_rules('	MandataireExportateur', 'MandataireExportateur', 'required');



        if ($this->form_validation->run() == FALSE){

            $this->session->set_flashdata('errors', validation_errors());

            redirect(base_url('itemCRUD/create'));

        }else{

           $this->itemCRUD->insert_item();

           redirect(base_url('itemCRUD'));

        }

    }



   /**

    * Edit Data from this method.

    *

    * @return Response

   */

   public function edit($id)

   {

       $item = $this->itemCRUD->find_item($id);



       $this->load->view('theme/header');

       $this->load->view('itemCRUD/edit',array('item'=>$item));

       $this->load->view('theme/footer');

   }



   /**

    * Update Data from this method.

    *

    * @return Response

   */

   public function update($id)

   {
    $this->form_validation->set_rules('NomSocieteExportateur', 'NomSocieteExportateur', 'required');
    $this->form_validation->set_rules('	NomExportateur', 'NomExportateur', 'required');
    $this->form_validation->set_rules('	PrenomExportateur', 'PrenomExportateur', 'required');
    $this->form_validation->set_rules('StatExportateur', 'StatExportateur', 'required');
    $this->form_validation->set_rules('	NifExportateur', 'NifExportateur', 'required');
    $this->form_validation->set_rules('	FiscalExportateur', 'FiscalExportateur', 'required');
    $this->form_validation->set_rules('	ContactExportateur', 'ContactExportateur', 'required');
    $this->form_validation->set_rules('	AdresseExportateur', 'AdresseExportateur', 'required');
    $this->form_validation->set_rules('	MandataireExportateur', 'MandataireExportateur', 'required');


        if ($this->form_validation->run() == FALSE){

            $this->session->set_flashdata('errors', validation_errors());

            redirect(base_url('itemCRUD/edit/'.$id));

        }else{ 

          $this->itemCRUD->update_item($id);

          redirect(base_url('itemCRUD'));

        }

   }



   /**

    * Delete Data from this method.

    *

    * @return Response

   */

   public function delete($id)

   {

       $item = $this->itemCRUD->delete_item($id);

       redirect(base_url('itemCRUD'));

   }

}