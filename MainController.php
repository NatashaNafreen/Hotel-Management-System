<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function getIn(){
		$this->load->view('getInPage');
	}

	
}