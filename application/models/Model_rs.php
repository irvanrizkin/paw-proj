<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rs extends CI_Model {
    public function getAllRumahSakit(){
        return $this->db
            ->get('rumah_sakit')
            ->result();
    }

    public function getRumahSakitById($id){
        return $this->db
            ->get_where('rumah_sakit', array('id' => $id))
            ->result();
    }

    public function createRumahSakit($data){
        $this->db
            ->insert('rumah_sakit', $data);
    }

    public function updateRumahSakit($id, $data){
        $this->db
            ->where('id', $id)
            ->update('rumah_sakit', $data);
    }

    public function deleteRumahSakit($id){
        $this->db
            ->where('id', $id)
            ->delete('rumah_sakit');
    }
}