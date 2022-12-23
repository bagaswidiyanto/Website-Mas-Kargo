<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Peluangusaha extends MY_Controller
{
  public function index()
  {
    $this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Peluang Usaha', 'aktif' => 'Y'))->row();
    // $this->data['cc'] = $this->db->get('tbl_cash_counter')->result();

    $this->middle = 'content/v_peluang_usaha'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout();
  }

  public function detail_peluang_usaha()
  {


    $this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Peluang Usaha', 'aktif' => 'Y'))->row();

    $slug = $this->uri->segment(3);
    $peluangusaha = $this->db->get_where('tbl_cash_counter', array('slug' => $slug));
    $this->data['peluangusaha'] = $peluangusaha->row();

    if ($peluangusaha->num_rows() > 0) {

      $this->db->order_by('id', 'desc');
      // $this->db->limit('4');
      $this->data['recent'] = $this->db->get('tbl_cash_counter');
      $this->middle = 'content/v_peluang_usaha_detail';
      $this->layout();
    } else {
      redirect(base_url() . 'peluangusaha');
    }
  }
}
