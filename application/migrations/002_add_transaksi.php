<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_transaksi extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id_transaksi' => array(
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => FALSE
            ),
            'nomorhp' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => FALSE
            ),
            'operator' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => FALSE
            ),
            'nominal' => array(
                'type' => 'INT',
                'constraint' => 10,
                'null' => FALSE
            )
        ));
        $this->dbforge->add_key('id_transaksi', TRUE);
        $this->dbforge->create_table('transaksi', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('transaksi');
    }
}