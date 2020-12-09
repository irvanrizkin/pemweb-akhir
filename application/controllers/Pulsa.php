<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pulsa extends CI_Controller 
{
    public function index() {
        $this->load->view('homePage');
    }

    public function login()
    {
        $this->load->view('SigninPage');
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
        $this->load->view('transactionHistory');
    }
}
