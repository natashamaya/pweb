<?php

/**
 *
 */
class About_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();

  }
  public function aboutdetail($where='')
  {
    if($where!='')$this->db->where($where);
    $query=$this->db->get('biodata');
    return $query->result();
  }
}




 ?>
