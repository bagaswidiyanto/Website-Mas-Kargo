<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="kontak">
    <div class="container-xxl py-5 px-lg-5">
        <div class="header-title" data-aos="fade-up" data-aos-duration="1000">
            <h2><?= @$_GET['lang'] == 'eng' ? 'CONTACT US' : 'HUBUNGI KAMI' ?></h2>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-lg-12">
                <div class="map" data-aos="fade-up" data-aos-duration="1000">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15864.276239610988!2d106.99586102579114!3d-6.254632218508369!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c2ca80d032b%3A0xbad12659c20c98ad!2sMerpati%20Alam%20Semesta.%20PT%20-%20Bekasi!5e0!3m2!1sid!2sid!4v1663912460683!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="box-contact mt-5">
                    <h3><?= @$_GET['lang'] == 'eng' ? 'Contact Us' : 'Hubungi Kami' ?></h3>
                    <div class="form-box mt-3">
                        <form id="contact">
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name"
                                    placeholder="<?= @$_GET['lang'] == 'eng' ? 'Name' : 'Nama' ?>" id="inputName"
                                    required="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="email" placeholder="Email" id="inputEmail"
                                    required="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="subject"
                                    placeholder="<?= @$_GET['lang'] == 'eng' ? 'Subject' : 'Subjek' ?>"
                                    id="inputSubject" required="">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="phone"
                                    placeholder="<?= @$_GET['lang'] == 'eng' ? 'No phone' : 'No Telepon' ?>"
                                    id="inputPhone" required="" onkeypress="return hanyaAngka(event)">
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control"
                                    placeholder="<?= @$_GET['lang'] == 'eng' ? 'Message' : 'Pesan' ?>" id="inputMessage"
                                    required=""></textarea>
                            </div>
                            <div class="mb-3 text-end">
                                <input type="submit" value="<?= @$_GET['lang'] == 'eng' ? 'Send' : 'Kirim' ?>"
                                    class="bg-blue border-0 px-4 py-1 rounded-20" id="submitContact">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-down" data-aos-duration="1000">
                <div class="box-address mt-5 px-xl-5">
                    <div class="address">
                        <h3><?= @$_GET['lang'] == 'eng' ? 'Headquarters' : 'Kantor Pusat' ?></h3>
                        <div class="d-flex align-items-start">
                            <img src="<?= base_url(); ?>assets/imagenew/icon-lokasi.svg" class="img-fluid me-3" alt="">
                            <?= $website->address; ?>
                        </div>
                    </div>
                    <div class="email mt-3">
                        <h3>Email</h3>
                        <div class="d-flex align-items-start">
                            <img src="<?= base_url(); ?>assets/imagenew/icon-email.svg" class="img-fluid me-3" alt="">
                            <a href="mailto:loremipsum@gmail.com" class="text-dark"><?= $website->email; ?></a>
                        </div>
                    </div>
                    <div class="phone mt-3">
                        <h3><?= @$_GET['lang'] == 'eng' ? 'Phone Number' : 'Nomor telepon' ?></h3>
                        <d class="d-flex align-items-start">
                            <img src="<?= base_url(); ?>assets/imagenew/icon-phone.svg" class="img-fluid me-3" alt="">
                            <div class="tlp">
                                <p><?= $website->phone; ?> <?= $website->no_wa; ?></p>
                                <!-- <a href="<?= $waLink1; ?>" target="_blank" class="text-dark"><?= $website->phone; ?></a><br> -->
                                <!-- <a href="<?= $waLink2; ?>" target="_blank" class="text-dark"><?= $website->no_wa; ?></a> -->
                            </div>
                        </d>
                    </div>

                    <form class="mt-3" id="whatsapp" action="">
                        <div class="mb-3 position-relative">
                            <img src="<?= base_url(); ?>assets/imagenew/icon-wa.svg" alt=""
                                class="bg-wa position-absolute start-0 bottom-0  mt-0 top-0 m-2">
                            <select name="phone" id="phone" class="form-control select2 ps-5 py-2"
                                data-placeholder="<?= @$_GET['lang'] == 'eng' ? 'Choose a branch office' : 'Pilih kantor cabang' ?>"
                                required>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                                <?php
                                foreach ($this->db->query("SELECT phone,nama FROM log_branch WHERE phone!='' ORDER BY nama ASC")->result()  as $b) {
                                    $numberAPI = $b->phone;
                                    $n1API = substr($numberAPI, 1);
                                    $apiWa = $n1API;
                                ?>
                                <option value="<?= $b->phone; ?>"><?= $b->nama; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3 position-relative">
                            <textarea name="message" class="form-control" cols="70" rows="4"
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Write your message here' : 'Tulis pesan anda disini' ?>"
                                id="message" required=""></textarea>
                            <button id="submitWA" type="submit"
                                class="btn bg-blue border-0 position-absolute bottom-0 end-0 m-2 fw-bold fs-12"><?= @$_GET['lang'] == 'eng' ? 'Send' : 'Kirim' ?></button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="booking-online border-top border-3">
    <div class="container-xxl py-5 px-lg-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-7">
                <div class="header-title d-flex justify-content-center mb-5" data-aos="fade-up"
                    data-aos-duration="1000">
                    <h2 class="text-uppercase"><?= @$_GET['lang'] == 'eng' ? $vendor->title_eng : $vendor->title ?></h2>
                </div>

                <div class="content mt-5">
                    <p data-aos="fade-up" data-aos-duration="1000">
                        <?= @$_GET['lang'] == 'eng' ? $vendor->deskripsi_eng : $vendor->deskripsi ?></p>

                    <div class="download mt-5" data-aos="fade-up" data-aos-duration="1000">
                        <a href="https://maskargo.digitalindo.co.id/upload/vendor/<?= $vendor->image; ?>"
                            class="bg-blue px-3 py-2"><i class="fa fa-download"></i>
                            <?= @$_GET['lang'] == 'eng' ? 'DOWNLOAD FORM' : 'UNDUH FORMULIR' ?></a>
                    </div>
                    <div class="download mt-5" data-aos="fade-up" data-aos-duration="1000">
                        <a href="" data-bs-toggle="modal" data-bs-target="#modalVendor"
                            class="bg-red px-3 py-2 text-white"><i class="fa fa-upload"></i>
                            <?= @$_GET['lang'] == 'eng' ? 'UPLOAD' : 'UNGGAH' ?></a>
                    </div>

                    <?php
                    if (isset($msg)) {
                        header("refresh:2;" . base_url('mitra'));
                    }
                    ?>

                    <div class="mt-5">
                        <strong><?= @$msg; ?></strong>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<!-- Modal Login -->
<div class="modal" id="modalVendor">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header border-0">
                <h4 class="modal-title text-dark">
                    <?= @$_GET['lang'] == 'eng' ? 'Upload Form Registrasi Mitra' : 'Unggah Formulir Registrasi Mitra' ?>
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <style>
            #modalVendor .form-box {
                box-shadow: 0 -1px 3px rgba(0, 0, 0, .12), 0 1px 2px rgba(0, 0, 0, .24);
                padding: 20px;
            }
            </style>
            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-box">
                    <form method="post" action="<?= base_url(); ?>kontak/registrasi" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="false"
                                        placeholder="<?= @$_GET['lang'] == 'eng' ? 'Name of the sender' : 'Nama Pengirim' ?>"
                                        required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" id="email" class="form-control"
                                        autocomplete="false" placeholder="Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="telp" id="telp" class="form-control" autocomplete="false"
                                        placeholder="<?= @$_GET['lang'] == 'eng' ? 'Phone number' : 'No.Telp' ?>"
                                        onkeypress="return hanyaAngka(event)" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="pic" id="pic" class="form-control" autocomplete="false"
                                        placeholder="PIC" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="dedicated" id="dedicated" class="form-control"
                                        autocomplete="false" placeholder="Dedicated" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="cs" id="cs" class="form-control" autocomplete="false"
                                        placeholder="CS" required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" name="direksi" id="direksi" class="form-control"
                                        autocomplete="false" placeholder="Direksi" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p style="font-size: 14px; color: #777;">
                                    <?= @$_GET['lang'] == 'eng' ? 'Upload form registration mitra with .PDF format' : 'Unggah formulir pendaftaran mitra dengan format .PDF' ?>
                                </p>
                                <div class="mb-3">
                                    <label><?= @$_GET['lang'] == 'eng' ? 'Form File' : 'Berkas Formulir' ?></label>
                                    <input name="file" class="form-control" type="file" class="alt"
                                        accept="application/pdf" required />
                                </div>
                                <div class="row">
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label><?= @$_GET['lang'] == 'eng' ? 'Office Picture' : 'Gambar Tim' ?></label>
                                            <input name="office_picture" onchange="readURL(this);" class="form-control"
                                                type="file" class="alt" accept="image/*" required />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <img id="office_picture"
                                            src="http://mas-kargo.co.id/assets/images/img-preview.png" alt=""
                                            class="img-fluid" />
                                    </div>
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label><?= @$_GET['lang'] == 'eng' ? 'Team Picture' : 'UNGGAH' ?></label>
                                            <input name="team_picture" onchange="readURL(this);" class="form-control"
                                                type="file" class="alt" accept="image/*" required />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <img id="team_picture"
                                            src="http://mas-kargo.co.id/assets/images/img-preview.png" alt=""
                                            class="img-fluid" />
                                    </div>
                                    <div class="col-8">
                                        <div class="mb-3">
                                            <label><?= @$_GET['lang'] == 'eng' ? 'Vehicle Picture' : 'Gambar Kendaraan' ?></label>
                                            <input name="vehicle_picture" onchange="readURL(this);" class="form-control"
                                                type="file" class="alt" accept="image/*" required />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <img id="vehicle_picture"
                                            src="http://mas-kargo.co.id/assets/images/img-preview.png" alt=""
                                            class="img-fluid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <div id="recaptcha" class="g-recaptcha d-flex justify-content-center"
                                data-sitekey="<?php echo $this->config->item('google_key') ?>"
                                data-callback="enableBtnkontak">
                            </div>
                            <input type="submit" id="btn-validate" class="btn-danger px-5 py-3 border-0 mt-4"
                                value="<?= (@$_GET['lang'] == 'eng') ? 'SEND' : 'KIRIM'; ?>" disabled="true">
                        </div>
                    </form>
                </div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-danger"
                    data-bs-dismiss="modal"><?= @$_GET['lang'] == 'eng' ? 'Close' : 'Tutup' ?></button>
            </div>

        </div>
    </div>
