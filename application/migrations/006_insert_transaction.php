<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_insert_transaction extends CI_Migration {

    public function up()
    {
        $transactionSeed = array(
                array(
                        'nama' => 'Yuzaki Nasa',
                        'nomorhp' => '082336535175',
                        'operator' => 'AS',
                        'nominal' => 50000,
                ),
                array(
                        'nama' => 'BrandonKent Diamond',
                        'nomorhp' => '0813150556258',
                        'operator' => 'AS',
                        'nominal' => 100000,
                ),
                array(
                        'nama' => 'Modadi Joki',
                        'nomorhp' => '087832270678',
                        'operator' => 'XL',
                        'nominal' => 25000,
                )
        );
        $this->db->insert_batch('transaksi', $transactionSeed);
    }

    public function down()
    {
        $this->db->empty_table('transaksi');
    }
}