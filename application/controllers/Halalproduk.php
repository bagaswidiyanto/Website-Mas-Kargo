<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Halalproduk extends MY_Controller
{
  public function index()
  {
    $this->data['slider'] = $this->db->get('tbl_slider_hero_halal_produk')->result();
    $this->data['halalproduk'] = $this->db->get('tbl_halal_produk')->result();

    $this->middle = 'content/v_halal_produk'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout();
  }

  public function detail_halalproduk()
  {


    $this->data['slider'] = $this->db->get('tbl_slider_hero_halal_produk')->result();

    $slug = $this->uri->segment(3);
    $halalproduk = $this->db->get_where('tbl_halal_produk', array('slug' => $slug));
    $this->data['halalproduk'] = $halalproduk->row();

    if ($halalproduk->num_rows() > 0) {

      $this->db->order_by('id', 'desc');
      // $this->db->limit('4');
      $this->data['recent'] = $this->db->get('tbl_halal_produk');
      $this->middle = 'content/v_halal_produk_detail';
      $this->layout();
    } else {
      redirect(base_url() . 'halalproduk');
    }
  }
}