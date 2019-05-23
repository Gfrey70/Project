<?php defined('BASEPATH')OR exit('Error');
/**
 * controller for the user
 */
class tipsctrl extends CI_controller
{

  function __construct()
  {
    // code...
    parent::__construct();
    $this->load->helper('url');
  }
  function tipsview()
  {
    $this->load->view('head');
    $this->load->view('tips_dashboard');
    $this->load->view('footer');
  }
}
 ?>
