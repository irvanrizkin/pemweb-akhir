<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('migration');
    }

	public function index()
	{
        $migrations = $this->migration->find_migrations();
        $data['migrations'] = $migrations;
		$this->load->view('migration_confirm', $data);
    }
    
    public function migrate_confirm()
    {
        $result = $this->input->post('confirm');
        if (isset($result)) {
            $migrations = $this->migration->find_migrations();
            foreach ($migrations as $key => $value) {
                $this->migration->version($key);
                echo "$key migrated<br>";
            }
        }
    }
}
