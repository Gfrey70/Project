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
}
 ?>
