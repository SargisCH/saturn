<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_User_products extends CI_Migration {
    public function up(){
        $this->dbforge->add_field(array(
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 5
            ),
            'product_id' => array(
                'type' => 'INT',
                'constraint' => 5
            )
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('user_products');
    }

    public function down(){
        $this->dbforge->drop_table('user_products');
    }
}