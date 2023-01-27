<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('create');
	}

    public function index()
    {
        $data['title'] = "Page 1";
        $data['top'] = "Journalasity";
        $data['content'] = "pages/prime";
        $this->load->view("template/template", $data);
    } //?end of index

    public function category()
    {
        if($query = $this->create->get_page())
        {
            $data['topics'] = $query;
        }
        $data['content'] = "pages/prime2";
        $data['top'] = ucfirst($this->uri->segment(3));
        $data['title'] = "Topic Page";
        $this->load->view("template/template", $data);
    }

} /* End of file Pages.php */


