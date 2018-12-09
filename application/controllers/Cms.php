<?php    
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('cms_model');
        $this->load->model('crud_model');
        $this->load->library('util');
    }

    public function index()
    {   
        // $this->util->has_logged('log');

        $data = array(
            'section' => 'login/index', 
        );

        $this->load->view('index', $data);
    }

    public function dashboard()
    {
        $data = array(
            'section' => 'dashboard', 
        );

        $this->load->view('main', $data);
    }

}

/* End of file Cms.php */
    