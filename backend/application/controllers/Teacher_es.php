<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher_es extends CI_Controller {

    
    function __construct()
    
    {
          parent::__construct();
            $this->load->helper('form');
            $this->load->model('model_insertvalues');
            $this->load->model('model_getvalues');
            $this->load->model('model_deletevalues');
                if(!isset($_SESSION['email'])){
                    $this->session->set_flashdata("error"," <div class='alert alert-danger '><h6>You have to login to view this page</h6></div> ");
                    $data['user'] = $this->model_getvalues->getDetails('teacher','name',$this->session->userdata('name'));
                    redirect('index.php/teacher/login');
                    }
    }

 public function index()
    {
        $this->load->view('teacher/header');
        $this->load->view('teacher/nav');
        $this->load->view('teacher/aside');
        $data['user'] = $this->model_getvalues->getDetails('teacher','name',$this->session->userdata('name'));
        $this->load->view('teacher/dashboard',$data);
        $this->load->view('teacher/footer');
    }


public function add_class()
{
  $this->load->view('teacher/header');
  $this->load->view('teacher/nav');
  $this->load->view('teacher/aside');
  $data['user'] = $this->model_getvalues->getDetails('teacher','id',$this->session->userdata('id'));
  $data['user'] = $this->model_getvalues->getDetails('teacher','name',$this->session->userdata('name'));

  if (isset($_POST['submit'])) {
      $user = $this->session->userdata('id');
          $this->form_validation->set_rules('class_name','class name','required|is_unique[class.class_name]');
          $this->form_validation->set_rules('class_details','class name','required');
          $this->form_validation->set_message('is_unique', 'This Class areadly exist.');
             if ($this->form_validation->run() == TRUE) {
                $arr = array(
                    'class_name'=> $this->input->post('class_name'),
                    'class_details'=>$this->input->post('class_details'),
                    'teacher_id'=> $user,
                );
            $confirm = $this->model_insertvalues->addItem($arr,"class");
         if ($confirm)
                    {
            $this->session->set_flashdata("success",'<div class="alert alert-success"><strong>Well done!</strong> Class added Successfully. </div>');
                redirect("index.php/teacher_es/add_class");
                    }
            else{
                 $this->session->set_flashdata("error",'<div class="alert alert-danger "><strong>Oh snap!</strong> Change a few things up and try                        submitting again. </div>');
                redirect("index.php/teacher_es/add_class","refresh");
                }
          }
    }

  $this->load->view('teacher/class');
  $this->load->view('teacher/footer');
}

public function all_class(){
  $this->load->view('teacher/header');
  $this->load->view('teacher/nav');
  $this->load->view('teacher/aside');
  $data['list'] = $this->model_getvalues->getTableRows('class','teacher_id',$this->session->userdata('id'),'id');
  $this->load->view('teacher/classlist', $data);
  $this->load->view('teacher/footer');
   }

public function add_item(){
    $this->load->view('teacher/header');
    $this->load->view('teacher/nav');
    $this->load->view('teacher/aside');
    $data['user'] = $this->model_getvalues->getDetails('teacher','name',$this->session->userdata('name'));
    $data['item'] = $this->model_getvalues->getTableRows('class','teacher_id =',$this->session->userdata('id'),'id');
    if (isset($_POST['submit'])) {
        $user = $this->session->userdata('id');
        $this->form_validation->set_rules('item_name','Item name','required');
        $this->form_validation->set_rules('item_content','Item content','required');
        if ($this->form_validation->run() == TRUE) {
            $arr = array(
                'teacher_id'=> $user,
                'item_name'=>$this->input->post('item_name'),
                'class_id'=>  $this->input->post('class_id'),
                'item_content'=>$this->input->post('item_content'),
            );
        $confirm = $this->model_insertvalues->addItem($arr,"item");
        if($confirm) 
                {
        $this->session->set_flashdata("success",'<div class="alert alert-success">strong>Well done!</strong> Item  Added Successfully. </div>');
                            redirect("index.php/teacher_es/add_item");
                } 
                else{
                    $this->session->set_flashdata("error",'<div class="alert alert-danger "><strong>Oh snap!</strong> Change a few things up and                                     try submitting again.</div>');
                    redirect("index.php/teacher_es/add_item","refresh");
                    }
                } 
            }  
    $this->load->view('teacher/item', $data);
    $this->load->view('teacher/footer');
 }

public function item_list(){
  $this->load->view('teacher/header');
  $this->load->view('teacher/nav');
  $this->load->view('teacher/aside');
  $data['item'] = $this->model_getvalues->getTableRows('item','teacher_id =',$this->session->userdata('id'),'id');
  $this->load->view('teacher/itemlist', $data);
  $this->load->view('teacher/footer');
}  

  public function delete_item($id){
         $deleted = $this->model_deletevalues->deletestuff('item','id',$id);
       if ($deleted) {
          $this->session->set_flashdata("success",'<div class="alert alert-success >
              <strong>Good!</strong> Item Deleted Successfully
            </div>');
            redirect("index.php/teacher_es/item_list");
       }
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
