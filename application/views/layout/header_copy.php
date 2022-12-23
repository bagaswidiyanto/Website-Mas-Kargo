<?php
error_reporting(0);
if (@$_GET['lang'] != '') {
    $_SESSION['lang'] = $_GET['lang'];
}

$number1 = $website->phone;
$noP1 = substr($number1, 1, 2);
$noP2 = substr($number1, 3, 4);
$noP3 = substr($number1, 7, 4);
$wa1 = $noP1 . ' ' . $noP2 . ' ' . $noP3;

$numberAPI1 = $website->phone;
$noAPI1 = substr($numberAPI1, 1);
$apiWa1 = $noAPI1;

$waLink1 = "https://api.whatsapp.com/send?phone=62$apiWa1&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";

$number2 = $website->no_wa;
$noW1 = substr($number2, 1, 2);
$noW2 = substr($number2, 3, 4);
$noW3 = substr($number2, 7, 4);
$wa2 = $noW1 . ' ' . $noW2 . ' ' . $noW3;

$numberAPI2 = $website->no_wa;
$noAPI2 = substr($numberAPI2, 1);
$apiWa2 = $noAPI2;

$waLink2 = "https://api.whatsapp.com/send?phone=62$apiWa2&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";


function tgl($tanggal)
{
    $bulan_arr    = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    // $hari_arr     = ['', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

    $ex           = explode('-', $tanggal);
    $hari         = date('N', strtotime($tanggal));
    $tanggal_indo = $ex[2] . ' ' . $bulan_arr[(int)$ex[1]] . ' ' . $ex[0];

    return $tanggal_indo;
}

