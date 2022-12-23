<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Toko extends MY_Controller
{
  public function index()
  {
    $this->data['slider'] = $this->db->get('tbl_slider_hero_toko')->result();
    $this->data['toko'] = $this->db->get('tbl_toko')->result();

    $this->middle = 'content/v_toko'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout();
  }

  public function detail_toko()
  {


    $this->data['slider'] = $this->db->get('tbl_slider_hero_toko')->result();

    $slug = $this->uri->segment(3);
    $toko = $this->db->get_where('tbl_toko', array('slug' => $slug));
    $this->data['toko'] = $toko->row();

    if ($toko->num_rows() > 0) {

      $this->db->order_by('id', 'desc');
      // $this->db->limit('4');
      $this->data['recent'] = $this->db->get('tbl_toko');
      $this->middle = 'content/v_toko_detail';
      $this->layout();
    } else {
      redirect(base_url() . 'toko');
    }
  }
}
