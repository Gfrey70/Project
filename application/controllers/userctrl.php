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
    $this->load->model('Tips');
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
    $userData = $this->session->userdata('dataprofile');
    $data['userlist'] = $this->Users->getAllUsers();
    // $data['tipslist'] = $this->Tips->getTips();
    $data['userdata'] = $userData;
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
        echo '<pre>';
        print_r($userData['rolename']);

        if($userData['rolename'] == 'owner'){

          redirect('tipsctrl/tipsview');

        }else if($userData['rolename'] == 'admin'){

          redirect('user/panel');

        }
        //die();
      }else{
        $this->session->set_flashdata('error_message', 'Please Try again, Password or email is incorrect');
        redirect("go/home");
    }

  }

  function owner_register(){
    $data = $this->input->post('owner');
    $data['password'] = md5($this->input->post('password'));
    $data['rolename'] = 'owner';
    $this->Users->ownerRegister($data);
    redirect('go/home');
  }

  function userLogout()
  {
    $this->session->sess_destroy();
		redirect('go/home','refresh');
  }

}
 ?>
