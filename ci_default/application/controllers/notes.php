<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {
  public function __construct()
  {
  	parent::__construct();
  	$this->load->model('Note');
  }

  public function index_html()
  {
  	$this->load->model('Note');
  	$data['notes'] = $this->Note->all();
  	$this->load->view('partials/notes', $data);
  }

  public function create()
  {
  	$this->load->model('Note');
  	$note = $this->input->post();
  	$this->Note->create($note);
  	redirect('/');
  }

  public function index()
  {
    $this->load->model('Note');
    $this->load->view('index');
  }
}

//end of main controller
