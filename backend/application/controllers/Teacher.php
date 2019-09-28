<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller  {

    
        function __construct()
        {
        parent::__construct();
      $this->load->helper('form');
      $this->load->model('model_insertvalues');
        }



    public function index(){
        $this->load->view('teacher/header');
        $this->load->view('teacher/home');
        $this->load->view('teacher/footer');
    }
    
    public function login()
    {
        if (isset($_POST['submit'])) {
         $this->form_validation->set_rules('email', 'Email', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');
         if ($this->form_validation->run() == TRUE) {
             
                $data = array(

                    $email   = $_POST['email'],
                    $password   = md5($_POST['password']),
                    );

                    $this->db->select('*');
                    $this->db->from('teacher');
                    $this->db->where(array('email'=>$email,'password'=>$password));
                    $query = $this->db->get();
                    $user = $query->row();

                    if ($user > 0) {
                        $_SESSION['user_logged'] = TRUE;
                        $_SESSION['email']    = $user->email;
                        $_SESSION['name']  = $user->name;
                        $_SESSION['id']  = $user->id;

                       $arr =  array(
                        'email' =>$email ,
                        'password' =>$password ,

                        );

                        $this->model_insertvalues->addItem($arr,"user_login");
                        redirect("index.php/teacher_es/index");

                    }

                    else{
                $this->session->set_flashdata("error"," <div class='alert alert-danger'><h6>Account Not Found <a href='' >Contact The Administrator </a></h6></div>");
                redirect("index.php/teacher/login","refresh");
            }
         }
        }
        $this->load->view('teacher/login');
    }
    
    public function signup()
    {
       // $message = FALSE;
        
      if (isset($_POST['submit'])) {    
      
         $this->form_validation->set_rules('name', ' Name', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');
         $this->form_validation->set_rules('passconf', 'Comfirm Password', 'required|min_length[5]|matches[password]');
         $this->form_validation->set_rules('gender', 'gender', 'required');
         $this->form_validation->set_rules('bio', 'Bio', 'required');
         if($this->form_validation->run() == TRUE) {
             $data = array(
                    'name'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'password'=>md5($this->input->post('password')),
                    'gender'=>$this->input->post('gender'),
                    'bio'=>$this->input->post('bio'),
                );
                
                 $co = $this->model_insertvalues->addItem($data, 'teacher');
                 if ($co == TRUE) {
                      $this->session->set_flashdata("success",' 
                            <div class="alert alert-success"> 
                                <strong>Well done! Account created Successfully. you can now <a href="login">click here to login</a></strong>
                           </div> '
                           );
                           
                 }else{

                    $this->session->set_flashdata("error",'<div class="alert alert-danger">
                                <strong>Oh snap! "'.validation_errors().'"</strong>
                            </div>');
                            
                   }    
      }
      }
      $this->load->view ('teacher/register');
        
    }



    public function logout(){
            unset($_SESSION);
            session_destroy();
         redirect("index.php/teacher/login");
    }

}

