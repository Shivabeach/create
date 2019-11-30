<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends CI_Model {

  public function get_page()
  {
    $topic = $this->uri->segment(3);
    $this->db->select("date, data, topic");
    $this->db->where("topic", $topic);
    $this->db->order_by("date", "desc");
    $query = $this->db->get("data");
    return $query->result();
  }

}

/* End of file CreateModel.php */
