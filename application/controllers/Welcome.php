<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Welcome extends MY_Controller
{
	public function index()
	{
		$this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Home', 'aktif' => 'Y'))->result();
		$this->data['vh'] = $this->db->get_where('tbl_video', array('id' => '1'))->row();
		$this->data['compro'] = $this->db->get('tbl_compro')->result();
		$this->data['service'] = $this->db->get('tbl_service')->result();

		$this->db->order_by('id', 'asc');
		$this->data['cc'] = $this->db->get('tbl_cash_counter')->result();
		$this->data['client'] = $this->db->get('tbl_client')->result();
		$this->data['testi'] = $this->db->get('tbl_testimoni')->result();


		// $this->db->limit('10');
		// $this->db->order_by('id', 'desc');
		// $this->data['berita'] = $this->db->get('tbl_posts')->result();


		$this->middle = 'content/home'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
		$this->layout();
	}
}