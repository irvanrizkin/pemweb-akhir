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
                $this->session->set_userdata($user);                
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
    
    public function admin()
    {
        $this->load->view('adminPanel');
    }

    public function history()
    {        
        $this->load->model('model_transaksi');
        $transaksi['transaksi'] = $this->model_transaksi->get_transaksi_all();                
        $this->load->view('transactionHistory',$transaksi);
    }
}
