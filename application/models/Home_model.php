<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();

    }
    
    public function insertResult($array = null) {
        $this->db->insert('users', $array);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function getUsers() {
        $query = $this->db->get('users');
        return $query->result();
    }

    public function updateUser($id) {
        $this->db->where('id', $id);
        $query = $this->db->get("users");

        if($query->num_rows() > 0){
            return $query->result();
        } else {
            return false;
        }

    }

    public function updateDetails($id, $data){
        $this->db->where("id", $id);
        $this->db->update("users", $data);

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($id) {
        $this->db->where("id", $id);
        $this->db->delete("users");

        if($this->db->affected_rows() > 0){
            return true;
        } else {
            return false;
        }
    }

}


 
