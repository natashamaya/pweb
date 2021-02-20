<?php
use Restserver\Libraries\REST_Controller;

/**
 *
 */
class About extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('about_model');
  }
  public function aboutdetail_get()
  {
    $data=$this->about_model->aboutdetail();
    $this->response(['aboutDetail'=>$data],200);
  }
}





?>
