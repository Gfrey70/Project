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
  function registerUser()
  {
    $userdata = $this->input->post('user');
    $userdata['password'] = md5($userdata['lname']);
    $this->Users->insertUser($userdata);
    redirect('user/panel');
  }
  function userview()
  {
    $data['userlist'] = $this->Users->getAllUsers();
    $this->load->view('head');
    $this->load->view('user_dashboard',$data);
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
        redirect('user/panel');
      }else{
        $this->session->set_flashdata('error_message', 'Please Try again, Password or email is incorrect');
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
