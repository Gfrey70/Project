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
  function driverview()
  {
    $this->load->view('head');
    $this->load->view('driver_dashboard');
    $this->load->view('footer');
  }
  function ownerview()
  {
    $this->load->view('head');
    $this->load->view('owner_dashboard');
    $this->load->view('footer');
  }
  function garageview()
  {
    $this->load->view('head');
    $this->load->view('garage_dashboard');
    $this->load->view('footer');
  }
}
 ?>
