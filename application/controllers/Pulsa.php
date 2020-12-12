<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pulsa extends CI_Controller 
{
    public function index() {
        $this->load->model('model_transaksi');
        $transaksi['transaksi'] = $this->model_transaksi->get_transaksi_all();                
        $this->load->view('homePage',$transaksi);
    }

    public function login()
    {           
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        
        if($this->form_validation->run() == false){
            $this->load->view('SigninPage');
        }else{
            $this->_login();            
        }


    }

    private function _login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');        

        $this->load->model('model_admin');
        $user = $this->model_admin->get_admin_by_username($username);                                                               
        if($username === $user['username']){            
            if(password_verify($password,$user['password']) || $password === $user['password']){
                $this->session->set_userdata('user',$user);                
                redirect('Pulsa/admin');
            }else{
                $this->session->set_flashdata('message','<p style="color:red">Password salah','</p>');
                redirect('Pulsa/login');                
            }
        }else{
            $this->session->set_flashdata('message','<p style="color:red">username salah','</p>');
            redirect('Pulsa/login');
        }

    }

    public function transaksi()
    {                
        $this->load->view('formTransaksi');        
    }

    public function transaksi_process()
    {
        $name = $this->input->post('cus_name');
        $phone = $this->input->post('phoneNumber');
        $operator = $this->input->post('operator');
        $nominal = $this->input->post('nominal');
        $data = [
            'nama' => $name,
            'nomorhp' => $phone,
            'operator' => $operator,
            'nominal' => $nominal
        ];
        $this->load->model('model_transaksi');
        $this->model_transaksi->create_transaksi($data);           
    }
    
    public function admin()
    {
        $sess = $this->session->userdata('user');
        if(isset($sess)){                
            $this->load->model('model_transaksi');
            $transaksi['transaksi'] = $this->model_transaksi->get_transaksi_all();
            $this->load->view('adminPanel',$transaksi);
        }else{
            redirect('Pulsa/login');
        }
    }

    public function history()
    {        
        $sess = $this->session->userdata('user');
        if(isset($sess)){  
            $this->load->model('model_transaksi');
            $transaksi['transaksi'] = $this->model_transaksi->get_transaksi_all();                
            $this->load->view('transactionHistory',$transaksi);
        }else{
            redirect('Pulsa/login');
        }
        
    }

    public function logout()
    {
        $sess = $this->session->userdata('user');
        if(isset($sess)){  
            $this->session->unset_userdata('user');
        }
        redirect('http://localhost/pemweb-akhir');        
    }

    public function edit($id){
        if(isset($sess)){  
            $data['id'] = $id;
            $this->load->view('pageEdit',$data);        
        }else{
            redirect('Pulsa/login');
        }
    }

    public function edit_process(){
        if(isset($sess)){  
            $id = $this->input->post('id');
            $name = $this->input->post('cus_name');
            $phone = $this->input->post('phoneNumber');
            $operator = $this->input->post('operator');
            $nominal = $this->input->post('nominal');
            $data = [
                'nama' => $name,
                'nomorhp' => $phone,
                'operator' => $operator,
                'nominal' => $nominal
            ];
            $this->load->model('model_transaksi');
            $this->model_transaksi->update_transaksi($id,$data);
        }else{
            redirect('Pulsa/login');
        }

    }

    public function delete($id){        
        if(isset($sess)){  
            $this->load->model('model_transaksi');
            $this->model_transaksi->delete_transaksi_by_id($id);        
            redirect('Pulsa/history');
        }else{
            redirect('Pulsa/login');
        }
    }
}
