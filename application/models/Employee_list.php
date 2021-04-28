<?php

defined('BASEPATH') OR exit('Access denied');

class Employee_list extends CI_Model{

    public function insert_employee($employee_details)
    {
        $this->db->insert('employees',$employee_details);

    }
}