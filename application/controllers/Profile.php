<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends MY_Controller
{
	public function index()
	{

		$this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Perusahaan', 'aktif' => 'Y'))->row();
		$this->data['about_us'] = $this->db->get_where('tbl_profile', array('id' => 2))->row();
		$this->data['visi'] = $this->db->get_where('tbl_profile', array('id' => 3))->row();
		$this->data['misi'] = $this->db->get_where('tbl_profile', array('id' => 4))->row();
		$this->data['lingkup'] = $this->db->get_where('tbl_profile', array('id' => 5))->row();
		$this->data['elemen'] = $this->db->get_where('tbl_profile', array('id' => 6))->row();
		$this->data['strategi'] = $this->db->get_where('tbl_profile', array('id' => 7))->row();

		$this->data['compro'] = $this->db->get_where('tbl_compro', array('status' => 1))->result();

		$this->data['vp'] = $this->db->get_where('tbl_video', array('id' => '2'))->row();





		$this->middle = 'content/v_profile.php';
		$this->layout();
	}
}