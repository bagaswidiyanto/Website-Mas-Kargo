<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Prices extends MY_Controller
{

  public function index()
  {
    $this->data['hero'] = $this->db->get_where('tbl_slider', array('posisi' => 'About Us'))->result();

    $this->data['dari'] = $this->input->post('dari');
    $this->data['tujuan'] = $this->input->post('tujuan');
    $this->data['berat'] = $this->input->post('berat');


    $this->middle = 'content/v_ongkir'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout();
  }
}
