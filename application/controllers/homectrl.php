<?php defined('BASEPATH')OR exit('Error');
/**
 * controller for home control
 */
class homectrl extends CI_controller
{

  function __construct()
  {
    // code...
    parent::__construct();
    $this->load->helper('url');
  }
  function index()
  {
    $this->load->view('head');
    $this->load->view('homepanel');
    $this->load->view('footer');
  }
}
 ?>
