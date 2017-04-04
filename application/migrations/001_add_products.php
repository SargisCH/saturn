<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_products extends CI_Migration {
    public function up(){
        $this->dbforge->add_field(array(
		      'id' => array(
		      'type' => 'INT',
		      'constraint' => 5,
              'unsigned' => TRUE,
		      'auto_increment' => TRUE
		       ),
		      'title' => array(
		      'type' => 'VARCHAR',
              'constraint' => '100',
		      ),
		      'description' => array(
		      'type' => 'TEXT',
		      'null' => TRUE,
		          ),
              'image_url' => array(
		      'type' => 'TEXT',
		      'null' => TRUE,
		          ),
              'views' => array(
		      'type' => 'INT',
		      'constraint' => 5,
		       ),
		      ));
		      $this->dbforge->add_key('id', TRUE);
		      $this->dbforge->create_table('products');
		}

		public function down(){
		        $this->dbforge->drop_table('blog');
		} 
}