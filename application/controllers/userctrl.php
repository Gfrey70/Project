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
  }
  function userview()
  {
    $this->load->view('head');
    $this->load->view('user_dashboard');
    $this->load->view('footer');
  }
}
 ?>
