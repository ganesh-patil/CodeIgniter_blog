<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    /**
     * Blog listing.
     *
     */
    public function index()
    {
        log_message('debug', 'In Index page ');
        $this->load->model('post_model');
       
        $this->load->library('pagination');

        $config['base_url'] = base_url().'/blog';
        $config['total_rows'] = $this->post_model->record_count();
        $config['per_page'] = 2;
//        $config["uri_segment"] = 2;
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $posts = $this->post_model->get_posts($config['per_page'],$page);
        $this->pagination->initialize($config);
        $data['partial'] = 'blog_listing';
        $data['posts']   = $posts;
        $this->load_view($data);
    }

    /**
     * Create post .
     *
     */
    public function create_post()
    {
        $this->load->helper('form','url');
        if($this->input->method() == 'post') {
            $this->load->model('post_model');
            if($this->post_model->check_is_valid_data()){
                $postData = $this->getPostInputData();
                $this->load->model('post_model');
                if($this->post_model->insert_entry($postData)){
                    $this->session->set_flashdata('success', 'Post added successfully.');
                     redirect(base_url());
                }
            }
        }
        $data['partial'] = 'create_post';
        $this->load_view($data);
    }

    private function getPostInputData(){
        $postData['post_title'] = $this->input->post('post_title','');
        $postData['post_description'] = $this->input->post('post_description','');
        return $postData;
    }
}