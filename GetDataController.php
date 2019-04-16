<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetDataController extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->data= array();
        }


	public function allRooms()
	{
		$this->load->model("GetDataModel");
		$this->data['rooms']=$this->GetDataModel->getRooms();
		$this->load->view('getAllRooms',$this->data);
	}
}
