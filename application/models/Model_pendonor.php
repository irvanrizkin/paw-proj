<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pendonor extends CI_Model{
    public function getAllPendonor(){
        return $this->db
            ->get('pendonor')    
            ->result();
    }

    public function getPendonorLimitBy($limit){
        return $this->db
            ->get('pendonor',$limit)
            ->result();
    }

    public function getLeaderboardLimitBy($limit){
        return $this->db
            ->order_by('jumlah_donor,desc')
            ->get('pendonor',$limit)
            ->result();
    }

    public function getPendonorByNIK($nik){
        return $this->db
            ->get_where('pendonor', array('nik' => $nik))
            ->result();
    }

    public function createPendonor($data){
        $this->db
            ->insert('pendonor', $data);
    }

    public function updatePendonor($id, $data){
        $this->db
            ->where('id', $id)
            ->update('pendonor', $data);
    }

    public function deleteRumahSakit($id){
        $this->db
            ->where('id', $id)
            ->delete('pendonor');
    }



}