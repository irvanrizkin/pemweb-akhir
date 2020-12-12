<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_transaksi extends CI_Model {
    public function create_transaksi($data)
    {
        return $this->db
                ->insert('transaksi',$data);
    }

    public function get_transaksi_all()
    {
        return $this->db
                ->get('transaksi')
                ->result_array();
                                
    }

    public function get_transaksi_by_id($id)
    {
        return $this->db
                ->get('transaksi',['id_transaksi' => $id])
                ->result_array();                
    }

    public function update_transaksi($id,$data)
    {
        return $this->db
                ->where('id_transaksi' , $id)
                ->update('transaksi',$data)
                ->affected_rows();
    }

    public function delete_transaksi_all()
    {   
        return $this->db
                ->delete('transaksi')
                ->affected_rows();
    }

    public function delete_transaksi_by_id($id)
    {
        return $this->db
                ->where('id_transaksi' , $id)
                ->delete('transaksi');                
    }

}
