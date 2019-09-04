<?php
/**
 * Created by PhpStorm.
 * User: Mussawar Ahamd
 * Date: 31/8/2019
 * Time: 4:10 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_transaction_types extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'transaction_name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('transaction_types');
    }

    public function down()
    {
        $this->dbforge->drop_table('transaction_types');
    }
}