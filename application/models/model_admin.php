<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model {
    public function create_admin($data)
    {
        return $this->db
                ->insert('admin',$data)
                ->affected_rows();
    }

    public function get_admin_all()
    {
        return $this->db
                ->get('admin');                
    }

    public function get_admin_by_id($id)
    {
        return $this->db
                ->get('admin',['id_admin' => $id]);                
    }

    public function update_admin($id,$data)
    {
        return $this->db
                ->where('id_admin' , $id)
                ->update('admin',$data)
                ->affected_rows();
    }

    public function delete_admin_all()
    {   
        return $this->db
                ->delete('admin')
                ->affected_rows();
    }

    public function delete_admin_by_id($id)
    {
        return $this->db
                ->where('id_admin' , $id)
                ->delete('admin')
                ->affected_rows();
    }
}