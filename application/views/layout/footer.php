<?php
$number1 = $website->phone;
// $nop1 = substr($number1, 0, 4);
$noP2 = substr($number1, 3, 4);
$noP3 = substr($number1, 7, 4);
$wa1 = $noP2 . ' ' . $noP3;

$numberAPI1 = $website->phone;
$noAPI1 = substr($numberAPI1, 1);
$apiWa1 = $noAPI1;

$waLink1 = "https://api.whatsapp.com/send?phone=62$apiWa1&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";


$number2 = $website->no_wa;
// $no2 = substr($number2, 0, 4);
$noW2 = substr($number2, 3, 4);
$noW3 = substr($number2, 7, 4);
$wa2 = $noW2 . ' ' . $noW3;

$numberAPI2 = $website->no_wa;
$noAPI2 = substr($numberAPI2, 1);
$apiWa2 = $noAPI2;

$waLink2 = "https://api.whatsapp.com/send?phone=62$apiWa2&text=Hallo%20Sahabat%20$website->name..%21%0APesan%20anda%20sudah%20kami%20terima%0AKami%20akan%20merespons%20pesan%20anda%20segera%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>

<div class="update-home" data-aos="fade-up" data-aos-duration="1000">
    <div class="container py-5 px-lg-5">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-lg-5 col-md-8 col-sm-6">
                <div class="content">
                    <h1 class="text-blue">
                        <?= @$_GET['lang'] == 'eng' ? $update->title_eng : $update->title ?>
                    </h1>
                    <p class="text-blue mt-5">
                        <?= @$_GET['lang'] == 'eng' ? $update->deskripsi_eng : $update->deskripsi ?></p>
                </div>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-6 mt-5 mt-sm-0">
                <img src="https://maskargo.digitalindo.co.id/upload/<?= $update->image; ?>" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>


