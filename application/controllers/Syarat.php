<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Syarat extends MY_Controller
{
  public function index()
  {
    $this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Syarat', 'aktif' => 'Y'))->row();
    $this->data['syarat'] = $this->db->get('tbl_syarat_ketentuan')->row();

    $this->middle = 'content/v_syarat_ketentuan'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout();
  }
}