function hari($date)
{
    $hari_arr     = ['', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
    $hari         = date('N', strtotime($date));
    return $hari_arr[$hari];
}

?>

<div class="position-relative" id="home">
    <div class="top_menu d-none d-lg-block bg-blue" data-aos="fade-up" data-aos-duration="1000">
        <div class="top-content">
            <!-- <div class="container"> -->
            <div class="row me-auto">
                <div class="col-lg-6 col-md-8 px-0">
                    <div class="float-left d-flex align-items-center py-2 px-5">
                        <img src="<?= base_url(); ?>assets/imagenew/top-phone.svg" class="img-fluid me-2" alt="">
                        <p class="fs-13 text-white">+62<?= $wa1 ?> | +62<?= $wa2 ?></p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-4 text-center text-lg-end px-0">
                    <div
                        class="position-relative d-inline-flex align-items-center bg-white top-shape text-black px-5  py-2">
                        <div class="top-login me-5">
                            <a href="" class="fs-13 text-dark" data-bs-toggle="modal"
                                data-bs-target="#myModal">Login/Register</a>
                        </div>
                        <div class="top-language">
                            <div class="dropdown">
                                <button type="button" class="bg-transparent border-0 dropdown-toggle fs-13"
                                    data-bs-toggle="dropdown">
                                    <?= @$_GET['lang'] == 'eng' ? 'Language' : 'Bahasa' ?>
                                </button>
                                <ul class="dropdown-menu">
                                    <style>
                                    .dropdown-item.lang_active {
                                        background: linear-gradient(180deg, #5B88C6 0%, #1E539C 100%);
                                        color: #fff;
                                    }

                                    .dropdown-item.lang {
                                        background: linear-gradient(180deg, #5B88C6 0%, #1E539C 100%);
                                        color: #fff;
                                    }
                                    </style>
                                    <li><a class="dropdown-item <?php
                                                                if (@$_GET['lang'] == 'eng') {
                                                                    echo 'lang_active';
                                                                } else {
                                                                    echo '';
                                                                }
                                                                ?>" href="<?= current_url(); ?>?lang=eng"><span
                                                class="fi fi-gb"></span> English</a>
                                    </li>
                                    <li><a class="dropdown-item <?php
                                                                if (@$_GET['lang'] == 'eng') {
                                                                    echo '';
                                                                } else {
                                                                    echo 'lang';
                                                                }
                                                                ?>" href="<?= current_url(); ?>"> <span
                                                class="fi fi-id"></span> Indonesia</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- </div> -->
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="<?= base_url(); ?>" class="navbar-brand p-0">
            <!-- <h1 class="m-0">FitApp</h1> -->
            <img src="<?= base_url(); ?>assets/imagenew/logo-header.png" alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <?php foreach ($this->db->query("SELECT * FROM tbl_navigation WHERE parent = 0 AND status = 1 ORDER BY sort ASC")->result() as $key) { ?>
                <a href="<?= (@$_GET['lang'] == 'eng' ? $key->title_eng != 'Home?lang=eng' : $key->title_indo != 'Beranda') ? (@$_GET['lang'] == 'eng' ? base_url() . strtolower($key->slug) . '?lang=eng' : base_url() . strtolower($key->slug)) : base_url() ?>"
                    class="nav-item nav-link <?php
                                                                                                                                                                                                                                                                                                if ($key->slug != "") {
                                                                                                                                                                                                                                                                                                    if ($this->uri->segment(1) == $key->slug) {
                                                                                                                                                                                                                                                                                                        echo "active";
                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                                                                                    if ($this->uri->segment(1) == "") {
                                                                                                                                                                                                                                                                                                        echo "active";
                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                ?>"><?= @$_GET['lang'] == 'eng' ? $key->title_eng : $key->title_indo ?></a>
                <?php } ?>
                <!-- <a href="<?= base_url(); ?>profile" class="nav-item nav-link">Perusahaan</a>
                <a href="<?= base_url(); ?>layanan" class="nav-item nav-link">Produk & Layanan</a>
                <a href="<?= base_url(); ?>gallery" class="nav-item nav-link">Galeri</a>
                <a href="<?= base_url(); ?>berita" class="nav-item nav-link">Berita</a>
                <a href="<?= base_url(); ?>kontak" class="nav-item nav-link">Hubungi Kami</a> -->

            </div>

            <div class="ms-auto btn-contact  d-none d-lg-block">
                <a href="<?= $waLink2; ?>" target="_blank"
                    class="nav-item nav-link bg-blue rounded-20 d-flex align-items-center text-white">
                    <i class="fa fa-phone me-2 fs-4" aria-hidd en="true"></i>
                    <?= @$_GET['lang'] == 'eng' ? 'Contact Now' : 'Hubungi Sekarang'; ?></a>
            </div>

            <div class="lgn d-flex justify-content-between align-items-center d-lg-none d-block">

                <div class="ms-lg-auto btn-contact">
                    <a href="<?= $waLink2; ?>" target="_blank"
                        class="nav-item nav-link bg-blue rounded-20 d-flex align-items-center text-white">
                        <i class="fa fa-phone me-2 fs-4" aria-hidden="true"></i>
                        <?= @$_GET['lang'] == 'eng' ? 'Contact Now' : 'Hubungi Sekarang'; ?></a>
                </div>

                <div class="top-login me-2 me-lg-0">
                    <a href="" class="fs-13 text-dark" data-bs-toggle="modal"
                        data-bs-target="#myModal">Login/Register</a>
                </div>
                <div class="top-language me-3">
                    <div class="dropdown">
                        <button type="button" class="bg-transparent border-0 dropdown-toggle fs-13"
                            data-bs-toggle="dropdown">
                            <?= @$_GET['lang'] == 'eng' ? 'Language' : 'Bahasa' ?>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item <?php
                                                        if (@$_GET['lang'] == 'eng') {
                                                            echo 'lang_active';
                                                        } else {
                                                            echo '';
                                                        }
                                                        ?>" href="<?= current_url(); ?>?lang=eng">English</a></li>
                            <li><a class="dropdown-item <?php
                                                        if (@$_GET['lang'] == 'eng') {
                                                            echo '';
                                                        } else {
                                                            echo 'lang';
                                                        }
                                                        ?>" href="<?= current_url(); ?>">Indonesian</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>







    <!-- Modal Login -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title text-dark"><?= @$_GET['lang'] == 'eng' ? 'FORM LOGIN' : 'FORMULIR MASUK' ?>
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="login">
                        <div class="mt-3">
                            <label
                                class="text-dark"><?= @$_GET['lang'] == 'eng' ? 'Username' : 'Nama Pengguna' ?></label>
                            <input type="text" id="username" name="" class="form-control"
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Username' : 'Nama Pengguna' ?>" required>
                        </div>
                        <div class="mt-3">
                            <label class="text-dark"><?= @$_GET['lang'] == 'eng' ? 'Password' : 'Kata Sandi' ?></label>
                            <input type="password" class="form-control" id="password" name=""
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Password' : 'Kata Sandi' ?>" required>
                        </div>

                        <div class="mt-3">
                            <button id="submit" type="submit"
                                class="btn bg-blue form-control"><?= @$_GET['lang'] == 'eng' ? 'Login' : 'Masuk' ?></button>
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger"
                        data-bs-dismiss="modal"><?= @$_GET['lang'] == 'eng' ? 'Close' : 'Tutup' ?></button>
                </div>

            </div>
        </div>
    </div>


    <script>
    <?php if (@$_GET["error"] == 1) {
        ?>
    alert("Username atau password salah");
    <?php
        } else if (@$_GET["error"] == 2) { ?>
    alert("Terjadi kesalahan saat mencoba login");
    <?php
        }
        ?>




    $(document).ready(function() {



        $("form#login").submit(function() {

            $(".btn").attr("disabled", true);

            var data = {
                username: $("#username").val(),
                password: $("#password").val(),
                method: 'crosssite'
            };


            $.ajax({
                type: "POST",
                url: "https://system.mas-kargo.co.id/inc/login.php",
                data: data,
                success: function(data) {

                    if (data.indexOf(
                            "Maaf ada yang sedang menggunakan akun ini atau tunggu 10 menit"
                        ) > -1) {
                        alert(
                            "Maaf ada yang sedang menggunakan akun ini atau tunggu 10 menit"
                        );
                    } else if (data.indexOf("Username atau Password Salah") > -1) {
                        alert("Username atau Password Salah");
                    } else {

                        //redirect jika berhasil login

                        setInterval(function() {
                            window.location =
                                'https://system.mas-kargo.co.id/inc/login.php?t=' +
                                data;
                        }, 1000);
                    }
                    $(".btn").attr("disabled", false);


                },

                error: function() {

                    alert('Username atau Password Salah.');
                    $(".btn").attr("disabled", false);

                }

            });

            return false;

        });

    });
    </script>