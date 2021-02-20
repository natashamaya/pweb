<?php

/**
 *
 */
class Jokes_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();

  }
  public function jokesdetail($where='')
  {
    if($where!='')$this->db->where($where);
    $query=$this->db->get('jokes');
    return $query->result();
  }
}




 ?>
