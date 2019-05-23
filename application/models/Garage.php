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
}
 ?>
