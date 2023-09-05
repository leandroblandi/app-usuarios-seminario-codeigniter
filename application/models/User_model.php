
<?php
  
  class User_Model extends CI_Model {

    public function __construct() {
      $this->load->database();
    }

    // Obtiene los todos los usuarios
    public function getAll() {
      $query = $this->db->get('users');
      return $query->result_array();
    }

    // Busca un usuario por id
    public function findOne($id) {
      $query = $this->db->get_where('users', array('id' => $id), 1);
      return $query->row_array();
    }

    // Chequea las credenciales de un usuario
    // Para implementar un login
    public function checkCredentials($username, $password) {
      $query = $this->db->get_where('users', 
        array(
          'username' => $username, 
          "password" => $password
        ), 
      1);
      return $query->row_array();
    }

    // Guarda un usuario en la BBDD
    public function saveUserOnDB($data) {
      if($data != null) {
        return $this->db->insert('users', $data);
      }
    }

    public function updateUser($id, $data) {

      if($data != null) {
        return $this->db->update('users', $data, array('id' => $id));
      }
    }

    public function deleteUserFromDB($id) {
      if($id != null) {
        return $this->db->delete('users', array('id' => $id));
      }
    }

    public function deleteAllUsers() {
      return $this->db->empty_table('users');
    }
  }
?>