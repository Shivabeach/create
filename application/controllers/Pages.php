<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index()
    {
        $data['title'] = "Page 1";
        $data['top'] = "Page One";
        $data['content'] = "pages/prime";


        $this->load->view("template/template", $data);
    } //end of index

} /* End of file Pages.php */


