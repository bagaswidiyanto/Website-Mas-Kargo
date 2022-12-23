<div class="hero-header">
    <img src="https://maskargo.digitalindo.co.id/upload/slider/<?= $slider->image; ?>" class="img-fluid" alt="">
</div>
</div>
<!-- Navbar & Hero End -->


<div class="booking-online">
    <div class="container-xxl py-5 px-lg-5">
        <div class="header-title">
            <h2><?= @$_GET['lang'] == 'eng' ? 'BOOKING ONLINE' : 'PEMESANAN ONLINE' ?></h2>
        </div>
        <form method="post" action="<?= base_url(); ?>booking">
            <div class="row justify-content-center mt-5">
                <div class="mb-3 col-lg-4 col-md-4">
                    <label>Type BOOKING</label>
                    <div class="position-relative">
                        <i class="fa fa-chevron-down position-absolute end-0 top-1 m-2"></i>
                        <select name="jenisBooking" class="form-control " required>
                            <option value="" selected disabled>Booking Type</option>
                            <?php foreach ($this->db->get("tbl_jenis_booking")->result() as $isi) { ?>
                            <option value="<?= $isi->id; ?>" required><?= $isi->tipe; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <style>
            .booking-online .form-control {
                background: #EEEEEE;
                color: #000;
            }
            </style>

            <div class="row mt-5">
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="mb-3 mb-md-4 col-lg-12 text-center">
                            <p class="text-decoration-underline">
                                <?= @$_GET['lang'] == 'eng' ? 'Recipient Info' : 'Info Penerima' ?></p>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label><?= @$_GET['lang'] == 'eng' ? 'Full Name' : 'Nama Lengkap' ?></label>
                            <input type="text" name="namaPenerima" class="form-control"
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Full Name' : 'Nama lengkap' ?>" required>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label><?= @$_GET['lang'] == 'eng' ? 'Recipient Address' : 'Alamat Penerima' ?></label>
                            <input type="text" name="alamatPenerima" class="form-control"
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Address' : 'Alamat' ?>" required>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label>No. Telp/HP</label>
                            <input type="text" name="telpPenerima" class="form-control" placeholder="08xxxxxxxxxx"
                                onkeypress="return hanyaAngka(event)">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label><?= @$_GET['lang'] == 'eng' ? 'Sub-district/Regency' : 'Kecamatan/Kabupaten' ?></label>
                            <input type="text" name="kecamatanPenerima" minlength="3" class="form-control"
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Minimum 3 letters' : 'Minimal 3 huruf' ?>"
                                required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="mb-3 mb-md-4 col-lg-12 text-center">
                            <p class="text-decoration-underline">
                                <?= @$_GET['lang'] == 'eng' ? 'Sender Info' : 'Info Pengirim' ?></p>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label><?= @$_GET['lang'] == 'eng' ? 'Full Name' : 'Nama Lengkap' ?></label>
                            <input type="text" name="namaPengirim" class="form-control"
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Full Name' : 'Nama lengkap' ?>" required>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label><?= @$_GET['lang'] == 'eng' ? 'Recipient Address' : 'Alamat Penerima' ?></label>
                            <input type="text" name="alamatPengirim" class="form-control"
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Address' : 'Alamat' ?>" required>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label>No. Telp/HP</label>
                            <input type="text" name="telpPengirim" class="form-control" placeholder="08xxxxxxxxxx"
                                onkeypress="return hanyaAngka(event)">
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label><?= @$_GET['lang'] == 'eng' ? 'Sub-district/Regency' : 'Kecamatan/Kabupaten' ?></label>
                            <input type="text" name="kecamatanPengirim" minlength="3" class="form-control"
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Minimum 3 letters' : 'Minimal 3 huruf' ?>"
                                required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="row">
                        <div class="mb-3 mb-md-4 col-lg-12 text-center">
                            <p class="text-decoration-underline">
                                <?= @$_GET['lang'] == 'eng' ? 'Package Information' : 'Informasi Paket' ?></p>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label><?= @$_GET['lang'] == 'eng' ? 'Package' : 'Paket' ?></label>
                            <input type="text" name="isiBarang" class="form-control"
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Package contents' : 'Isi paket' ?>"
                                required>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label><?= @$_GET['lang'] == 'eng' ? 'Package Weight' : 'Berat Paket' ?></label>
                            <input type="text" name="kilo" class="form-control"
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Weight' : 'Berat' ?>"
                                onkeypress="return hanyaAngka(event)" required>
                        </div>
                        <div class="mb-3 col-lg-12">
                            <label></label>
                            <textarea name="keterangan" class="form-control" rows="3"
                                placeholder="<?= @$_GET['lang'] == 'eng' ? 'Notes' : 'Catatan' ?>" required></textarea>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-3">
                <div class="col-lg-4 col-md-4 text-center">
                    <div id="recaptcha" class="g-recaptcha d-flex justify-content-center"
                        data-sitekey="<?php echo $this->config->item('google_key') ?>" data-callback="enableBtnkontak">
                    </div>
                    <input type="submit" name="submit" id="btn-validate"
                        value="<?= @$_GET['lang'] == 'eng' ? 'Send Booking' : 'Kirim Pemesanan' ?>"
                        class="btn btn-danger fs-5 fw-bold px-4 py-2 mt-4" disabled="true">
                </div>
            </div>
        </form>
    </div>
</div>

<script>
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