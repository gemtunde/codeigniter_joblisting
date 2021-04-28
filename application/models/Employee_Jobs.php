<?php

defined('BASEPATH') OR exit('no direct access to script allowed');


class Employee_Jobs extends CI_MODEL{
    public function add_job($job_details){
        $this->db->Insert('Jobs', $job_details );
    }
}