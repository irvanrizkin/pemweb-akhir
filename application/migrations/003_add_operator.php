<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_operator extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id_operator' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'namaoperator' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => FALSE
            ),
            'prefiks' => array(
                'type' => 'INT',
                'constraint' => 10,
                'null' => FALSE
            )
        ));
        $this->dbforge->add_key('id_operator', TRUE);
        $this->dbforge->create_table('operator', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('operator');
    }
}