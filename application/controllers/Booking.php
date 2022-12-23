<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Booking extends MY_Controller
{

    public function index()
    {

        // Memanggil library
        // $this->load->library('recaptcha');
        if ($this->input->post("submit")) {
            // Mendapatkan input recaptcha dari user
            // $captcha_answer = $this->input->post('g-recaptcha-response');

            // Verifikasi input recaptcha dari user
            // $response = $this->recaptcha->verifyResponse($captcha_answer);
            // if ($response['success']) {
            date_default_timezone_set("ASIA/JAKARTA");
            $this->db->limit(1);
            $this->db->order_by("id", "desc");
            $ticket = $this->db->get("tbl_booking");
            if ($ticket->num_rows()) {
                $tiket = $ticket->row()->id + 1;
                if ($tiket > 0 && $tiket < 10) {
                    $bookTicket = "ONLINE0000" . $tiket;
                } else if ($tiket >= 10 && $tiket < 100) {
                    $bookTicket = "ONLINE000" . $tiket;
                } else if ($tiket >= 100 && $tiket < 1000) {
                    $bookTicket = "ONLINE00" . $tiket;
                } else if ($tiket >= 1000 && $tiket < 10000) {
                    $bookTicket = "ONLINE0" . $tiket;
                } else {
                    $bookTicket = "ONLINE" . $tiket;
                }
            } else {
                $bookTicket = "ONLINE00001";
            }


            $namaPenerima       = $this->input->post("namaPenerima");
            $alamatPenerima     = $this->input->post("alamatPenerima");
            $telpPenerima       = $this->input->post("telpPenerima");
            $kecamatanPenerima  = $this->input->post("kecamatanPenerima");
            $namaPengirim       = $this->input->post("namaPengirim");
            $alamatPengirim     = $this->input->post("alamatPengirim");
            $telpPengirim       = $this->input->post("telpPengirim");
            $kecamatanPengirim  = $this->input->post("kecamatanPengirim");
            $isiBarang          = $this->input->post("isiBarang");
            $kilo               = $this->input->post("kilo");
            $keterangan         = $this->input->post("keterangan");
            $jenisBooking       = $this->input->post("jenisBooking");

            $data = array(

                'tiket'             => $bookTicket,
                'namaPenerima'      => $namaPenerima,
                'telpPenerima'      => $telpPenerima,
                'kecamatanPenerima' => $kecamatanPenerima,
                'alamatPenerima'    => $alamatPenerima,
                'namaPengirim'      => $namaPengirim,
                'telpPengirim'      => $telpPengirim,
                'kecamatanPengirim' => $kecamatanPengirim,
                'alamatPengirim'    => $alamatPengirim,
                'isiBarang'         => $isiBarang,
                'kilo'              => $kilo,
                'keterangan'        => $keterangan,
                'jenisBooking'      => $jenisBooking,
                'Tgl_Booking'       => date('Y-m-d H:i:s')
            );

            $masuk = $this->db->insert("tbl_booking", $data);

            if ($masuk = true) {
                $this->data["Message"] = "Terima kasih. Data anda akan segera kami proses<br>Bila ingin melakukan booking lainnya<br>";

                $this->middle = 'content/v_booking_online'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
                $this->layout();
            } else {
                $this->data["Message"] = "Terjadi error. Mohon Coba lagi<br>";
                $this->middle = 'content/v_booking_online'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.

                $this->layout();
            }
            // } else {
            // $this->data["kapca"] = 'Mohon validasi capthca terlebih dahulu';

            // $this->middle = 'content/v_booking_online'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
            // $this->layout();
            // }
        } else {

            $this->data['slider'] = $this->db->get_where('tbl_slider', array('posisi' => 'Booking', 'aktif' => 'Y'))->row();
            $this->middle = 'content/v_booking_online'; // untuk loading page homenya. rubah pada bagian ini untuk halaman lainnya.
            $this->layout();
        }
    }
}