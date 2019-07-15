<?php defined('BASEPATH')OR exit('Error');
/**
 *
 */
class Garage extends CI_model
{

  function insertOwner($data)
  {
    $this->db->insert('users',$data);
  }
  function insertDriver($data)
  {
    $this->db->insert('drivers',$data);
  }
  function getDrivers()
  {
    $this->db->select('*');
    $this->db->from('drivers');
    $data = $this->db->get();
    if ($data) {
      return $data->result();
    }else{
      return false;
    }
  }
  function saveGarage($data){
    $this->db->insert('cargarages',$data);
  }
  function getGarages($userId=""){
    $this->db->select('*');
    $this->db->from('cargarages');
    if($userId){
      $this->db->where('users_id',$userId);
    }
    $data = $this->db->get();
    if ($data) {
      return $data->result();
    }else{
      return false;
    }
  }
  function saveFeedback($data){
    $this->db->insert('feedback',$data);
  }
  function getFeedback($id){
    $this->db->select('*');
    $this->db->from('feedback');
    $this->db->where('cargarageid',$id);
    $data = $this->db->get();
    return $data->result();
  }
  function getGarage($id){
    $this->db->select('*');
    $this->db->from('cargarages');
    $this->db->where('id',$id);
    $data = $this->db->get();
    $data = $data->result_array();
    return $data[0];
  }
}
 ?>
