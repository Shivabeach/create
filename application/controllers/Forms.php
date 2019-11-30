<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

  public function inputs()
  {
    $data = [
      'data' => trim($this->input->post("data")),
      'date' => trim($this->input->post("date")),
      'topic' => trim($this->input->post('topic'))
    ];

    $this->form_validation->set_rules('data', 'Data', 'required');
    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('topic', 'Topic', 'required');

    if( $this->form_validation->run() == FALSE) {
			echo validation_errors();
		}else
		{
      $this->db->insert('data', $data);
      echo "Success";
    }

  }
}

/* End of file Forms.php */
