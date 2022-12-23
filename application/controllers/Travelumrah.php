<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Travelumrah extends MY_Controller
{
  public function index()
  {
    $this->data['slider'] = $this->db->get('tbl_slider_hero_wisata_travel_umrah')->result();
    $this->data['travelumrah'] = $this->db->get('tbl_travel_umrah')->result();

    $this->middle = 'content/v_travel_umrah'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout();
  }

  public function detail_travelumrah()
  {


    $this->data['slider'] = $this->db->get('tbl_slider_hero_wisata_travel_umrah')->result();

    $slug = $this->uri->segment(3);
    $travelumrah = $this->db->get_where('tbl_travel_umrah', array('slug' => $slug));
    $this->data['travelumrah'] = $travelumrah->row();

    if ($travelumrah->num_rows() > 0) {

      $this->db->order_by('id', 'desc');
      // $this->db->limit('4');
      $this->data['recent'] = $this->db->get('tbl_travel_umrah');
      $this->middle = 'content/v_travel_umrah_detail';
      $this->layout();
    } else {
      redirect(base_url() . 'travelumrah');
    }
  }
}