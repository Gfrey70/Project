<?php defined('BASEPATH')OR exit('Error');
/**
 * controller for home control
 */
class homectrl extends CI_controller
{

  function __construct(){
    // code...
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Tips');
  }
  function index(){
    $data['tips'] = $this->Tips->getTips();
    $this->load->view('head');
    $this->load->view('homepanel',$data);
    $this->load->view('footer');
  }
}
 ?>
