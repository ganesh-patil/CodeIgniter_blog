<?php


require_once APPPATH . 'third_party/community_auth/core/Auth_Controller.php';
class MY_Controller extends Auth_Controller {

    public function __construct()
    {

        parent::__construct();

    }

    public function load_view($data)
    {
        $this->load->helper('html');
        $this->load->view('default', $data);
        $this->output->enable_profiler(TRUE);
    }

}