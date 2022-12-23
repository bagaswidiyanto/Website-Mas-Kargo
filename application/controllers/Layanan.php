<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Layanan extends MY_Controller
{
  public function index()
  {
    $this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Layanan', 'aktif' => 'Y'))->row();


    $this->data['layanan'] = $this->db->get('tbl_layanan')->result();
    $this->middle = 'content/v_layanan.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout();
  }


  public function detail_layanan()
  {

    $this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Layanan', 'aktif' => 'Y'))->row();

    $this->data['layanan'] = $this->db->get('tbl_layanan')->result();
    $this->middle = 'content/v_layanan_detail.php'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout();
  }
}
