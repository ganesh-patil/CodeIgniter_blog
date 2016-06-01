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
        $data['partial'] = 'blog_listing';
        $this->load_view($data);
    }
}