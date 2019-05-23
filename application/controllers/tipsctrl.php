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
    $this->load->model('Tips');
  }
  function inserttips()
  {
    $data = $this->input->post('tips');
    $data['addedby'] = $this->session->userdata['dataprofile']['id'];
    $this->Tips->setTips($data);
    redirect('tips/panel');
  }
  function tipsview()
  {
    $data['tipslist'] = $this->Tips->getTips();
    $this->load->view('head');
    $this->load->view('tips_dashboard',$data);
    $this->load->view('footer');
  }
}
 ?>
