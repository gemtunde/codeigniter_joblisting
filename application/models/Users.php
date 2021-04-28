<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model{
    public function insert_user($user_data){
            $this->db->Insert('users',$user_data);
    }
}




