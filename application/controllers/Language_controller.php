<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language_Controller extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
  }

    public function changeLanguage($language) {
        $this->session->set_userdata('language', $language);
        redirect($_SERVER['HTTP_REFERER']);
    }
}