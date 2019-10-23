<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index()
    {
        $data['title'] = "Page 1";
        $data['top'] = "Page One";
        $data['content'] = "pages/prime";
        $this->load->view("template/template", $data);
    } //?end of index

    public function prime2()
    {
        $data['title'] = "Page 2";
        $data['top'] = "Top of Two";
        $data["content"] = "pages/prime2";
        $this->load->view("template/template", $data);
    }  //?End of Page 2


} /* End of file Pages.php */


