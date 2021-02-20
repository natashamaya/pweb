<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class Jokes extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('jokes_model');
  }
  public function jokesdetail_get()
  {
    $where='';
    if (null !== $this->get('ID')) {
      $jokes =$this->get('ID');
      $where ="ID LIKE '" . $jokes ."'";
    }
    $data=$this->jokes_model->jokesdetail($where);
    $this->response(['jokesDetail'=>$data],200);
  }
}

?>
