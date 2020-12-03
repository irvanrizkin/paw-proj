<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
    public function getAllAdmin(){
        return $this->db
            ->get('admin')
            ->result();
    }

    public function getSuperAdmin(){
        return $this->db
            ->get('admin',1)
            ->result()
    }

    public function getAdminById($id_admin){
        return $this->db
            ->get_where('admin', array('id_admin' => $id_admin))
            ->result();
    }

    public function createAdmin($data){
        $this->db
            ->insert('admin', $data);
    }

    public function updateAdmin($id_admin, $data){
        $this->db
            ->where('$id_admin', $id_admin)
            ->update('admin', $data);
    }

    public function deleteAdmin($id_admin){
        $this->db
            ->where('$id_admin', $id_admin)
            ->delete('admin');
    }
}