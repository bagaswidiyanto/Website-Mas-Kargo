<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="booking-online">
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
                    <form method="post" action="<?= base_url(); ?>mitra/registrasi" enctype="multipart/form-data">
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
                                    <input name="file_name" class="form-control" type="file" class="alt" required />
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