<?php defined('BASEPATH')OR exit('Error');
/**
 *
 */
class Tips extends CI_model
{
  function setTips($data)
  {
    $this->db->insert('mainttips',$data);
  }
  function getTips()
  {
    $this->db->select('*');
    $this->db->from('mainttips');
    $list = $this->db->get();
    if ($list) {
    return $list->result();
  }else{
    return false;
  }
  }
}
 ?>
