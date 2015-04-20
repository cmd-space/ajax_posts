<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {
  public function index_html()
  {
  	$this->load->model('Note');
  	$data['notes'] = $this->Note->all();
  	$this->load->view('partials/notes', $data);
  }

  public function index()
  {
    $this->load->model('Note');
    $this->load->view('index');
  }
}

//end of main controller
