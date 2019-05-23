<?php defined('BASEPATH')OR exit('Error');
/**
 * controller for the user
 */
class garagectrl extends CI_controller
{

  function __construct()
  {
    // code...
    parent::__construct();
    $this->load->helper('url');
  }
  function garageview()
  {
    $this->load->view('head');
    $this->load->view('garage_dashboard');
    $this->load->view('footer');
  }
}
 ?>
