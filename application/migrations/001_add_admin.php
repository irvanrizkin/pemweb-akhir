<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_admin extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id_admin' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => 30,
                'null' => FALSE
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => FALSE
            )
        ));
        $this->dbforge->add_key('id_admin', TRUE);
        $this->dbforge->create_table('admin', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('admin');
    }
}