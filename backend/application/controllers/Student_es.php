<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Student_es extends CI_Controller {

    
    function __construct()
    
    {
          parent::__construct();
            $this->load->helper('form');
            $this->load->model('model_insertvalues');
            $this->load->model('model_getvalues');
            $this->load->model('model_deletevalues');
          if(!isset($_SESSION['email'])){
            $this->session->set_flashdata("error"," <div class='alert alert-danger '><h6>You have to login to view this page</h6></div> ");
             $data['user'] = $this->model_getvalues->getDetails('student','name',$this->session->userdata('name'));
           redirect('index.php/student/login');
  }
    }

 public function index()
    {
        // $date = date('Y-m-d');
        $this->load->view('student/header');
        $this->load->view('student/nav');
        $this->load->view('student/aside');

        $data['user'] = $this->model_getvalues->getDetails('student','name',$this->session->userdata('name'));
        $this->load->view('student/dashboard',$data);
        $this->load->view('student/footer');
    }

public function item_list(){

  $this->load->view('student/header');
  $this->load->view('student/nav');
  $this->load->view('student/aside');

  $data['user'] = $this->model_getvalues->getDetails('student','id',$this->session->userdata('id'));
  $class = explode(',',$data['user']['class_id']);
  $student = array();
  foreach($class as $classs){
       $this->db->where('class_id =',trim($classs));
          $query = $this->db->get('item'); 

          $student[] = $query->result();
    // $data['student'] = $this->model_getvalues->getTableRows('item', 'class_id',$classs, 'id','desc');
  }

//   print_r($student[0]); die();
  $data['stu'] = $student;
//   $data['st'] = $data['stu'];

  $this->load->view('student/item', $data);
  $this->load->view('student/footer');
}  
  
  public function limit_word($input,$num)
  {
      if (str_word_count($input,0) > $num) {
        
        $wordkey = str_word_count($input , 1);
        $wordindex = array_flip(str_word_count($input , 2));

        return substr($input , 0,$wordindex[$wordkey[$num]]);
      }

      else{
        return $input;
      }

  }

}
