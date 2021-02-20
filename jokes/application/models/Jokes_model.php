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

  public function jokeslist()
  {
    $query = $this->db->get('daftarjokes');
    return $query->result();
  }

  public function jokesdetail($where='')
  {
    $this->db->join('daftarjokes d', 'ON(d.kode = j.ID)');
    if ( $where != '' ) $this->db->where( $where );
    $query = $this->db->get('jokes j');
    return $query->result();
  }

}

 ?>
