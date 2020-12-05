<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_insert_operator extends CI_Migration {

    

    public function up()
    {
        $operatorSeed = array(
            array(
                    'namaoperator' => 'Halo',
                    'prefiks' => '0811'
            ),
            array(
                    'namaoperator' => 'Simpati',
                    'prefiks' => '0812'
            ),
            array(
                    'namaoperator' => 'Simpati',
                    'prefiks' => '0813'
            ),
            array(
                    'namaoperator' => 'Simpati',
                    'prefiks' => '0821'
            ),
            array(
                    'namaoperator' => 'Simpati',
                    'prefiks' => '0822'
            ),
            array(
                    'namaoperator' => 'AS',
                    'prefiks' => '0852'
            ),
            array(
                    'namaoperator' => 'AS',
                    'prefiks' => '0853'
            ),
            array(
                    'namaoperator' => 'AS',
                    'prefiks' => '0823'
            ),
            array(
                    'namaoperator' => 'AS',
                    'prefiks' => '0851'
            ),
            array(
                    'namaoperator' => 'Indosat M2 Broadband',
                    'prefiks' => '0814'
            ),
            array(
                    'namaoperator' => 'Matrix',
                    'prefiks' => '0815'
            ),
            array(
                    'namaoperator' => 'Matrix',
                    'prefiks' => '0816'
            ),
            array(
                    'namaoperator' => 'Matrix',
                    'prefiks' => '0855'
            ),
            array(
                    'namaoperator' => 'IM3',
                    'prefiks' => '0856'
            ),
            array(
                    'namaoperator' => 'IM3',
                    'prefiks' => '0857'
            ),
            array(
                    'namaoperator' => 'Mentari',
                    'prefiks' => '0858'
            ),
            array(
                    'namaoperator' => 'XL',
                    'prefiks' => '0817'
            ),
            array(
                    'namaoperator' => 'XL',
                    'prefiks' => '0818'
            ),
            array(
                    'namaoperator' => 'XL',
                    'prefiks' => '0819'
            ),
            array(
                    'namaoperator' => 'XL',
                    'prefiks' => '0859'
            ),
            array(
                    'namaoperator' => 'XL',
                    'prefiks' => '0877'
            ),
            array(
                    'namaoperator' => 'XL',
                    'prefiks' => '0878'
            ),
            array(
                    'namaoperator' => 'Axis',
                    'prefiks' => '0838'
            ),
            array(
                    'namaoperator' => 'Axis',
                    'prefiks' => '0831'
            ),
            array(
                    'namaoperator' => 'Axis',
                    'prefiks' => '0832'
            ),
            array(
                    'namaoperator' => 'Axis',
                    'prefiks' => '0833'
            ),
            array(
                    'namaoperator' => '3',
                    'prefiks' => '0895'
            ),
            array(
                    'namaoperator' => '3',
                    'prefiks' => '0896'
            ),
            array(
                    'namaoperator' => '3',
                    'prefiks' => '0897'
            ),
            array(
                    'namaoperator' => '3',
                    'prefiks' => '0898'
            ),
            array(
                    'namaoperator' => '3',
                    'prefiks' => '0899'
            ),
            array(
                    'namaoperator' => 'Smartfren',
                    'prefiks' => '0881'
            ),
            array(
                    'namaoperator' => 'Smartfren',
                    'prefiks' => '0882'
            ),
            array(
                    'namaoperator' => 'Smartfren',
                    'prefiks' => '0883'
            ),
            array(
                    'namaoperator' => 'Smartfren',
                    'prefiks' => '0884'
            ),
            array(
                    'namaoperator' => 'Smartfren',
                    'prefiks' => '0885'
            ),
            array(
                    'namaoperator' => 'Smartfren',
                    'prefiks' => '0886'
            ),
            array(
                    'namaoperator' => 'Smartfren',
                    'prefiks' => '0887'
            ),
            array(
                    'namaoperator' => 'Smartfren',
                    'prefiks' => '0888'
            ),
            array(
                    'namaoperator' => 'Smartfren',
                    'prefiks' => '0889'
            )
        );
        $this->db->insert_batch('operator', $operatorSeed);
    }

    public function down()
    {
        $this->db->empty_table('operator');
    }
}