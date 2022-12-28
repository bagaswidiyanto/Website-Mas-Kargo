<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mitra extends MY_Controller
{
  public function index()
  {


    $this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Vendor', 'aktif' => 'Y'))->row();

    $this->data['vendor'] = $this->db->get('tbl_vendor')->row();


    $this->middle = 'content/v_vendor'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    $this->layout();
  }

  function registrasi()
  {

    // if ($this->input->post('nama') == '') {
    // $this->data["msg"] = '<div class="alert alert-danger text-center">Lengkapi form terlebih dahulu</div>';
    // $this->middle = 'content/v_vendor'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
    // $this->layout();
    // } else {
    $lamaran = $_FILES['file_name']['name'];
    $office_picture = $_FILES['office_picture']['name'];
    $team_picture = $_FILES['team_picture']['name'];
    $vehicle_picture = $_FILES['vehicle_picture']['name'];



    if ($lamaran !== "" || $office_picture !== "" || $team_picture !== "" || $vehicle_picture !== "") {

      //form
      $lamaranname = $_FILES["file_name"]["name"];
      $file_extension = pathinfo($lamaranname, PATHINFO_EXTENSION);
      $namalamaran = md5(date('Y-m-d H:i:s')) . '.' . $file_extension;

      $folderuploadlamaran = FCPATH . '../vendor_form';

      $configlamaran['upload_path'] = $folderuploadlamaran . '/';
      $configlamaran['allowed_types'] = 'pdf';
      $configlamaran['max_size'] = '0'; // 0 = no file size limit           
      $configlamaran['file_name'] =  $namalamaran;
      $configlamaran['overwrite'] = FALSE;
      $this->load->library('upload');
      $this->upload->initialize($configlamaran);

      if (!is_dir($folderuploadlamaran)) {
        mkdir($folderuploadlamaran, 0777, true);
        $dir_exist = false; // dir not exist
      }

      if (!$this->upload->do_upload('file_name')) {
        $this->data["msg"] = '<div class="alert alert-danger text-center">Format file harus dalam bentuk .PDF</div>';
        $this->middle = 'content/v_vendor'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
        $this->layout();
      } else {

        //office picture
        $office_picture_name = $_FILES["office_picture"]["name"];
        $file_extension_office = pathinfo($office_picture_name, PATHINFO_EXTENSION);
        $nama_office_picture = md5(date('Y-m-d H:i:s')) . '.' . $file_extension_office;

        $folderuploadoffice = FCPATH . '../vendor_picture/office';

        $configoffice['upload_path'] = $folderuploadoffice . '/';
        $configoffice['allowed_types'] = 'gif|jpg|png|jpeg';
        $configoffice['max_size'] = '0'; // 0 = no file size limit           
        $configoffice['file_name'] =  $nama_office_picture;
        $configoffice['overwrite'] = FALSE;
        $this->load->library('upload');
        $this->upload->initialize($configoffice);

        if (!is_dir($folderuploadoffice)) {
          mkdir($folderuploadoffice, 0777, true);
          $dir_exist = false; // dir not exist
        }

        if (!$this->upload->do_upload('office_picture')) {
          $this->load->helper("file");
          delete_files($folderuploadlamaran . '/' . $namalamaran);
          $this->data["msg"] = '<div class="alert alert-danger text-center">Format office picture harus dalam bentuk .png/.jpg/.jpeg</div>';
          $this->middle = 'content/v_vendor'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
          $this->layout();
        } else {

          //team picture
          $team_picture_name = $_FILES["team_picture"]["name"];
          $file_extension_team = pathinfo($team_picture_name, PATHINFO_EXTENSION);
          $nama_team_picture = md5(date('Y-m-d H:i:s')) . '.' . $file_extension_team;

          $folderuploadteam = FCPATH . '../vendor_picture/team';

          $configteam['upload_path'] = $folderuploadteam . '/';
          $configteam['allowed_types'] = 'gif|jpg|png|jpeg';
          $configteam['max_size'] = '0'; // 0 = no file size limit           
          $configteam['file_name'] =  $nama_team_picture;
          $configteam['overwrite'] = FALSE;
          $this->load->library('upload');
          $this->upload->initialize($configteam);

          if (!is_dir($folderuploadteam)) {
            mkdir($folderuploadteam, 0777, true);
            $dir_exist = false; // dir not exist
          }

          if (!$this->upload->do_upload('team_picture')) {
            $this->load->helper("file");
            delete_files($folderuploadlamaran . '/' . $namalamaran);
            delete_files($folderuploadoffice . '/' . $nama_office_picture);
            $this->data["msg"] = '<div class="alert alert-danger text-center">Format team picture harus dalam bentuk .png/.jpg/.jpeg</div>';
            $this->middle = 'content/v_vendor'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
            $this->layout();
          } else {

            //vehicle picture
            $vehicle_picture_name = $_FILES["vehicle_picture"]["name"];
            $file_extension_vehicle = pathinfo($vehicle_picture_name, PATHINFO_EXTENSION);
            $nama_vehicle_picture = md5(date('Y-m-d H:i:s')) . '.' . $file_extension_vehicle;

            $folderuploadvehicle = FCPATH . '../vendor_picture/vehicle';

            $configvehicle['upload_path'] = $folderuploadvehicle . '/';
            $configvehicle['allowed_types'] = 'gif|jpg|png|jpeg';
            $configvehicle['max_size'] = '0'; // 0 = no file size limit           
            $configvehicle['file_name'] =  $nama_vehicle_picture;
            $configvehicle['overwrite'] = FALSE;
            $this->load->library('upload');
            $this->upload->initialize($configvehicle);

            if (!is_dir($folderuploadvehicle)) {
              mkdir($folderuploadvehicle, 0777, true);
              $dir_exist = false; // dir not exist
            }
            if (!$this->upload->do_upload('vehicle_picture')) {
              $this->load->helper("file");
              delete_files($folderuploadlamaran . '/' . $namalamaran);
              delete_files($folderuploadoffice . '/' . $nama_office_picture);
              delete_files($folderuploadteam . '/' . $nama_team_picture);
              $this->data["msg"] = '<div class="alert alert-danger text-center">Format vehicle picture harus dalam bentuk .png/.jpg/.jpeg</div>';
              $this->middle = 'content/v_vendor'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
              $this->layout();
            } else {

              $nama = $this->input->post("nama");
              $email = $this->input->post("email");
              $telp = $this->input->post("telp");
              $pic = $this->input->post("pic");
              $dedicated = $this->input->post("dedicated");
              $cs = $this->input->post("cs");
              $direksi = $this->input->post("direksi");

              $data = array(
                'nama' => $nama,
                'telp' => $telp,
                'email' => $email,
                'pic' => $pic,
                'dedicated' => $dedicated,
                'direksi' => $direksi,
                'cs' => $cs,
                'file_name' => $namalamaran,
                'office_picture' => $nama_office_picture,
                'team_picture' => $nama_team_picture,
                'vehicle_picture' => $nama_vehicle_picture
              );
              $masuk = $this->db->insert("tbl_vendor_reg", $data);
              if ($masuk = true) {
                $this->data["msg"] = '<div class="alert alert-success text-center">Anda telah berhasil mengirimkan form pendaftaran registrasi Vendor</div>';
                $this->middle = 'content/v_vendor'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
                $this->layout();
              } else {
                $this->data["msg"] = '<div class="alert alert-danger text-center">Terjadi kesalahan dalam mengisi form / mengupload data, silahkan coba lagi.</div>';
                $this->middle = 'content/v_vendor'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
                $this->layout();
              }
            }
          }
        }
      }
    } else {
      $this->data["msg"] = '<div class="alert alert-danger text-center">Anda belum memilih file form atau gambar untuk di upload, silahkan coba lagi.</div>';
      $this->middle = 'content/v_vendor'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
      $this->layout();
    }
    // }
  }
}