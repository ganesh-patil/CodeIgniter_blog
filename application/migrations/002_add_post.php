<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_post extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'post_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'post_title' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            ),
            'post_description' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'post_date' => array(
                'type' => 'DATE',
                'null' => TRUE,
            ),
            'is_published' => array(
                'type' => 'BOOLEAN',
                'default' => false
            ),
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'null' => TRUE,
            ),
        ));
        $this->dbforge->add_key('post_id', TRUE);
        $this->dbforge->create_table('post');
    }

    public function down()
    {
        $this->dbforge->drop_table('post');
    }
}