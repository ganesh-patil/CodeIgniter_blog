<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Blog listing.
     *
     */
    public function index()
    {
        $this->load->database();
        $data['partial'] = 'blog_listing';
        $this->load_view($data);
    }

    /**
     * Create post .
     *
     */
    public function create_post()
    {
        $this->load->helper('form');

        if($this->input->method() == 'post') {
            $postData = $this->input->post();
            unset($postData['Add_Post']);
            $this->load->database();
            $this->db->insert('post', $postData);
        }
        $data['partial'] = 'create_post';
        $this->load_view($data);
    }
}