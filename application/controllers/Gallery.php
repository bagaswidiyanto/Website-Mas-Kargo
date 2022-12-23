<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MY_Controller
{
	public function index()
	{
		$this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Galeri', 'aktif' => 'Y'))->row();


		$this->data['filter'] = $this->db->get('tbl_master_gallery_filter')->result();
		$this->data['gallery'] = $this->db->get('tbl_gallery')->result();

		$this->middle = 'content/v_gallery';
		$this->layout();
	}
}