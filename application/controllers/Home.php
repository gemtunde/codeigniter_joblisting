<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

   public function __construct(){

    parent::__construct();
    $this->load->model('Users');
   }
   
    public function index(){
        $this->load->view('inc/header');
        $this->load->view('home');
        $this->load->view('inc/footer');
    }

    public function register(){
        $this->load->view('inc/header');
        $this->load->view('register');
        $this->load->view('inc/footer');
    }

    public function register_process(){
        if($this->input->post('u_register')){
            $u_name = $this->input->post('u_name');
            $u_email = $this->input->post('u_email');
            $u_pass = md5($this->input->post('u_pass'));

            $user_data = array(
                'u_name' => $u_name,
                'u_email' => $u_email,
                'u_pass' => $u_pass
            );

            // echo '<pre>';
            // var_dump($user_data);
            // echo '</pre>';

            $this->Users->insert_user($user_data);
            redirect('home','refresh');

        }
        else{
            redirect('home','refresh');
        }
    }

    public function login_process(){
        if($this->input->post('u_login')){
            $u_name = $this->input->post('u_name');
            $u_pass = md5($this->input->post('u_pass'));

            $user_data = array(
                'u_name' => $u_name,
                'u_pass' => $u_pass
            );

            // echo "<pre>";            
            // var_dump($user_data);
            // echo "</pre>";
            $users_list = $this->db->get_where('users', array(
                'u_name'=>$user_data['u_name']
            ));
            foreach($users_list->result() as $user)
            {
                    if ($user_data['u_name'] == $user->u_name && $user_data['u_pass'] == $user->u_pass){
                        $_SESSION['u_name'] = $user_data['u_name'] ;
                        redirect('dash', 'refresh');
                    }
                    else{
                        echo "<script>
                        alert('username or password incorrect');
                        </script>";
                        redirect('home','refresh');
                    }
            }
        }
        else {
            redirect('home', 'refresh');
        }
    }

    public function logout(){
        session_unset();
        session_destroy();
        redirect('home','refresh');
    }
}