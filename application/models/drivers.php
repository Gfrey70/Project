<?php defined('BASEPATH')OR exit('Error');

class drivers extends CI_model{
    function insertDriver($data){
        $this->db->insert('drivers',$data);
    }
    function driverAuthenticates($email,$password){
        $filter = array('email' => $email, 'password'=>$password);
        $this->db->select('*');
        $this->db->from('drivers');
        $this->db->where($filter);
        $data = $this->db->get();
        if ($data) {
            return $data->row_array();
        }else{
            return false;
        }
    }
}
