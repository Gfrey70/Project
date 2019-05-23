<?php defined('BASEPATH')OR exit('Error');
/**
 * controller for the user
 */
class userctrl extends CI_controller
{

  function __construct()
  {
    // code...
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Users');
  }
  function userview()
  {
    $this->load->view('head');
    $this->load->view('user_dashboard');
    $this->load->view('footer');
  }

  function userLogin()
  {
    $email = $this->input->post('email');
    $password = md5($this->input->post('password'));
    $userData = $this->Users->userAuthenticates($email,$password);

    if ($userData) {
        $this->session->set_userdata('isSessionThere',true);
        $this->session->set_userdata('dataprofile',$userData);
        redirect('adminpanel/user');
      }else{
        $this->session->set_flashdata('error_message', 'Please Try again.');
        redirect("go/home");
    }

  }

  function userLogout()
  {
    $this->session->sess_destroy();
		redirect('go/home','refresh');
  }

}
 ?>