<div class="footer bg-blue position-relative">
    <div class="container py-4">
        <div class="row justify-content-center first-row">
            <div class="col-lg-2 col-md-4">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="contact">
                            <h4 class="text-white fw-bold"><?= @$_GET['lang'] == 'eng' ? 'Contact us' : 'Kontak Kami' ?></h4>
                            <div class="d-flex mt-2">
                                <?php foreach ($this->db->query("SELECT * FROM tbl_sosmed WHERE id != 4 AND id != 5")->result() as $s) { ?>
                                    <a href="<?= $s->link; ?>" class="btn btn-social" title="<?= $s->name; ?>" target="_blank"> <i class="<?= $s->icon; ?>"></i> </a>
                                <?php } ?>
                                <!-- <a href="" class="btn btn-social"> <i class=""></i></a> -->
                                <!-- <a href="" class="btn btn-social"> <i class="fa fa-instagram"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <div class="store">
                            <?php $ps = $this->db->query("SELECT * FROM tbl_sosmed WHERE id = 5")->row(); ?>
                            <a href="<?= $ps->link; ?>" title="<?= $ps->name; ?>" target="_blank">
                                <img src="<?= base_url(); ?>assets/imagenew/gp.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-5 mt-sm-0">
                <div class="information">
                    <h4 class="text-white fw-bold"><?= @$_GET['lang'] == 'eng' ? 'Address Information' : 'Alamat Informasi' ?>
                    </h4>
                    <div class="address mt-2">
                        <?= $website->address; ?>
                        <p>Telp. (6221) <?= $wa1; ?>, <?= $wa2; ?></p>
                        <p>Email:<?= $website->email; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 mt-5 mt-md-0">
                <div class="quick">
                    <h4 class="text-white fw-bold"><?= @$_GET['lang'] == 'eng' ? 'Quick Links' : 'Tautan Langsung' ?></h4>
                    <ul class="mt-2">
                        <?php foreach ($this->db->query("SELECT * FROM tbl_menu_tautan")->result() as $t) { ?>
                            <li><a href="<?= @$_GET['lang'] == 'eng' ? $t->slug . '?lang=eng' : $t->slug; ?>"><i class="fa fa-chevron-right"></i>
                                    <?= @$_GET['lang'] == 'eng' ? $t->nama_eng : $t->nama ?></a></li>
                        <?php } ?>
                        <!-- <li><a href=""><i class="fa fa-chevron-right"></i>
                                <?= @$_GET['lang'] == 'eng' ? 'Products & Services' : 'Produk & Layanan' ?></a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i>
                                <?= @$_GET['lang'] == 'eng' ? 'Destination' : 'Destinasi' ?></a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 text-center text-lg-end px-0 mt-5 mt-lg-0">
                <div class="footer-img">
                    <img src="<?= base_url(); ?>assets/imagenew/logo-footer.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright container-fluid bg-blue py-3 text-center position-relative">
    <div class="row justify-content-center">
        <div class="col-12">
            <p class="text-white">© 2022 - PT. Merpati Alam Semesta All Rights Reserved.

        </div>
    </div>
    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a> -->
    <!-- </div> -->

    <?php
    date_default_timezone_set('ASIA/JAKARTA');
    $curr_time     = date('H:i:s');
    ?>
    <div class="whatsapp-chat-section">
        <div class="icon-section">
            <img src="<?= base_url(); ?>assets/whatsapp/ic_whatsapp.png" id="whatsapp_chat" onclick="chatWhatsApp();">
        </div>
        <div id="whatsapp-chat-popup" class="animate__animated animate__bounceOutDown" style="z-index: 999999; display: none;">
            <div id="list-chat-section" class="list-chat-section animate__animated animate__fadeIn" style="display: block;">
                <div class="header-section" style="background:linear-gradient(180deg, #5B88C6 0%, #1E539C 100%);">
                    <img class="close-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_close_btn.png" onclick="closechatWhatsApp();">
                    <!-- <div class="header-avatar-section">
                        <?php foreach ($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
                            <div class="avatar">
                                <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="https://maskargo.digitalindo.co.id/upload/wa_image/<?= $sec1->image; ?>">
                            </div>
                        <?php } ?>
                    </div>
                    <div class="header-desc-section" style="margin-top: 15px;">
                        <p><?= @$_GET['lang'] == 'eng' ? 'We are ready to help you, please chat with our customer service.' : 'Kami siap membantu Anda, Silahkan chat dengan customer service kami.' ?>
                        </p>
                    </div> -->
                    <div class="row justify-content-center align-items-center mt-4">
                        <div class="col-7 ps-4">
                            <div class="d-flex align-items-center wa">
                                <img src="<?= base_url(); ?>assets/whatsapp/ic_wa.png" class="img-fluid me-2" alt="">
                                <p>Whatsapp</p>
                            </div>
                            <div class="header-desc-section mt-4">
                                <p><?= @$_GET['lang'] == 'eng' ? 'We are ready to help you, please chat with our customer service.' : 'Kami siap membantu Anda, Silahkan chat dengan customer service kami.' ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-5 ps-0">
                            <div class="bg-laptop">
                                <img src="<?= base_url(); ?>assets/whatsapp/ic_laptop.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                    <p class="cs pb-1"><?= @$_GET['lang'] == 'eng' ? 'Customer Service' : 'Pelayanan Pelanggan' ?></p>
                    <p class="op pb-1">Operasional</p>
                </div>
                <div class="container px-0">
                    <div class="row">
                        <div class="col-6 pe-0">
                            <div class="chat-section">
                                <?php foreach ($this->db->query("SELECT a.*,a.user as nama,a.header_name,c.nama as cabang FROM tbl_chat_wa a  left join log_branch c ON a.branch=c.kode WHERE a.posisi = 1 order by a.id asc")->result() as $sec2) { ?>
                                    <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                                        <div class="avatar">
                                            <img class="avatar" src="https://maskargo.digitalindo.co.id/upload/wa_image/<?= $sec2->image; ?>">
                                        </div>
                                        <div class="profile">
                                            <p class="position"><?= strtoupper($sec2->header_name); ?></p>
                                            <p class="name"><?= strtoupper($sec2->nama); ?></p>
                                            <? if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                                                <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span> </small>
                                            <? } else { ?>
                                                <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                                                </small>
                                            <? } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-6 ps-0">
                            <div class="chat-section">
                                <?php foreach ($this->db->query("SELECT a.*,a.user as nama,a.header_name,c.nama as cabang FROM tbl_chat_wa a  left join log_branch c ON a.branch=c.kode WHERE a.posisi = 0 order by a.id asc")->result() as $sec2) { ?>
                                    <div class="cs-section" onclick="chatCustomer(<?= $sec2->id; ?>);">
                                        <div class="avatar">
                                            <img class="avatar" src="https://maskargo.digitalindo.co.id/upload/wa_image/<?= $sec2->image; ?>">
                                        </div>
                                        <div class="profile">
                                            <p class="position"><?= strtoupper($sec2->header_name); ?></p>
                                            <p class="name"><?= strtoupper($sec2->nama); ?></p>
                                            <? if (($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)) { ?>
                                                <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span> </small>
                                            <? } else { ?>
                                                <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span>
                                                </small>
                                            <? } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <?php foreach ($this->db->query("SELECT a.*,a.user as nama,c.nama as cabang FROM tbl_chat_wa a  left join log_branch c ON a.branch=c.kode order by a.id asc")->result() as $sec3) { ?>
                <div class="chat-section animate__animated animate__fadeIn" id="customer_chat_<?= $sec3->id; ?>" style="display: none;">
                    <div class="header-section" style="background:linear-gradient(180deg, #5B88C6 0%, #1E539C 100%);">
                        <img class="back-chat-section" src="<?= base_url(); ?>assets/whatsapp/ic_back_btn.png" onclick="backListChat(<?= $sec3->id; ?>);">
                        <div class="header-avatar-section">
                            <div class="avatar">
                                <img class="avatar" style="position: relative; display: inline-block; vertical-align: middle; height: 60px; width: 60px; border-radius: 60px;" src="https://maskargo.digitalindo.co.id/upload/wa_image/<?= $sec3->image; ?>">
                            </div>
                        </div>
                        <div class="header-desc-section">
                            <h3><?= $sec3->nama; ?></h3>
                            <?php
                            $phone_split = implode(" ", str_split('+62' . $sec3->phone, 4)) . " ";
                            ?>
                            <p><i class="fa fa-phone"></i> <?php echo $phone_split; ?></p>
                        </div>
                    </div>
                    <div class="inside-chat-section">
                        <div class="chat">
                            <div class="inside-chat">
                                <span><?= @$_GET['lang'] == 'eng' ? 'Hello, I am' : 'Halo saya' ?>
                                    <?= ucwords(strtolower($sec3->nama)); ?>,
                                    <?= @$_GET['lang'] == 'eng' ? 'Customer Service from the Branch' : 'Customer Service dari Cabang' ?>
                                    <?= ucwords(strtolower($sec3->cabang)); ?>.</span>
                            </div>
                            <div class="time">
                                <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="inside-chat">
                                <span>
                                    <?= @$_GET['lang'] == 'eng' ? 'Can I help you ?' : 'Ada yang bisa saya bantu ?' ?></span>
                            </div>
                            <div class="time">
                                <span><?php echo date('H:i'); ?><img src="<?= base_url(); ?>assets/whatsapp/ic_check_wa.png"></span>
                            </div>
                        </div>
                    </div>
                    <div class="box-chat-section">
                        <div class="text">
                            <input type="hidden" id="telp_wa_<?= $sec3->id; ?>" name="telp_wa_<?= $sec3->id; ?>" value="<?= $sec3->phone; ?>">
                            <input type="text" class="input-message-whatsapp" id="chat_wa_<?= $sec3->id; ?>" name="chat_wa_<?= $sec3->id; ?>" onchange="textChatWhatsapp(<?= $sec3->id; ?>);" onclick="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseover="textChatWhatsapp(<?= $sec3->id; ?>);" onmouseout="textChatWhatsapp(<?= $sec3->id; ?>);" onkeydown="textChatWhatsapp(<?= $sec3->id; ?>);" value="" placeholder="<?= @$_GET['lang'] == 'eng' ? 'Type a message' : 'Ketik pesan' ?>">
                        </div>
                        <div class="button-send">
                            <a href="" id="btn_wa_<?= $sec3->id; ?>" target="_blank"><img src="<?= base_url(); ?>assets/whatsapp/ic_send_message.png"></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>




    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>assets/lib/isotope/isotope.pkgd.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url(); ?>assets/js/swiper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            $(".nav-tabs a").click(function() {
                $(this).tab('show');
            });
            $('.nav-tabs a').on('shown.bs.tab', function(event) {
                var x = $(event.target).text(); // active tab
                var y = $(event.relatedTarget).text(); // previous tab
                $(".act span").text(x);
                $(".prev span").text(y);
            });
        });


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
                    url: "https://maskargo.digitalindo.co.id/inc/login.php",
                    data: data,
                    success: function(data) {

                        if (data.indexOf(
                                "Maaf ada yang sedang menggunakan akun ini atau tunggu 10 menit"
                            ) > -1) {
                            alert(
                                'Maaf ada yang sedang menggunakan akun ini atau tunggu 10 menit'
                            );
                        } else if (data.indexOf("Username atau Password Salah") > -1) {
                            alert('Username atau Password Salahhh');
                        } else {

                            //redirect jika berhasil login

                            setInterval(function() {
                                window.location =
                                    'https://maskargo.digitalindo.co.id/inc/login.php?t=' +
                                    data;
                            }, 1000);
                        }
                        $(".btn").attr("disabled", false);


                    },

                    error: function() {

                        alert('Username atau Password Salah');
                        $(".btn").attr("disabled", false);

                    }

                });

                return false;

            });

        });
    </script>

    <script>
        //     $(document).ready(function() {

        //     setTimeout(function() {

        //       $("#whatsapp_chat").trigger('click');

        //     }, 3000);

        // });



        function chatWhatsApp() {
            var cek_class = document.getElementById('whatsapp-chat-popup');
            if (cek_class.classList.contains('animate__bounceOutDown')) {
                cek_class.classList.remove("animate__bounceOutDown");
                cek_class.classList.add("animate__bounceInUp");
                cek_class.style.display = "block";
            } else {
                cek_class.classList.remove("animate__bounceInUp");
                cek_class.classList.add("animate__bounceOutDown");
            }
        }

        function chatCustomer(id) {
            var list_chat = document.getElementById("list-chat-section");
            var chat = document.getElementById('customer_chat_' + id);

            if (id != 0 && id != '') {
                list_chat.style.display = "none";
                chat.style.display = "block";
            }
        }



        function closechatWhatsApp() {
            var cek_class = document.getElementById('whatsapp-chat-popup');
            if (cek_class.classList.contains('animate__bounceInUp')) {
                cek_class.classList.remove("animate__bounceInUp");
                cek_class.classList.add("animate__bounceOutDown");
            }
        }





        function backListChat(id) {
            var list_chat = document.getElementById("list-chat-section");
            var chat = document.getElementById('customer_chat_' + id);
            if (id != 0 && id != '') {
                chat.style.display = "none";
                list_chat.style.display = "block";
                $("#chat_wa_" + id).val('');
            }
        }



        function textChatWhatsapp(id) {
            var link_wa = 'https://api.whatsapp.com/send?';
            if (id != 0 && id != '') {
                var telp = $("#telp_wa_" + id).val();
                var chat = $("#chat_wa_" + id).val();
                var link = 'https://api.whatsapp.com/send?phone=62' + telp + '&text=' + chat;
                var btn = document.getElementById("btn_wa_" + id);
                btn.setAttribute("href", link);
            }
        }
    </script>