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
    $this->load->model('Users');
    $this->load->model('Garage');
  }
  function registerOnwer()
  {
    $userdata = $this->input->post('user');
    $userdata['password'] = md5($userdata['lname']);
    $this->Garage->insertOwner($userdata);
    redirect('garage/ownerpanel');
  }
  function registerDriver()
  {
    $driver = $this->input->post('driver');
    $this->Garage->insertDriver($driver);
    redirect('garage/driverpanel');
  }
  function driverview()
  {
    $data['driverlist'] = $this->Garage->getDrivers();
    $this->load->view('head');
    $this->load->view('driver_dashboard',$data);
    $this->load->view('footer');
  }
  function ownerview()
  {
    $data['ownerlist'] = $this->Users->getOwnerList();
    $this->load->view('head');
    $this->load->view('owner_dashboard',$data);
    $this->load->view('footer');
  }
  function insertGarage()
  {
    $gDetails = $this->input->post('garage');
    $this->Garage->saveGarage($gDetails);
    redirect('garage/panel');
  }
  function garageview()
  {
    $data['ownerlist'] = $this->Users->getOwnerList();
    $data['garagelist'] = $this->Garage->getGarages();
    $this->load->view('head');
    $this->load->view('garage_dashboard',$data);
    $this->load->view('footer');
  }
}
 ?>
