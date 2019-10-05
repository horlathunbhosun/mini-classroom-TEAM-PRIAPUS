<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
class Student extends CI_Controller  {

    
 		function __construct()
 		{
 	    parent::__construct();
              $this->load->helper('form');
              $this->load->model('model_insertvalues');
 		}
=======
class student extends CI_Controller  {

    
        function __construct()
        {
        parent::__construct();
      $this->load->helper('form');
      $this->load->model('model_insertvalues');
        }
>>>>>>> backend



   
<<<<<<< HEAD
	
	public function login()
=======
    
    public function login()
>>>>>>> backend
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
                    $this->db->from('student');
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
                        redirect("index.php/student_es/index");

                    }

                    else{
                $this->session->set_flashdata("error"," <div class='alert alert-danger'><h6>Account Not Found <a href='' >Contact The Administrator </a></h6></div>");
                redirect("index.php/student/login","refresh");
            }
         }
        }
        $this->load->view('student/login');
    }
<<<<<<< HEAD
	
    public function signup()
	{
       // $message = FALSE;
     $data['class'] = $this->model_getvalues->getTableRows('class','id!=','0','id');

      if (isset($_POST['submit'])) {	
    
      
       	 $this->form_validation->set_rules('name', ' Name', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');
         $this->form_validation->set_rules('passconf', 'Comfirm Password', 'required|min_length[5]|matches[password]');
         $this->form_validation->set_rules('class', 'Class Name', 'required');
=======
    
    public function signup()
    {
       // $message = FALSE;
     $data['class'] = $this->model_getvalues->getTableRows('class','id!=','0','id');

      if (isset($_POST['submit'])) {    
    
      
         $this->form_validation->set_rules('name', ' Name', 'required');
         $this->form_validation->set_rules('email', 'Email', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');
         $this->form_validation->set_rules('passconf', 'Comfirm Password', 'required|min_length[5]|matches[password]');
         $this->form_validation->set_rules('class[]', 'Class Name', 'required');
>>>>>>> backend
         if($this->form_validation->run() == TRUE) {
             $data = array(
                    'name'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'password'=>md5($this->input->post('password')),
<<<<<<< HEAD
                    'class'=>$this->input->post('class'),
=======
                    'class_id'=>implode(",",$this->input->post('class')),
>>>>>>> backend
                );
                
                 $co = $this->model_insertvalues->addItem($data, 'student');
                 if ($co == TRUE) {
                      $this->session->set_flashdata("success",' 
                            <div class="alert alert-success"> 
<<<<<<< HEAD
                             <center>   <strong>Well done!</strong> Account created Successfully. you can now <a href="login">click here to login</a><center>
                           </div> '
                           );
=======
                                <strong>Well done! Account created Successfully. you can now <a href="login">click here to login</a></strong>
                           </div> '
                           );
                       
>>>>>>> backend

                           
                 }else{

<<<<<<< HEAD
                 	$this->session->set_flashdata("error",'<div class="alert alert-danger">
=======
                    $this->session->set_flashdata("error",'<div class="alert alert-danger">
>>>>>>> backend
                                <strong>Oh snap! "'.validation_errors().'"</strong>
                            </div>');
                            
                   }    
      }
      }
      $this->load->view ('student/register', $data);
        
    }



    public function logout(){
            unset($_SESSION);
            session_destroy();
<<<<<<< HEAD
         redirect("index.php/student/login");
=======
         redirect("index.php/app/index");
>>>>>>> backend
    }

}

