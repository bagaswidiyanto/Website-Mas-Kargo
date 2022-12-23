<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Wisatahalal extends MY_Controller
{
  public function index()
  {
    $this->data['slider'] = $this->db->get('tbl_slider_hero_wisata_halal')->result();
    $this->data['wisatahalal'] = $this->db->get('tbl_wisata_halal')->result();

    $this->middle = 'content/v_wisata_halal'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout();
  }

  public function detail_wisatahalal()
  {


    $this->data['slider'] = $this->db->get('tbl_slider_hero_wisata_halal')->result();

    $slug = $this->uri->segment(3);
    $wisatahalal = $this->db->get_where('tbl_wisata_halal', array('slug' => $slug));
    $this->data['wisatahalal'] = $wisatahalal->row();

    if ($wisatahalal->num_rows() > 0) {

      $this->db->order_by('id', 'desc');
      // $this->db->limit('4');
      $this->data['recent'] = $this->db->get('tbl_wisata_halal');
      $this->middle = 'content/v_wisata_halal_detail';
      $this->layout();
    } else {
      redirect(base_url() . 'wisatahalal');
    }
  }
}