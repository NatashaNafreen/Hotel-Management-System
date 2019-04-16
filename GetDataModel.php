<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GetDataModel extends CI_Model {



        public function __construct()
        {
                parent::__construct();
        }

        public function getRooms()
        {
               return $this->db->select('room_no, room_size, bed , rent, isFree')
                          ->from('rooms')
                          ->get()->result_array();

        }
}