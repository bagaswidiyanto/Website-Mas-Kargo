<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Testimoni extends MY_Controller
{
  public function index()
  {

    $slugId = $this->uri->segment(2);
    $this->data['testi'] = $this->db->get_where('tbl_testimoni', array('id' => $slugId))->row();
    $this->middle = 'content/v_testimoni_detail'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout();
  }

  public function detail()
  {

    $slugId = $this->uri->segment(3);
    $this->data['testi'] = $this->db->get_where('tbl_testimoni', array('id' => $slugId))->row();
    $this->middle = 'content/v_testimoni_detail'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

    $this->layout();
  }
}