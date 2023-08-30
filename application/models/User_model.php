
<?php
  
  class User_Model extends CI_Model {

    public function __construct() {
      $this->load->database();
    }

    public function getAll() {
      $query = $this->db->get('users');
      return $query->result_array();
    }

    public function saveUserOnDB($data) {
      return $this->db->insert('users', $data);
    }
  }

?>