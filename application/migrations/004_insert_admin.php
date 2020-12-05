<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_insert_admin extends CI_Migration {

    public function up()
    {
        $adminSeed = array(
            array(
                    'username' => 'admin_nohash',
                    'password' => 'admin'
            ),
            array(
                    'username' => 'admin',
                    'password' => '8C6976E5B5410415BDE908BD4DEE15DFB167A9C873FC4BB8A81F6F2AB448A918'
            )
        );
        $this->db->insert_batch('admin', $adminSeed);
    }

    public function down()
    {
        $this->db->empty_table('admin');
    }
}