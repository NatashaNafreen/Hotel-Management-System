<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($_SESSION['user_logged'] == FALSE){
			$this->session->set_flashdata("error" , "Please Login First!!");
			redirect("LoginController/login");
		}

  }

  public function profile()
	{
		if($_SESSION['user_logged'] == FALSE){
			$this->session->set_flashdata("error" , "Please Login First!!");
			redirect("LoginController/login");
		}
		$this->load->view('profile');
	}

	
}