</div>





<!-- <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script> -->

<script>
function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

$(document).ready(function() {
    $(".select2").select2();
});
$(document).ready(function() {
    base_url = '<?php echo base_url(); ?>';
    $("#contact").submit(function() {
        $("#submitContact").attr("disabled", true);
        var data = {
            name: $("#inputName").val(),
            email: $("#inputEmail").val(),
            phone: $("#inputPhone").val(),
            subject: $("#inputSubject").val(),
            message: $("#inputMessage").val()
        };
        $.ajax({
            type: "POST",
            url: base_url + "sendmail",
            data: data,
            success: function() {
                $('.success').fadeIn(1000);
                $("#submitContact").attr("disabled", false);
                setInterval(function() {
                    window.location = base_url + 'thank_you';
                }, 3000);
            },

            error: function() {
                $('.error').fadeIn(1000);
                $("#submitContact").attr("disabled", false);
            }
        });
        return false;
    });


    $("#whatsapp").submit(function() {
        $("#submitWA").attr("disabled", true);
        base_url = "<?= base_url(); ?>kontak";
        phone = $("#phone").val();
        text = $("#message").val();

        window.open('https://web.whatsapp.com/send?phone=62' + phone + '&text=' + text);
        window.location = base_url;
        return false;
    });
});
</script>


<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        var id = input.name;
        reader.onload = function(e) {
            $('#' + id)
                .attr('src', e.target.result)
                .width(100)
                .height(100);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function enableBtnkontak() {
    document.getElementById("btn-validate").disabled = false;
}


function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>