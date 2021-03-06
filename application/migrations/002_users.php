<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Users extends CI_Migration {
    public function up(){
        $this->dbforge->add_field(array(
                'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '100'
            ),
            'created_at' => array(
                'type' => 'DATE'
            ),
            'updated_at' => array(
                'type' => 'DATE',
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
    }

    public function down(){
        $this->dbforge->drop_table('users');
    }
}