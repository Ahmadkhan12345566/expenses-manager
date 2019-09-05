<?php
/**
 * Migration_roles Class
 *
 * @author       Firoz Ahmad Likhon <likh.deshi@gmail.com>
 * @purpose      Migration.
 */
class Migration_roles extends CI_Migration {

    /**
     * Create table.
     */
    public function up() {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => 128,
            ),
            'display_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 30,
            ),
            'description' => array(
                'type' => 'TINYTEXT',
            ),
            'status' => array(
                'type' => 'TINYINT',
                'constraint' => 1,
                'default' => 1
            ),
            'created_at' => array(
                'type' => 'timestamp',
                'default' => NULL,
            ),
            'updated_at' => array(
                'type' => 'timestamp',
                'default' => NULL,
            ),
            'deleted_at' => array(
                'type' => 'timestamp',
                'default' => NULL,
            ),
        ));
        
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('roles');
    }

    /**
     * Drop table.
     */
    public function down() {
        $this->dbforge->drop_table('roles');
    }

}