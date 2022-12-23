<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Karir extends MY_Controller
{
    public function index()
    {

        $this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Karir', 'aktif' => 'Y'))->row();

        $this->data['karir'] = $this->db->get('tbl_karir')->result();



        $this->middle = 'content/v_karir'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
        $this->layout();
    }


    public function detail_karir()
    {


        $this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Karir', 'aktif' => 'Y'))->row();

        $slug = $this->uri->segment(3);
        $karir = $this->db->get_where('tbl_karir', array('slug' => $slug));
        $this->data['karir'] = $karir->row();

        if ($karir->num_rows() > 0) {

            $this->db->order_by('id', 'desc');
            // $this->db->limit('4');
            $this->data['recent'] = $this->db->get('tbl_karir');
            $this->middle = 'content/v_karir_detail.php';
            $this->layout();
        } else {
            redirect(base_url() . 'karir');
        }
    }


    function resume()
    {

        // if ($this->input->post('nama') == '') {
        // $this->data["msg"] = '<div class="alert alert-danger text-center">Lengkapi form terlebih dahulu</div>';
        // $this->middle = 'content/v_vendor'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
        // $this->layout();
        // } else {
        $lamaran = $_FILES['file']['name'];



        if ($lamaran !== "") {

            //form
            $lamaranname = $_FILES["file"]["name"];
            $file_extension = pathinfo($lamaranname, PATHINFO_EXTENSION);
            $namalamaran = md5(date('Y-m-d H:i:s')) . '.' . $file_extension;

            $folderuploadlamaran = FCPATH . '../file_lamaran';

            $configlamaran['upload_path'] = $folderuploadlamaran . '/';
            $configlamaran['allowed_types'] = 'pdf';
            $configlamaran['max_size'] = 5000; // 0 = no file size limit           
            $configlamaran['file_name'] =  $namalamaran;
            $configlamaran['overwrite'] = FALSE;
            $this->load->library('upload');
            $this->upload->initialize($configlamaran);

            if (!is_dir($folderuploadlamaran)) {
                mkdir($folderuploadlamaran, 0777, true);
                $dir_exist = false; // dir not exist
            }

            if (!$this->upload->do_upload('file')) {
                $this->data["msg"] = '<div class="alert alert-danger text-center">Format file harus dalam bentuk .PDF</div>';
                $this->middle = 'content/v_karir_detail'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
                $this->layout();
            } else {
                $posisi = $this->input->post("posisi");
                $telp = $this->input->post("telp");
                $surat_lamaran = $this->input->post("surat_lamaran");

                $data = array(
                    'posisi' => $posisi,
                    'telp' => '0' . $telp,
                    'surat_lamaran' => $surat_lamaran,
                    'file' => $namalamaran,
                );
                $masuk = $this->db->insert("tbl_resume", $data);
                if ($masuk = true) {
                    $this->data["msg"] = '<div class="alert alert-success text-center">Anda telah berhasil mengirimkan form pendaftaran registrasi Vendor</div>';
                    $this->middle = 'content/v_karir_detail'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
                    $this->layout();
                } else {
                    $this->data["msg"] = '<div class="alert alert-danger text-center">Terjadi kesalahan dalam mengisi form / mengupload data, silahkan coba lagi.</div>';
                    $this->middle = 'content/v_karir_detail'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
                    $this->layout();
                }
            }
        } else {
            $this->data["msg"] = '<div class="alert alert-danger text-center">Anda belum memilih file form atau gambar untuk di upload, silahkan coba lagi.</div>';
            $this->middle = 'content/v_karir_detail'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
            $this->layout();
        }
        // }
    }
}