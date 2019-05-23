<?php defined('BASEPATH')OR exit('Error');
/**
 *
 */
class Users extends CI_model
{
  function userAuthenticates($email,$password)
  {
    $filter = array('email' => $email, 'password'=>$password);
    $this->db->select('*');
    $this->db->from('users');
    $this->db->where($filter);
    $data = $this->db->get();
    if ($data) {
      return $data->row_array();
    }else{
      return false;
    }
  }
}
 ?>
