<?php
class Post_model extends CI_Model {

    public function __construct()
    {
        // Call the CI_Model constructor
        $this->load->database();
        parent::__construct();
    }

    public function get_posts($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        $query = $this->db->get('post');
        return $query->result();
    }

    public function insert_entry($data)
    {

        return $this->db->insert('post', $data);
    }

    public function record_count() {
        return $this->db->count_all("post");
    }

    public function update_entry()
    {


//        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}