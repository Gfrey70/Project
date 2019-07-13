<?php defined('BASEPATH')OR exit('error');


class driversctrl extends CI_controller{
    function __construct(){
    // code...
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Users');
    $this->load->model('Garage');
    $this->load->model('drivers');
  }

  function saveDriver(){
      $dataform = $this->input->post('driver');
      $dataform['password'] = md5($this->input->post('password'));
      $dataform['rolename'] = 'driver';
      $this->drivers->insertDriver($dataform);
      redirect('go/home');
  }
  function login(){
      $email = $this->input->post('email');
      $password = md5($this->input->post('password'));
      $userData = $this->drivers->driverAuthenticates($email,$password);
    if ($userData) {
        $this->session->set_userdata('isSessionThere',true);
        $this->session->set_userdata('dataprofile',$userData);

        if($userData['rolename'] == 'driver'){
          redirect('garage/list');
        };
        //die();
      }else{
        $this->session->set_flashdata('error_message', 'Please Try again, Password or email is incorrect');
        redirect("go/home");
    }

  }
}
?>